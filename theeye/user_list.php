<?php 
	include 'header.php';
	include 'menu.php';
	include 'database.php';

	if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['id'])){

		$user_id=mysqli_real_escape_string($conn,$_GET['id']);

		$sql = "SELECT * FROM users WHERE id='$user_id'";
		$result = mysqli_query($conn,$sql);

		$check = mysqli_fetch_assoc($result);

		if(isset($check)){
			$user_drop="DELETE FROM users WHERE id='$user_id'";
			mysqli_query($conn,$user_drop);
		}
		else{
			echo "<h2>User not present</h2>";
		}
	}

	$user= "SELECT id,user_name,password,status FROM users";
	$list_user=$conn->query($user);
 ?>

<div class="col-sm-9">
	<div class="col-sm-12">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-9" >
			<div class="col-sm-12">
				<div><a href="user_add.php" class="btn btn-info btn-right">Add</a></div>
			</div>
		</div>
	</div>
</div>
<div class="row col-sm-12">
	
	<table class="table table-bordered" style="text-align: center;">
		<tr>
			<th>Sl.No</th>
			<th>User name</th>
			<th>Password</th>
			<th>status</th>
			<th>Action</th>
		</tr>
		
		<?php while ($row = $list_user->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $row["id"]; ?></td>
			<td><?php echo $row["user_name"];?></td>
			<td><?php echo $row["password"];?></td>
			<td><?php echo $row["status"]; ?></td>
			<th>
				<a href="user_edit.php?edit_id=<?=$row['id']?>" class="btn btn-info">Edit</a>
				<a href="user_list.php?id=<?=$row['id']?>" id="dropuser" class="btn btn-warning" onclick="myFunction()">Delete</a>
			</th>
		</tr>
		<?php } ?>
	</table>
</div>
</div>
<script>
	function myFunction() {
		alert("Deleted Sucessfully");
	}
</script>	

 <?php 

	include 'footer.php';

 ?>