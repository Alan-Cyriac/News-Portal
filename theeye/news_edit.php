<?php 

	include 'header.php';
	include 'menu.php';
	include 'database.php';

	if($_SERVER['REQUEST_METHOD'] == "POST"){

		
		$category_id=mysqli_real_escape_string($conn,$_POST['category']);
		$title=mysqli_real_escape_string($conn,$_POST['title']);
		$description=mysqli_real_escape_string($conn,$_POST['description']);
		$date=$_POST["date"];
		//IMAGE PROCESSING
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$image=$_FILES["fileToUpload"]["name"];
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["save-btn"])) {
	    	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    	if($check !== false) {
	        	$uploadOk = 1;
	    	}
	    	else {
	        	echo "File is not an image.";
	        	$uploadOk = 0;
	    	}
		}

		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
	    	echo "Sorry, your file is too large.";
	    	$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
	    	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    	$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
	    	echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} 
		else {
	    	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	        	$success=1;
	    	} else {
	        	echo "Sorry, there was an error uploading your file.";
	    	}
		}
		$image=mysqli_real_escape_string($conn,$_FILES["fileToUpload"]["name"]);
		$status=mysqli_real_escape_string($conn,$_POST["status"]);


		$update="UPDATE news SET category_id='$category_id',title='$title',description='$description',date='$date',image='$image',
		status='$status'";
		mysqli_query($conn,$update);
	}

?>

<?php 

	$id=$_GET['id'];
	$sql = "SELECT * FROM news WHERE id='". mysqli_real_escape_string( $conn,$id ) ."'";
	$query = mysqli_query($conn,$sql);
	$news = array();

	while($row = mysqli_fetch_assoc($query)){
		$news = $row;
	}

 ?>

	<div class="col-sm-9 col-pad">
		<form autocomplete="on" method="post" enctype="multipart/form-data">
			<div class="col-sm-12">
				<div class="row form-pad">
					<div class="col-sm-3"><label>Category</label></div>
					<div class="col-sm-9">
						<?php  
							$sql = "SELECT id,category_name FROM category";
							$result = mysqli_query($conn,$sql);

							echo "<select name='category' class='btn btn-default' required>";
							echo "<option>select category</options>";

							while ($row = mysqli_fetch_array($result)) 
							{ ?>
								<option  value='<?=$row['id']?>' <?=$news['category_id']==$row['id']?'selected':''?>>
								<?=$row['category_name']?> </option>
							<?php }
							echo "</select>";
						?>
					</div>
				</div>
				<div class="row form-pad">
					<div class="col-sm-3"><label>Title</label></div>
					<div class="col-sm-8">
						<?php
							echo '<input type="text" name="title" value="'.$news['title'].'" placeholder="Enter Title" class="form-style" required>';
						?>
					</div>
				</div>
				<div class="row form-pad">
					<div class="col-sm-3"><label>Description</label></div>
					<div class="col-sm-8">
						<?php
							echo '<textarea type="text" name="description" placeholder="Enter Description" rows="5" class="form-style" required>'.$news['description'].'</textarea>';
						?>
						</div>
					</div>
				<div class="row form-pad">
					<div class="col-sm-3"><label>Date</label></div>
					<div class="col-sm-8">
						<?php
						 echo '<input type="Date" name="date" placeholder="date" value="'.$news['date'].'" class="form-style" min="2000-01-02"
						 max="2100-12-31" required>';
						?>
					</div>
				</div>
				<div class="row form-pad">
					<div class="col-sm-3"><label>Image</label></div>
					<div class="col-sm-8">
						
						<input type="file" name="fileToUpload" id="fileToUpload" value="<?=$news['image']?>" 
						src="uploads/<?=$news['image']?>" class="form-style">
					</div>
				</div>
				<div class="row form-pad">
					<div class="col-sm-3"><label>Insertred Image</label></div>
					<div class="col-sm-8">
							<img src="uploads/<?=$news['image']?>" width=100px>
					</div>
				</div>
				<div class="row form-pad">
					<div class="col-sm-3"><label>Status</label></div>
					<div class="col-sm-8">
						<?php
							echo '<select name="status" class="btn btn-default" required>';
							echo '<option value="'.$news['status'].'">active</option>';
						 	echo '<option value="Inactive">inactive</option>';
							echo '</select>';
						?>
					</div>
				</div><br>
				<div class="row form-pad">
					<div class="col-sm-3"></div>
					<div class="col-sm-2">
						<a href="news.php" class="btn btn-warning">Cancel</a>
					</div>
					<div class="col-sm-2">
						<input type="submit" name="save-btn" value="submit" class="btn btn-success">
						<input type="hidden" name="save-btn" />
					</div>
				</div><br><br><br><br><br><br><br><br>
			</div>
		</form>
	</div>
		

<?php 
	include 'footer.php';
 ?>