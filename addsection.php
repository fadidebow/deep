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
          <h1 class="text-center">اضافة اختصاص </h1>
        </div>

        <div class="panel-body">
<form action="addsection.php" method="post">

  <label>اختر الجامعة  :</label>
<select name="s" class="form-control">
  <?php

  $r=mysqli_query($con,"select * from collage");
  while($row=mysqli_fetch_array($r))
  {
    echo'
    <option value="'.$row['name'].'"> '.$row['name'].'</option>

    ';
  }

  ?>
</select><br>

<input type="text" placeholder="ادخل اسم الاختصاص " class="form-control" name="sec"><br>

<input type="submit" value="حفظ " class="btn btn-primary btn-lg" name="btn">
</form>

        </div>

        <div class="panel-footer">
          
<?php
include'conn.php';

$col=isset($_POST['s'])?$_POST['s']:'';
$section=isset($_POST['sec'])?$_POST['sec']:'';

if(isset($_POST['btn']))
{
  $t=mysqli_query($con,"insert into 
  sections(name,section)
  values('$col','$section')");

  if(isset($t))
  {
    echo'<script>alert("تمت الاضافة ");</script>';

  }

  else{
    echo'<script>alert("فشلت عملية الاضافة ");</script>';

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