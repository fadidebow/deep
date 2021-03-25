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
include'empnav.php';
include'conn.php';
  ?> 

<div style="height: 100px;"></div>
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>


    <div class="col-md-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h1 class="text-center">اضافة  فصل </h1>
        </div>

        <div class="panel-body">
<form action="addsemester.php" method="post">

  <label>اختر  الجامعة  :</label>
<select name="col" id="col" class="form-control">
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


 <label>اختر   الاختصاص:</label>
<select name="sec" id="sec" class="form-control">
  <option>اختر اختصاص </option>
</select><br>

<input type="text" placeholder="ادخل  الفصل " class="form-control" name="sem"><br>

<input type="submit" value="حفظ " class="btn btn-primary btn-lg" name="btn">
</form>

        </div>

        <div class="panel-footer">
          
<?php
include'conn.php';

$col=isset($_POST['col'])?$_POST['col']:'';
$section=isset($_POST['sec'])?$_POST['sec']:'';
$sem=isset($_POST['sem'])?$_POST['sem']:'';
if(isset($_POST['btn']))
{
  $t=mysqli_query($con,"insert into 
  semester(colname,section,sem)
  values('$col','$section','$sem')");

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


         <script type="text/javascript">
    $(document).ready(function(){
      
      $('#col').change(function(){
       var doc1=$(this).val();
       if(doc1){

        $.ajax({
          url:"fillselect.php",
          type:"POST",
          data:{col:doc1},
          success:function(data){
            $('#sec').html(data);
            

          }
        });//ajax
      }else{
        $('#sec').html('<option>ختر اسم الجامعة اولا </option>');
       
      }
    });//doc select




    });//document




  </script>
</body>
</html>
