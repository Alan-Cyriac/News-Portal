
							<!-- Created by Alan Cyriac || Contact: alancyriac1996@gmail.com-->

<?php 

	include 'index_header.php';
	
	//topnews->detailed.php 
	$topnews='SELECT id,title,image FROM news ORDER BY date desc LIMIT 6';
	$topnewsresult=$conn->query($topnews);
	$top_rows = array();
	while ($rows =$topnewsresult->fetch_assoc()) {
		$top_rows[]=$rows;
	}
	//SPORTS->detailed.php
	$sports='SELECT id,title,description FROM news WHERE category_id=5 ORDER BY date desc LIMIT 1';
	$sports_result=$conn->query($sports);
	$sports_row=array();
	while ($s_row=$sports_result->fetch_assoc()) {
		$sports_row[]=$s_row;
	}

 ?>

<div class="col-sm-12">
	<div class="row index-shift-topnews index-topnews">
		<h2>TOP STORIES</h2>
	</div>
</div>

<div class="col-sm-12">
	<div class="row">
		<div class="topnews col-sm-6 dimension-mainnews">
			<a href="detailed.php?top_id=<?=$top_rows[0]['id']?>">
				<img  src="uploads/<?=$top_rows[0]['image']?>" alt="topnews" width="550px">
				<h4 class="bottom-right text-justify shift-left"><h4><?=substr($top_rows[0]['title'],0,60)?>...</h4>
			</a>
		</div>
		<div class="col-sm-3 dimension-mainsub">
			<a href="detailed.php?top_id=<?=$top_rows[1]['id']?>"><img class="topnews-img-border" src="uploads/<?=$top_rows[1]['image']?>" 
			alt="submain" width="210px"></a>
			<a href="detailed.php?top_id=<?=$top_rows[2]['id']?>"><img class="topnews-img-border" src="uploads/<?=$top_rows[2]['image']?>" 
			alt="submain" width="210px"></a>
		</div>
		<div class="col-sm-2 dimension-mainsub">
			<a href="detailed.php?top_id=<?=$top_rows[3]['id']?>"><img class="topnews-img-border" src="uploads/<?=$top_rows[3]['image']?>" 
			alt="submain" width="210px"></a>
			<a href="detailed.php?top_id=<?=$top_rows[4]['id']?>"><img class="topnews-img-border" src="uploads/<?=$top_rows[4]['image']?>" 
			alt="submain" width="210px"></a>
		</div>
	</div>
</div>
<br>

<div class="col-sm-12">
	<div class="col-sm-6 shift-flashnews">
		<ul>
			<?php for($i=1;$i<=4;$i++){ ?>
				<li><a href="detailed.php?top_id=<?=$top_rows[$i]['id']?>" class="color-flashnews" style="color: red;"><h3>
				<?php echo $top_rows[$i]['title']; ?>
				</h3></a></li>
			<?php } ?>
		</ul>
	</div>

	<div class="editorial col-sm-6  text-justify shift-editorial">
		<a href="detailed.php?sports_id=<?=$sports_row[0]['id']?>" class="editorial-font"><h1>SPORTS</h1>
			<h3 class="col-sm-11"> <?=$sports_row[0]['title'] ?></h3>
			<h4 class="col-sm-11"><?=substr($sports_row[0]['description'],0,300)?>...</h4></a>
	</div>
</div>
<p style="text-align: center;">Created by Alan Cyriac,CSE Student @ VISAT,Elanji,Ernakulam</p>
<p style="text-align: center;">Contact: alancyriac1996@gmail.com</p>
</body>
</html>