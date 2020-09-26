<?php
include_once("config.php");

if(isset($_POST["submit"]))
{
	
	$name=$_POST['Name'];
	$sid=$_POST['SID'];
	$pname=$_POST['Pname'];
	$batch=$_POST['Batch'];
	$enrollment=$_POST['Enrollment'];

	$sql="INSERT INTO studentdata(Name,SID,Pname,Batch,Enrollment) values('$name','$sid','$pname','$batch','$enrollment')";
	if(mysqli_query($con,$sql))
	{
		

		?>
	<script type="text/javascript">
				alert("Data Addedd successfully ");
			</script> 
			<?php
			header ("refresh:0; url=subsinfo.html");
	}
	else
	{
		?>
	<script type="text/javascript">
				alert("Data is not added");
			</script> 
			<?php
			header ("refresh:0; url=subsinfo.html");

	}
}
?>