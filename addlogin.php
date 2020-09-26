<?php
session_start();
include_once("config.php");
if(isset($_POST["submit"]))
{
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$enpass=md5($pass);
	$tuser=$_POST['User_type'];
	$res=mysqli_query($con,"SELECT * FROM reuser WHERE email='$email' and password='$enpass' and user_type='$tuser'");
	$row=mysqli_fetch_assoc($res);
	if(!empty($row) && is_array($row))
	{
		$_SESSION['ID']=$row['id'];
		echo $_SESSION['ID'];
		if($tuser=="Student" || $tuser=="Teacher")
		{
			header("Location:mainpage.php");
		}
		else if($tuser=="Admin")
		{
          header("Location:Adminpanel.php");
		}
		else
		{
			echo "Wrong User Type";
		}
	}
	else
	{
		?>
	        <script type="text/javascript">
				alert("Email & Password invalid!pleace try again ")
			</script> 
			<?php
			header ("refresh:0; url=Login.html");

	}
}
?>