<?php 
	include 'database.php';
	include 'header.php';
	include 'menu.php';
	if(isset($_POST['user']) && isset($_POST['status'])){

		$user_edit=mysqli_real_escape_string($conn,$_POST["user"]);
		$status=mysqli_real_escape_string($conn,$_POST["status"]);
		$psw_edit=mysqli_real_escape_string($conn,$_POST["psw"]);
		
		$update="UPDATE users SET user_name='$user_edit',password='$psw_edit',status='$status' WHERE id=".$_GET['edit_id'];
		$conn->query($update);
	}

	if(isset($_GET['edit_id'])){

		$id=$_GET['edit_id'];
		$sql = "SELECT id,user_name,password,status FROM users WHERE id='". mysqli_real_escape_string( $conn,$id ) ."'";
		$query = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($query)){
			$user_row[] = $row;
		}
	}
	else{
		echo "id is not reached";
	}
 ?>

<div class="col-sm-9 col-pad">
	<form autocomplete="on" method="post" enctype="multipart/form-data">
		<div class="col-sm-12">
			<div class="row form-pad">
				<div class="col-sm-3"><label>User name</label> </div>
				<div class="col-sm-9">
					<?php echo '<input type="text" name="user" class="form-style" value="'.$user_row[0]['user_name'].'" required>';?>
				</div>
			</div>

			<div class="row form-pad">
				<div class="col-sm-3"><label>Password</label> </div>
				<div class="col-sm-8">
					<?php echo '<input type="text" name="psw" class="form-style" value="'.$user_row[0]['password'].'" required>';?>
				</div>
			</div>
			
			<div class="row form-pad">
				<div class="col-sm-3"><label>Status</label> </div>
				<div class="col-sm-8">
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
					<a href="user_list.php" class="btn btn-warning">Cancel</a>
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