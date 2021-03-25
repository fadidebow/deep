<?php include'conn.php';

if(isset($_POST['col']) && !empty($_POST['col']))
{
	$run=mysqli_query($con,"select * from sections where name='".$_POST['col']."'");

$co=mysqli_num_rows($run);
		if($co > 0)
		{ 
			echo'<option value=""> اختر الاختصاص  </option>';
			while($row=mysqli_fetch_array($run))
			{
				echo'<option value="'.$row['section'].'">'.$row['section'].'</option>';
			}
		}
		else{
			echo'<option value=""> لايوجد اختصاصت بالجامعة لديك حاليا </option>';
		}

}

$ss="";
if(isset($_POST['sec']) && !empty($_POST['sec']))
{
	$ss=$_POST['sec'];

$run=mysqli_query($con,"select * from semester where section='".$_POST['sec']."'");

$co=mysqli_num_rows($run);
if($co > 0)
{
	echo'<option value=""> اختر الفصل </option>';
	while($row=mysqli_fetch_array($run))
	{
		echo'<option value="'.$row['sem'].'">'.$row['sem'].'</option>';
	}
}
else{
	echo'<option value="">  لايوجد فصول ضمن هذا الاختصاص في هذه الجامعة حاليا </option>';
}


}




if(isset($_POST['sem']) && !empty($_POST['sem']))
{

$run1=mysqli_query($con,"select * from subject where sem='".$_POST['sem']."'");

$co1=mysqli_num_rows($run1);

echo '<h1>'.$co1.'</h1>';
if($co1 > 0)
{
	echo'<option value=""> اختر  المادة </option>';
	while($row1=mysqli_fetch_array($run1))
	{
		echo'<option value="'.$row1['sub'].'">'.$row1['sub'].'</option>';
	}
}
else{
	echo'<option value="">  لا يوجد مادة حاليا </option>';
}


}


?>