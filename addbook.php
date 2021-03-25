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
		<div style="height: 30px;"></div>
		
		<div class="row">

			<div class="col-md-3"></div>

			<div class="col-md-6">
				<div class="panel panel-primary">
			<div class="panel-heading">
				<h1 class="text-center text-uppercase">اضافة  كتاب   </h1>
			</div>

			<div class="panel-body">
		<form action="addbook.php" method="post" enctype="multipart/form-data">
			<input type="text" placeholder="ادخل اسم  الكتاب " class="form-control" name="n"><br>

			<input type="text" placeholder="ادخل  الوصف" class="form-control" name="de"><br>

			<input type="text" placeholder="مسار  الكتاب  "  class="form-control" name="book"><br>

			<label>الاختصاص   </label>
<select name="sec" class="form-control">
  <?php
include'conn.php';
  $r=mysqli_query($con,"select * from sections");
  while($row=mysqli_fetch_array($r))
  {
    echo'
    <option value="'.$row['section'].'"> '.$row['section'].'</option>

    ';
  }

  ?>
</select><br>

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






$name=isset($_POST['n'])?$_POST['n']:'';
$de=isset($_POST['de'])?$_POST['de']:'';
$book=isset($_POST['book'])?$_POST['book']:'';
$sec=isset($_POST['sec'])?$_POST['sec']:'';

if(isset($_POST['bt']))
{


	$result=mysqli_query($con,"insert into 
	books(name,de,bookname,section)
	values('$name','$de','$book','$sec')");


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