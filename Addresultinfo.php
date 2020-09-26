<?php
include_once("config.php");

if(isset($_POST["submit"]))
{
	$sid=$_POST['SID'];
	$code=$_POST['Code'];
	$title=$_POST['Title'];
	$credit=$_POST['Credit'];
	$grade=$_POST['Grade'];
	$gradepoint=$_POST['Gradepoint'];
	$semester=$_POST['semester'];

	$sql="INSERT INTO resultinfo(student_id,course_code,course_title,credit,grade,gradepoint,semester) values('$sid','$code','$title','$credit','$grade','$gradepoint','$semester')";
	if(mysqli_query($con,$sql))
	{
	
		?>
	<script type="text/javascript">
				alert("Data Addedd successfully ");
			</script> 
			<?php
			header ("refresh:0; url=studentresult.php");
	}
	else
	{
		?>
	<script type="text/javascript">
				alert("Data is not added");
			</script> 
			<?php
			header ("refresh:0; url=studentresult.php");

	}
}
?>