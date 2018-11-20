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

	if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['categorydelete'])){

		$categoryname=mysqli_real_escape_string($conn,$_POST['categorydelete']);
		
		$category_delete="DELETE FROM category WHERE category_name='$categoryname'";
		mysqli_query($conn,$category_delete);

	}

	$sql="SELECT category_name FROM category";
	$list_category=$conn->query($sql);

	$row = $list_category->num_rows;

?>
	<div class="col-sm-9">
		<div class="col-sm-12">
			<div class="row">
				<!--List Category-->
				<table>
					<tr><h2>CATEGORY LIST</h2></tr>
					<tr class="category-shift-left">
						<?php while ($rows = $list_category->fetch_assoc()) { ?>
								<th class="btn btn-default"><b><?php echo $rows["category_name"];?></b></th>
						<?php } ?>
					</tr>
				</table>
			</div><br><br>
		</div>
		<h2>ADD CATERGORY</h2>
		<form action="category_add.php" autocomplete="on" method="post" enctype="multipart/form-data" class="shift-info">
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
						<button type="reset" class="btn btn-warning">Cancel</button>
					</div>
					<div class="col-sm-2">
						<input type="hidden" name="save-btn" />
						<input type="submit" name="save-btn" value="submit" class="btn btn-success">
					</div>
				</div><br><br>
			</div>
		</form>

		<h2>DELETE CATEGORY</h2>
		<form action="category_add.php" autocomplete="on" method="post" enctype="multipart/form-data" class="shift-info">
			<div class="col-sm-12">
				<div class="row form-pad">
					<div class="col-sm-3"><label>Category Name</label></div>
					<div class="col-sm-9">
						<input type="text" name="categorydelete" placeholder="Enter category to be deleted..." class="form-style" required>
					</div>	
				</div>
				<div class="row form-pad">
					<div class="col-sm-3"></div>
					<div class="col-sm-2">
						<button type="reset" class="btn btn-warning">Cancel</button>
					</div>
					<div class="col-sm-2">
						<input type="hidden" name="save-btn" />
						<input type="submit" name="save-btn" value="Delete" class="btn btn-danger">
					</div>
				</div><br><br><br><br><br><br>
			</div>
		</form>
	</div>

<?php 
	include 'footer.php';
 ?>