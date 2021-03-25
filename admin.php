<!DOCTYPE html>
<html>
<head>
	<title>Admin DashBoard</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" 
	href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">


	<style type="text/css">
		.mydiv{
			width: 500px;
			margin: 140px auto;
			background-color: rgba(255,255,255,0.1);
			padding:30px;
			border-radius: 10px;
			border:1px solid green;
			color: white
		}

		.mydiv h1{
			font-family: cursive;
		}
	</style>
</head>
<body style="background-image: url('images/slide02.jpg');
background-repeat: no-repeat;background-size: cover;">
	<?php
include'adminnav.php';
	?> 


	<div class="container">
		<div class="mydiv" >
			<h1>Admin DashBoard <i style="color: lightblue;font-size: 60px;" class="fa fa-dashboard"></i></h1>
			<hr>
			<h3>Manage Your Site</h3>
		</div>
	</div>










<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>