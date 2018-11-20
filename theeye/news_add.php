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

		$upload="INSERT INTO news(category_id,title,description,date,image,status) 
		VALUES ($category_id,'$title','$description','$date','$image','$status')";
		mysqli_query($conn,$upload);
	}
	
?>
	<div class="col-sm-9 col-pad">
			<form autocomplete="on" action="news_add.php" method="post" enctype="multipart/form-data">
				<div class="col-sm-12">
					<div class="row form-pad">
						<div class="col-sm-3"><label>Category</label></div>
						<div class="col-sm-9">
							<?php  
								$sql = "SELECT id,category_name FROM category";
								$result = mysqli_query($conn,$sql);

								echo "<select name='category' class='btn btn-default' required>";
								echo "<option value=''>select category</options>";
								while ($row = mysqli_fetch_array($result)) {
								echo "<option value='" . $row['id'] ."'>" . $row['category_name'] ."</option>";
								}
								echo "</select>";
							?>
						</div>
					</div>
					<div class="row form-pad">
						<div class="col-sm-3"><label>Title</label></div>
						<div class="col-sm-8">
							<input type="text" name="title" placeholder="Enter Title" class="form-style" required>
						</div>
					</div>
					<div class="row form-pad">
						<div class="col-sm-3"><label>Description</label></div>
						<div class="col-sm-8">
							<textarea type="text" name="description" placeholder="Enter Description" rows="5" class="form-style" required></textarea>
						</div>
					</div>
					<div class="row form-pad">
						<div class="col-sm-3"><label>Date</label></div>
						<div class="col-sm-8">
							<input type="Date" name="date" placeholder="Enter Title" class="form-style" min="2000-01-02" max="2100-12-31" required>
						</div>
					</div>
					<div class="row form-pad">
						<div class="col-sm-3"><label>Image</label></div>
						<div class="col-sm-8">
							<input type="file" name="fileToUpload" id="fileToUpload" class="form-style" required>
						</div>
					</div>
					<div class="row form-pad">
						<div class="col-sm-3"><label>Status</label></div>
						<div class="col-sm-8">
							<select name="status" class="btn btn-default" required>
  								<option>Select Status</option>
  								<option value="Active">active</option>
 							 	<option value="Inactive">inactive</option>
 							 </select>
						</div>
					</div><br>
					<div class="row form-pad">
						<div class="col-sm-3"></div>
						<div class="col-sm-2">
							<a href="news.php" class="btn btn-warning">Cancel</a>
						</div>
						<div class="col-sm-2">
							<input type="hidden" name="save-btn" />
							<input type="submit" name="save-btn" value="submit" class="btn btn-success">
						</div>
					</div><br><br><br><br><br><br>
				</div>
			</form>
		</div>

<?php 

	include 'footer.php';

 ?>