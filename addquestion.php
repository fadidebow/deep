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

<div style="height: 10px;"></div>
<div class="container">
  <div class="row">
    


    <div class="col-md-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h1 class="text-center">اضافة  الاسئلة   </h1>
        </div>

        <div class="panel-body">
<form action="addquestion.php" method="post">

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

<label>اختر الفصل </label>
<select name="sem" id="sem" class="form-control">
  <option>اختر   الفصل </option>
</select><br>

<label>اختر المادة  </label>
<select name="sub" id="sub" class="form-control">
  <option>اختر   المادة </option>
</select><br>

<textarea class="form-control" placeholder="ادخل السؤال " name="q"></textarea><br>


<input style="border: 1px solid red" placeholder="رقم الجواب الصحيح " type="text" name="num" class="form-control"><br><br>



        </div>

        <div class="panel-footer">

<h4>اكمل المعلومات بالجهة المقابلة </h4>





        </div>
      </div>


    </div>




    <div class="col-md-6">
       <div class="panel panel-primary">
        <div class="panel-heading">
          <h1 class="text-center">اضافة  الاسئلة  القسم الثاني  </h1>
        </div>

        <div class="panel-body text-center">


<textarea class="form-control" placeholder="ادخل لجواب الاول  " name="an1"></textarea><br>

<textarea class="form-control" placeholder="ادخل الجواب الثاني  " name="an2"></textarea><br>

<textarea class="form-control" placeholder="ادخل الجواب الثالث  " name="an3"></textarea><br>

<textarea class="form-control" placeholder="ادخل الجواب الرابع  " name="an4"></textarea><br>

<textarea class="form-control" placeholder="ادخل الجواب الخامس " name="an5"></textarea><br>

<input type="submit" value="حفظ " class="btn btn-primary btn-lg btn-block" name="btn">
</form>

        </div>

        <div class="panel-footer">

<?php
include'conn.php';

$col=isset($_POST['col'])?$_POST['col']:'';
$section=isset($_POST['sec'])?$_POST['sec']:'';
$sem=isset($_POST['sem'])?$_POST['sem']:'';
$sub=isset($_POST['sub'])?$_POST['sub']:'';
$q=isset($_POST['q'])?$_POST['q']:'';
$an1=isset($_POST['an1'])?$_POST['an1']:'';
$an2=isset($_POST['an2'])?$_POST['an2']:'';
$an3=isset($_POST['an3'])?$_POST['an3']:'';
$an4=isset($_POST['an4'])?$_POST['an4']:'';
$an5=isset($_POST['an5'])?$_POST['an5']:'';
$num=isset($_POST['num'])?$_POST['num']:'';

if(isset($_POST['btn']))
{
  $t=mysqli_query($con,"insert into 
  question(colname,section,sem,sub,q,an1,an2,an3,an4,an5,num)
  values('$col','$section','$sem','$sub','$q','$an1','$an2','$an3','$an4','$an5','$num')");

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
  
</form>

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
             $('#sem').html('<option> اختر الاختصاص اولا  </option>');
            

          }
        });//ajax
      }else{
        $('#sec').html('<option>ختر اسم الجامعة اولا </option>');
        $('#sem').html('<option> اختر الاختصاص اولا  </option>');
       
      }
    });//doc select







$('#sec').change(function(){
  var day1=$(this).val();
  if(day1){

        $.ajax({
          url:"fillselect.php",
          type:"POST",
          data:{sec:day1},
          success:function(data){
            $('#sem').html(data);
            

          }
        });//ajax
      }else{
       
        $('#sem').html('<option>اختر الاختصاص اولا  </option>');
          $('#sub').html('<option>اختر  الفصل  اولا  </option>');
      }

});



$('#sem').change(function(){
  var day1=$(this).val();
  if(day1){

        $.ajax({
          url:"fillselect.php",
          type:"POST",
          data:{sem:day1},
          success:function(data){
            $('#sub').html(data);
            

          }
        });//ajax
      }else{
       
        $('#sub').html('<option>اختر  الفصل  اولا  </option>');
      }

});











    });//document




  </script>
</body>
</html>