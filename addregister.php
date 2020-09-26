<?php
include_once("config.php");
if(isset($_POST["submit"]))
{
	$fname=$_POST['firstname'];
	$surname=$_POST['surname'];
	$pass=$_POST['Password'];
	$enpass=md5($pass);
	$email=$_POST['Email'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$tuser=$_POST['User_type'];

	$sql="INSERT INTO reuser(fname,lname,password,email,gender,dob,user_type) values('$fname','$surname','$enpass','$email','$gender','$dob','$tuser')";
	if(mysqli_query($con,$sql))
	{

		?>
	<script type="text/javascript">
				alert("Data Addedd successfully ");
			</script> 
			<?php
			header ("refresh:0; url=registration.html");
	}
	else
	{
		?>
	<script type="text/javascript">
				alert("Data is not added");
			</script> 
			<?php
			header ("refresh:0; url=registration.html");

	}
}
?>