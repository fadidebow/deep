<?php
session_start();
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
include'libnav.php';
	?> 


	<div class="container">
		<div class="alert alert-success text-center">
			<h1 class="text-center">ادارة  الارقام  </h1>
			<h1 class="text-center"><?php echo $_SESSION['n'];?> </h1>
			

		</div>

		




		<table id="tbl" class="table">

			<thead>
			<tr>
				
				<th>الرقم    </th>
					<th> اسم المكتبة </th>
				
				<th> الحالة </th>
				<th> تاريخ الاستخدام  </th>
				<th> اسم الطالب  </th>
				<th> رقم هاتف الطالب </th>
				<th> تاريخ انشاء الرقم   </th>
				
			</tr>
</thead>
<tbody>

			<?php

			include'conn.php';



	$q=mysqli_query($con,"select * from numbers where library='".$_SESSION['n']."' and state='used' ");

if(mysqli_num_rows($q) > 0)
{

	while($row=mysqli_fetch_array($q))
	{
		echo'

		<tr>
	
			<td>'.$row['num'].'</td>
			<td>'.$row['library'].'</td>
			<td>'.$row['state'].'</td>
			<td>'.$row['dou'].'</td>
			<td>'.$row['stuname'].'</td>
			<td>'.$row['stuphone'].'</td>
			<td>'.$row['dob'].'</td>
			

			

		</tr>



		';

	

			}








}

else{
	echo'<div class="alert alert-danger">
	<h1>no data available</h1></div>';
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