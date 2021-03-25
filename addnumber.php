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
  ?> 

<div style="height: 100px;"></div>
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>


    <div class="col-md-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h1 class="text-center">اضافة  مجموعة ارقام سرية  </h1>
        </div>

        <div class="panel-body">
<form action="addnumber.php" method="post">
<label>اسم  المكتبة </label>
<select name="lib" class="form-control">
  <?php

  $r=mysqli_query($con,"select * from library");
  while($row=mysqli_fetch_array($r))
  {
    echo'
    <option value="'.$row['name'].'"> '.$row['name'].'</option>

    ';
  }

  ?>
</select><br>
<br>
<label>نوع الرقم </label>
<select name="t" class="form-control">
  <option>قم مادة واحدة </option>
  <option>رقم فصل كامل </option>
</select><br>

<input type="text" placeholder="عدد الارقام المطلوبة" class="form-control" name="count"><br>

<input type="submit" value="توليد الارقام  " class="btn btn-primary btn-lg" name="btn">
</form>

        </div>

        <div class="panel-footer">
          
<?php
include'conn.php';

$length=isset($_POST['count'])?$_POST['count']:'';
$library=isset($_POST['lib'])?$_POST['lib']:'';
$type=isset($_POST['t'])?$_POST['t']:'';
$i=0;
$dt=date("Y-m-d");
if(isset($_POST['btn']))
{
  while($i< $length)
{$num=rand(1,1000000);
  $r=mysqli_query($con,"select * from numbers where num='$num'");

  if(mysqli_num_rows($r) > 0)
  {

  }

else{
  $r1=mysqli_query($con,"insert into numbers(num,library,dob,type)
  values('$num','$library','$dt','$type')");

   $i++;
}



 
}

    echo'<script>alert("تمت عملية توليد الارقام بنجاح ");</script>';


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