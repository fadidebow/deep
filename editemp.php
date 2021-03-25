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
include'conn.php';
if(isset($_GET['fadi']))
$x=$_GET['fadi'];
$r=mysqli_query($con,"select * from users where id='$x'");
$row=mysqli_fetch_array($r);
	?> 


<div class="container">
		<div style="height: 30px;"></div>
		
		<div class="row">

			<div class="col-md-3"></div>

			<div class="col-md-6">
				<div class="panel panel-primary">
			<div class="panel-heading">
				<h1 class="text-center text-uppercase"> تعديل بيانات الموظف </h1>
			</div>

			<div class="panel-body">
		<form action="editemp.php?fadi=<?php echo $x; ?>" method="post">
			<input type="text" placeholder="ادخل اسم  الموظف " class="form-control" value="<?php echo $row['name'] ?>" name="n"><br>

			<input type="text" placeholder="ادخل البريد الالكتروني " value="<?php echo $row['email'] ?>" class="form-control" name="e"><br>

			<input type="text" placeholder="كلمة المرور " class="form-control" value="<?php echo $row['password'] ?>"  name="p"><br>

			<input type="text" placeholder="الهاتف " class="form-control" value="<?php echo $row['phone'] ?>" name="ph"><br>

			<input type="text" value="<?php echo $row['address'] ?>" placeholder="العنوان " class="form-control" name="adr"><br>


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




$name=isset($_POST['n'])?$_POST['n']:'';
$email=isset($_POST['e'])?$_POST['e']:'';
$pass=isset($_POST['p'])?$_POST['p']:'';
$pass=md5($pass);
$phone=isset($_POST['ph'])?$_POST['ph']:'';
$address=isset($_POST['adr'])?$_POST['adr']:'';




if(isset($_POST['bt']))
{


	$result=mysqli_query($con,"update users set name='$name',email='$email',password='$pass',phone='$phone',address='$address' where id='$x'");


	if(isset($result))
	{
		echo'<script>alert("تمت  عملية التعديل بنجاح  ");</script>';
	}
	else{
	
		echo'<script>alert("فشلت عملية التعديل  ");</script>';

	}


	

}


?>










<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>