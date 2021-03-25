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
<body style="background-image: url('images/pic04.jpg');background-repeat: no-repeat;background-size: cover;">


	<div class="container">
		<div style="height: 100px;"></div>
		
		<div class="row">

			<div class="col-md-3"></div>

			<div class="col-md-6">
				<div class="panel panel-success">
			<div class="panel-heading">
				<h1 class="text-center text-uppercase">سجل دخولك كمكتبة <img src="images/logo.jpg" class="img-circle" style="width:100px;height: 100px;"></h1>
			</div>

			<div class="panel-body">
		<form action="lib.php" method="post">
		<input type="email" placeholder="enter email" class="form-control" name="e"><br>




		<input type="password" placeholder="enter password"  class="form-control" name="p"><br>


		<input type="submit" value="تسجيل الدخول " class="btn btn-success btn-lg" name="bt">

	
		</form>
			</div>

			<div class="panel-footer">
				جميع الحقوق محفوظة Mr Deep<br>

<?php

include'conn.php';

$x=isset($_POST['e'])?$_POST['e']:'';
$y=isset($_POST['p'])?$_POST['p']:'';


if(isset($_POST['bt']))
{
	$result=mysqli_query($con,"select * from library where email='$x' and password='$y'");


	if(mysqli_num_rows($result) >0 )
	{
		$r=mysqli_fetch_array($result);
		$_SESSION['n']=$r['name'];
		$_SESSION['id']=$r['id'];
		

		
			header("Location: library.php");

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