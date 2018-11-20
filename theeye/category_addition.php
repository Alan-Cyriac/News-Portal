<?php 
	include 'database.php';
	include 'header.php';
	include 'menu.php';

	if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['categoryname']) && isset($_POST['status'])){


		$category_name=mysqli_real_escape_string($conn,$_POST['categoryname']);
		$status=mysqli_real_escape_string($conn,$_POST['status']);

		$uploads="INSERT INTO category(category_name,status) VALUES ('$category_name','$status')";
		$conn->query($uploads);

	}
?>
<div class="col-sm-9">
	<h2>ADD CATERGORY</h2>
	<form action="category_addition.php" autocomplete="on" method="post" enctype="multipart/form-data" class="shift-info">
		<div class="col-sm-12">
			<div class="row form-pad">
				<div class="col-sm-3"><label>Category Name</label></div>
				<div class="col-sm-9">
					<input type="text" name="categoryname" placeholder="Enter new category..." class="form-style" required>
				</div>	
			</div>
			<div class="row form-pad">
				<div class="col-sm-3"><label>Status</label></div>
				<div class="col-sm-8">
					<select name="status" class="btn btn-default" required>
							<option>Select Status</option>
							<option value="Active">Active</option>
						 	<option value="Inactive">Inactive</option>
					</select>
				</div>
			</div>
			<div class="row form-pad">
				<div class="col-sm-3"></div>
				<div class="col-sm-2">
					  <a href="category_list.php" class="btn btn-warning">Cancel</a> 
				</div>
				<div class="col-sm-2">
					<input type="hidden" name="save-btn" />
					<input type="submit" name="save-btn" value="submit" class="btn btn-success">
				</div>
			</div><br><br>
		</div>
	</form>
</div>

<?php 
	include 'footer.php';
 ?>