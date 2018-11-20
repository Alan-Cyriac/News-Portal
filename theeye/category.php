<?php

	include 'index_header.php';
	include 'database.php';

	$id=$_GET['cat_id'];
	$sql = "SELECT id,title,image FROM news WHERE category_id='". mysqli_real_escape_string( $conn,$id ) ."' ORDER BY date DESC";
	$query = $conn->query($sql); 

	$cat_name="SELECT category_name FROM category WHERE id='$id'";
	$category_result=$conn->query($cat_name);

	while($cat_row =$category_result->fetch_assoc()){
		$cat_result[]= $cat_row;
	}

	while($news_titles =$query->fetch_assoc()){
		$news_title[]= $news_titles;
	}

?>

<div class="col-sm-12 category-shift-left">
	<h2 class="category-name"><?=$cat_result[0]['category_name']?></h2>	
</div>


<div class="col-sm-12">
	<?php for ($i=0; $i < $query->num_rows ; $i++) { ?>
		<div class="col-sm-2"></div>
		<div class="col-sm-9 category-shift-news">
			<div class="row">
	  			<a href="detailed.php?top_id=<?=$news_title[$i]['id']?>">
				  	<div class="col-sm-1"><img src="uploads/<?=$news_title[$i]['image']?>" class="category-img-size"></div>
					<div class="col-sm-8 category-font-size"><?=$news_title[$i]['title']?></div><br><br><br><br><br><br><br>
				</a>
			</div>  	
		</div>
	<?php } ?>
	<div class="col-sm-1"></div>
</div><br>
<div class="col-sm-12">
	<p style="text-align: center;">Created by Alan Cyriac,CSE Student @ VISAT,Elanji,Ernakulam</p>
	<p style="text-align: center;">Contact: alancyriac1996@gmail.com</p>
</div>

</body>
</html>