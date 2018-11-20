<?php 
	include 'database.php';
	include 'header.php';
	include 'menu.php';

	

	if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['id'])){

		$category_id=mysqli_real_escape_string($conn,$_GET['id']);
		
		$category_delete="DELETE FROM category WHERE id='$category_id'";
		mysqli_query($conn,$category_delete);

	}

	$sql="SELECT * FROM category";
	$list_category=$conn->query($sql);

	$row = $list_category->num_rows;

?>

<div class="col-sm-9">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-9" >
						<div class="col-sm-12">
							<div><a href="category_addition.php" class="btn btn-info btn-right">Add</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row col-sm-12">
				
				<table class="table table-bordered" style="text-align: center;">
					<tr>
						<th>Sl.No</th>
						<th>Category Name</th>
						<th>status</th>
						<th>Action</th>
					</tr>
					
					<?php while ($row = $list_category->fetch_assoc()) { ?>
					<tr>
						<td><?php echo $row["id"]; ?></td>
						<td><?php echo $row["category_name"];?></td>
						<td><?php echo $row["status"]; ?></td>
						<th>
							<a href="category_edit.php?edit_id=<?=$row['id']?>" class="btn btn-info">Edit</a>
							<a href="category_list.php?id=<?=$row['id']?>" id="categorydelete" class="btn btn-warning" onclick="myFunction()">Delete</a>
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