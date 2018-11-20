<?php 
	include 'header.php';
	include 'menu.php';
	include 'database.php';

	if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['uname']) && isset($_POST['psw']) && isset($_POST['status'])){

		$u_name=mysqli_real_escape_string($conn,$_POST['uname']);
		$password=mysqli_real_escape_string($conn,$_POST['psw']);
		$status=mysqli_real_escape_string($conn,$_POST['status']);

		$upload="INSERT INTO users(user_name,password,status) VALUES ('$u_name','$password','$status')";
		mysqli_query($conn,$upload);

	}
?>

<div class="col-sm-9">
	<h2>ADD USER</h2>
	<form action="user_add.php" autocomplete="on" method="post" enctype="multipart/form-data" class="shift-info">
		<div class="col-sm-12">
			<div class="row form-pad">
				<div class="col-sm-3"><label>User Name</label></div>
				<div class="col-sm-9">
					<input type="text" name="uname" placeholder="Enter new user..." class="form-style" required>
				</div>	
			</div>
			<div class="row form-pad">
				<div class="col-sm-3"><label>Password</label></div>
				<div class="col-sm-9">
					<input type="text" name="psw" placeholder="Enter password..." class="form-style" required>
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
			</div>
			<div class="row form-pad">
				<div class="col-sm-3"></div>
				<div class="col-sm-2">
					<a href="user_list.php" class="btn btn-warning">Cancel </a>
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