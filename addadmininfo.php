<?php
include_once("config.php");
if(isset($_POST["submit"]))
{
	$name=$_POST['name'];
	$pass=$_POST['Password'];
	$enpass=md5($pass);
	$email=$_POST['Email'];
	$gender=$_POST['gender'];
	$city=$_POST['City'];
	$sql="INSERT INTO admindata(name,password,email,gender,city) values('$name','$enpass','$email','$gender','$city')";
	if(mysqli_query($con,$sql))
	{

		?>
	<script type="text/javascript">
				alert("Data Addedd successfully ");
			</script> 
			<?php
			header ("refresh:0; url=admininfo.html");
	}
	else
	{
		?>
	<script type="text/javascript">
				alert("Data is not added");
			</script> 
			<?php
			header ("refresh:0; url=admininfo.html");

	}
}
?>