<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Mr Deep</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	
</head>
<body style="background-image: url('images/slide04.jpg');background-repeat: no-repeat;background-size: cover;">


	<div class="container">
		<div style="height: 100px;"></div>
		
		<div class="row">

			<div class="col-md-3"></div>

			<div class="col-md-6">
				<div class="panel panel-success text-center" >
			<div class="panel-heading">
				<h1 class="text-center text-uppercase">Log In <img src="images/logo.jpg" class="img-circle" style="width:100px;height: 100px;"></h1>
			</div>

			<div class="panel-body" >
		<form action="index.php" method="post">
		<input type="email" placeholder="enter email" class="form-control" name="e"><br>




		<input type="password" placeholder="enter password"  class="form-control" name="p"><br>


		<input type="submit" value="SignIn" class="btn btn-success btn-lg" name="bt">
		
	
		</form>
			</div>

			<div class="panel-footer">
				جميع الحقوق محفوظة Mr Deep
				<span class="pull-right"><a href="lib.php" style="font-weight: bold;font-size: 17px;" >تسجيل الدخول كمكتبة </a></span><br>

<?php

include'conn.php';

$x=isset($_POST['e'])?$_POST['e']:'';
$y=isset($_POST['p'])?$_POST['p']:'';
$y=md5($y);

if(isset($_POST['bt']))
{
	$result=mysqli_query($con,"select * from users where email='$x' and password='$y'");


	if(mysqli_num_rows($result) >0 )
	{
		$r=mysqli_fetch_array($result);
		$_SESSION['n']=$r['name'];
		$_SESSION['p']=$r['phone'];
		$_SESSION['e']=$r['email'];

		if($r['type']==1)
			header("Location: emp.php");

		else if($r['type']==0)
		header("Location: admin.php");

		
	}
	else{
		echo'<h1 class="alert alert-danger">email or password worng</h1>';

	}



}


?>
			</div>

		</div>
			</div>

			<div class="col-md-3"></div>
			




		</div>


	</div>


<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>