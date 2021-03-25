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
			<h1 class="text-center">ادارة  الفيديوهات </h1>

		</div>

		




		<table id="tbl" class="table">

			<thead>
			<tr>
				
				<th> اسم الفيديو   </th>
					<th> وصف الفيديو  </th>

					<th> مسار  الملف  </th>
				
				<th>حذف</th>
				
				
			</tr>
</thead>
<tbody>

			<?php

			include'conn.php';



	$q=mysqli_query($con,"select * from videos");
	while($row=mysqli_fetch_array($q))
	{
		echo'

		<tr>
	
			<td>'.$row['name'].'</td>
			<td>'.$row['de'].'</td>
			<td>'.$row['videoname'].'</td>
			

			<td> <a href="mvideo.php?fadi='.$row['id'].'" class="btn btn-danger"> حذف </a> </td>

			



		</tr>



		';

	

			}

































	if(isset($_GET['fadi']))
		{$xx=$_GET['fadi'];
	$ttt=mysqli_query($con,"delete from videos where id='$xx'");
	if(isset($ttt))
		header("Location: mvideo.php");

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