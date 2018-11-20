<?php 
	include 'database.php';

	if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['uname']) && isset($_POST['psw'])){

		$uname = mysqli_real_escape_string($conn,$_POST['uname']);
		$password = mysqli_real_escape_string($conn,$_POST['psw']);

		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$password'";
		$result = mysqli_query($conn,$sql);

		$check = mysqli_fetch_assoc($result);



		if(isset($check)){
			header("Location: category_list.php");
   			exit;
		}
		else{
			header("Location: login.php");
			exit;
			echo 'Incorrect Username or password';
		}

	}
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
<body class="login-body">

	<div class="col-sm-12">
		<div class="col-sm-4 login-news-color">THE EYE</div>
		<div class="col-sm-8 login">Login</div>
	</div>

	<div class="col-sm-8 shift-left">
		<form action="login.php" method="post" class="login-form" enctype="multipart/form-data">
			<label>Username</label><input type="text" placeholder="Enter Username" name="uname" class="login-style" required><br>
			<label>Password</label><input type="password" placeholder="Enter Password" name="psw" class="login-style" required><br>
			<button type="submit" value="login" class="login-button">Login</button>
		</form>
	</div>
</body>
</html>