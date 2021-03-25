<?php
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin DashBoard</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" 
	href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
</head>
<body>
	<?php
include'adminnav.php';
	?> 


	<div class="container">
		<div class="alert alert-info">
			<h1 class="text-center">ادارة  الموظفين </h1>

		</div>

		




		<table id="tbl" class="table">

			<thead>
			<tr>
				
				<th>اسم الموظف  </th>
					<th> البريد </th>
				
				<th>كلمة السر </th>
				<th> الهاتف </th>
				<th> العنوان </th>
				<th> حذف </th>
				<th> تعديل  </th>
				
			</tr>
</thead>
<tbody>

			<?php

			include'conn.php';



	$q=mysqli_query($con,"select * from users where type=1");
	while($row=mysqli_fetch_array($q))
	{
		echo'

		<tr>
	
			<td>'.$row['name'].'</td>
			<td>'.$row['email'].'</td>
			<td>'.$row['password'].'</td>
			<td>'.$row['phone'].'</td>
			<td>'.$row['address'].'</td>
			

			<td> <a href="memp.php?fadi='.$row['id'].'" class="btn btn-danger"> حذف</a> </td>


			<td> <a href="editemp.php?fadi='.$row['id'].'" class="btn btn-primary"> تعديل البيانات </a> </td>



		</tr>



		';

	

			}

































	if(isset($_GET['fadi']))
		{$xx=$_GET['fadi'];
	$ttt=mysqli_query($con,"delete from users where id='$xx'");
	if(isset($ttt))
		header("Location: memp.php");

}


			?>
			</tbody>
		</table>
	</div>










<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
	$(document).ready( function () {
    $('#tbl').DataTable();
} );
</script>
</body>
</html>

<?php
ob_end_flush();
?>