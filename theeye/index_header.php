


                                
                                <!-- Created by Alan Cyriac || Contact: alancyriac1996@gmail.com-->




<?php 
  include 'database.php';

  $sql='SELECT id,category_name FROM category';
  $result=$conn->query($sql);

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>The Eye</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>

  <nav>
    <!--<div class="container">-->
    	<div class="col-sm-12">
      		<div class="row">
      			<div class="col-sm-4 news-name">		
          		<a href="index.php"><h1>THE EYE</h1></a>
          	</div>
       			<div class="col-sm-2"></div>
       			<div class="col-sm-3 shift-info">
        			<a href="#" class="btn btn-info col-sm-4">23-07-2018</a>
        			<a href="#" class="btn btn-info col-sm-4">About</a>
        			<a href="#" class="btn btn-info col-sm-4">Contact</a><br>
        			<a href="#" class="icon-padding btn btn-default col-sm-4"><img src="uploads/flogo.png"></a>
        			<a href="#" class="icon-padding btn btn-default col-sm-4"><img src="uploads/twitter.png"></a>
        			<a href="#" class="icon-padding btn btn-default col-sm-4"><img src="uploads/youtube.png"></a>
    			  </div>
            <div class="col-sm-3 shift-info">
              <a href="login.php" class="btn btn-info col-sm-4">login</a>
            </div>
  		    </div>
  	  </div>
    <!--</div>-->
  </nav>

  <nav>
    <div class="col-sm-12">
      <div class="row well">
        <?php while ($row=mysqli_fetch_array($result)) { ?>
          <div class="col-sm-2"><a href="category.php?cat_id=<?=$row['id'];?>" class="btn btn-info col-sm-10">
          <?=$row['category_name']?></a></div>
        <?php } ?>
      </div>
    </div>
  </nav>