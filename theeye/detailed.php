<?php 
  include 'index_header.php';
  include 'database.php';

  #to display top news detailed from index.php
  if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET["top_id"])){
    $id=$_GET['top_id'];
    $sql="SELECT title,description,image FROM news WHERE id='".mysqli_real_escape_string($conn,$id)."'";
    $query = $conn->query($sql);
    while($row=$query->fetch_assoc()){
      $top_row[] = $row;
    }
  }

  #to display sports from index.php
  if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET["sports_id"])){
    $sports_id=$_GET['sports_id'];
    $sports="SELECT title,description,image FROM news WHERE id='".mysqli_real_escape_string($conn,$sports_id)."'";
    $sports_query=$conn->query($sports);
    while($row=$sports_query->fetch_assoc()){
      $top_row[] = $row;
    }
  }
?>

<div class="col-sm-12">
  <div class="detailed-shift-left">
    <img src="uploads/<?=$top_row[0]['image']?>" class="detailed-img">
  </div>
</div>

<div class="col-sm-12 detailed-shift-left">
  <div class="col-sm-10 detailed-font-content text-justify">
    <div>
     <?php 
      echo "<h2>".$top_row[0]['title']."</h1><br>";
      echo "<h3>".$top_row[0]['description']."</h3><br>";

      ?>
    </div>
  </div>
</div>
<p style="text-align: center;">Created by Alan Cyriac,CSE Student @ VISAT,Elanji,Ernakulam</p>
<p style="text-align: center;">Contact: alancyriac1996@gmail.com</p>
</body>
</html>