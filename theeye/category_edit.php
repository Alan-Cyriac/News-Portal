<?php 
	include 'database.php';
	include 'header.php';
	include 'menu.php';

	if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['category']) && isset($_POST['status'])){

		$category=mysqli_real_escape_string($conn,$_POST["category"]);
		$status=mysqli_real_escape_string($conn,$_POST["status"]);

		$update="UPDATE category SET category_name='$category',status='$status' WHERE id=".$_GET['edit_id'];
		mysqli_query($conn,$update);
	}

	if(isset($_GET['edit_id'])){

		$id=$_GET['edit_id'];
		$sql = "SELECT id,category_name,status FROM category WHERE id='". mysqli_real_escape_string( $conn,$id ) ."'";
		$query = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($query)){
			$category_row[] = $row;
		}
	}
 ?>

<div class="col-sm-9 col-pad">
	<form autocomplete="on" method="post" enctype="multipart/form-data">
		<div class="col-sm-12">

			<div class="row form-pad">
				<div class="col-sm-3"><label>Category</label></div>
				<div class="col-sm-9">
				<?php echo '<input type="text" name="category" class="form-style" value="'.$category_row[0]['category_name'].'" required>';?>
				</div>
			</div>
			
			<div class="row form-pad">
				<div class="col-sm-3"><label>Status</label></div>
				<div class="col-sm-9">
					<?php
						echo '<select name="status" class="btn btn-default" required>';
						echo '<option value="Active">Active</option>';
					 	echo '<option value="Inactive">Inactive</option>';
						echo '</select>';
					?>
				</div>
			</div>

			<div class="row form-pad">
				<div class="col-sm-3"></div>
				<div class="col-sm-2">
					<a href="Category_list.php" class="btn btn-warning">Cancel</a>
				</div>
				<div class="col-sm-2">
					<input type="submit" name="save-btn" value="submit" class="btn btn-success">
					<input type="hidden" name="save-btn" />
				</div>
			</div><br><br><br><br><br><br><br><br><br>
		</div>
	</form>
</div>

<?php 
	include 'footer.php';
 ?>