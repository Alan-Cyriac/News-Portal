<?php 
	include 'database.php';
	include 'header.php';
	include 'menu.php';

	#DELETE SECTION
	if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['id'])){

		$id=$_GET['id'];
		$sql = "DELETE FROM news WHERE id='". mysqli_real_escape_string( $conn,$id ) ."'";
		$query = mysqli_query($conn,$sql);
	}

	if (isset($_POST['delete'])) {
		echo "Deleted";
	}


	#DISPLAY SECTION
	$display="SELECT news.*,category.category_name FROM news INNER JOIN category ON news.category_id=category.id";
	
	$display_result=$conn->query($display);

	$row = $display_result->num_rows;
?>

	<div class="col-sm-9">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-9" >
						<div class="col-sm-12">
							<div><a href="news_add.php" class="btn btn-info btn-right">Add</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row col-sm-12">
				<div class="row">
					<table class="table table-bordered " style="text-align: center;">
						<tr>
							<th>Sl.No</th>
							<th>Category Name</th>
							<th>Title</th>
							<th class="view">Description</th>
							<th>Date</th>
							<th>status</th>
							<th>Action</th>
						</tr>
						
						<?php while ($row = $display_result->fetch_assoc()) { ?>
						<tr>
							<td><?php echo $row["id"]; ?></td>
							<td><?php echo $row["category_name"];?></td>
							<?php $title=$row["title"]; ?>
							<td><?php echo substr($title,0,15); ?>...</td>
							<?php $desc=$row["description"]; ?>
							<td><?php echo substr($desc,0,20); ?>...</td>
							<td><?php $date = date_create($row['date']);
									echo date_format($date,'d/m/y');
							 ?></td>
							<td><?php echo $row["status"]; ?></td>
							<th>
								<a href="news_edit.php?id=<?=$row['id']?>"  class="btn btn-info">Edit</a>
								<a href="news.php?id=<?=$row['id']?>" id="delete" class="btn btn-warning" onclick="myFunction()">Delete</a>
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