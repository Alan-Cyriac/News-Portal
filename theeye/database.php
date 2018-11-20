<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$myDB="the-eye";
	/*DB connection*/
	$conn= new mysqli($servername,$username,$password,$myDB);

	if (!$conn) {
		echo "connected unsuccesfully";
	}
?>