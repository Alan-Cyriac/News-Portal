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

	if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['dropuser']) && isset($_POST['droppassword'])){

		$dropuser=mysqli_real_escape_string($conn,$_POST['dropuser']);
		$droppassword=mysqli_real_escape_string($conn,$_POST['droppassword']);


		$sql = "SELECT * FROM users WHERE user_name='$dropuser' AND password='$droppassword'";
		$result = mysqli_query($conn,$sql);

		$check = mysqli_fetch_assoc($result);

		if(isset($check)){
			$user_drop="DELETE FROM users WHERE user_name='$dropuser' AND password='$droppassword'";
			mysqli_query($conn,$user_drop);
		}
		else{
			echo "<h2>User not present</h2>";
		}
	}
 ?>

<div class="col-sm-9">
		<h2>ADD USER</h2>
		<form action="add_users.php" autocomplete="on" method="post" enctype="multipart/form-data" class="shift-info">
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
						<button type="reset" class="btn btn-warning">Cancel</button>
					</div>
					<div class="col-sm-2">
						<input type="hidden" name="save-btn" />
						<input type="submit" name="save-btn" value="submit" class="btn btn-success">
					</div>
				</div><br><br>
			</div>
		</form>

		<h2>Drop User</h2>
		<form action="add_users.php" autocomplete="on" method="post" enctype="multipart/form-data" class="shift-info">
			<div class="col-sm-12">
				<div class="row form-pad">
					<div class="col-sm-3"><label>User name</label></div>
					<div class="col-sm-9">
						<input type="text" name="dropuser" placeholder="Enter user to be dropped..." class="form-style" required>
					</div>	
				</div>
				<div class="row form-pad">
					<div class="col-sm-3"><label>Password</label></div>
					<div class="col-sm-9">
						<input type="text" name="droppassword" placeholder="Enter password of the user..." class="form-style" required>
					</div>	
				</div>
				<div class="row form-pad">
					<div class="col-sm-3"></div>
					<div class="col-sm-2">
						<button type="reset" class="btn btn-warning">Cancel</button>
					</div>
					<div class="col-sm-2">
						<input type="hidden" name="save-btn" />
						<input type="submit" name="save-btn" value="Drop" class="btn btn-danger">
					</div>
				</div><br><br><br><br><br><br><br><br><br>
			</div>
		</form>
	</div>
 <?php 

	include 'footer.php';

 ?>