<!DOCTYPE html>
<html>
<head>
	<title>Mr Deep</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" 
	href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
</head>
<body>
	<?php
include'adminnav.php';
	?> 


<div class="container">
		<div style="height: 100px;"></div>
		
		<div class="row">

			<div class="col-md-3"></div>

			<div class="col-md-6">
				<div class="panel panel-primary">
			<div class="panel-heading">
				<h1 class="text-center text-uppercase">اضافة جامعة </h1>
			</div>

			<div class="panel-body">
		<form action="addcollage.php" method="post">
			<input type="text" placeholder="ادخل اسم الجامعة رجاءا " class="form-control" name="n"><br>


		<input type="submit" value="حفظ " class="btn btn-primary btn-lg" name="bt">
		
		</form>
			</div>

			<div class="panel-footer"></div>

		</div>
			</div>

			<div class="col-md-3"></div>
			




		</div>


	</div>

<?php

include'conn.php';




$nn=isset($_POST['n'])?$_POST['n']:'';



if(isset($_POST['bt']))
{


	$result=mysqli_query($con,"insert into 
	collage(name)
	values('$nn')");


	if(isset($result))
	{
		echo'<script>alert("تمت الاضافة ");</script>';
	}
	else{
	
		echo'<script>alert("فشلت عملية الاضافة ");</script>';

	}


	

}


?>










<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>