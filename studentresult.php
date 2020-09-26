<!DOCTYPE html>
<html>
<head>
	<title>Student result submit</title>
</head>
<style>
input
{
	width:300px;
	height: 28px;
	margin-bottom: 1px  solid #fff;
}
</style>
<body style="padding-left: 60px; background:url(be.jpg);">
	<table align="center" width="70%" style="border-radius: 0px 120px 0px 120px; background:url(ra.jpg);color:white;font-size: 28px">
		<tr><th><img src="logo.jpg" alt="Logo" width="45" height="40" style="border-radius: 50%;"><i>Daffodil<i><br><i>  international</i> <i>university<i></th></tr>
	</table>
	<center>
    <a href="mainpage.php">Go to home</a>
   </center>
	<hr>
	<div style="float: left;">
<table>
	<h1 style="color: white">Result Submission From teacher</h1>
	<form action="Addresultinfo.php" method="post">
		<select name="SID" style="width:300px;
	height: 28px;
	margin-bottom: 1px  solid #fff;">
	<option>Select Student ID</option>
		<?php
      include_once("config.php");
   $result=mysqli_query($con,"SELECT * FROM studentdata");
   
   while($res = mysqli_fetch_array($result))
               {
		?>
			<option value="<?php echo $res['SID']; ?>"><?php echo $res["SID"]; ?></option>
			<?php 
	          }
		?> 
		</select><br><br>

		<input type="text" placeholder="Enter Course Code" name="Code" required><br><br>
		<input type="text" placeholder="Enter Course Title" name="Title" required><br><br>
		<input type="text" placeholder="Enter Credit" name="Credit" required><br><br>
		<input type="text" placeholder="Enter Grade" name="Grade" required><br><br>
		<input type="text" placeholder="Enter Grade point" name="Gradepoint" required><br><br>
		<select name="semester" style="width:300px;
	height: 28px;
	margin-bottom: 1px  solid #fff;">
	<option>Select Semester</option>
		<?php
      include_once("config.php");
   $result=mysqli_query($con,"SELECT * FROM studentdata");
   
   while($res = mysqli_fetch_array($result))
               {
		?>
			<option value="<?php echo $res['Enrollment']; ?>"><?php echo $res["Enrollment"]; ?></option>
			<?php 
	          }
		?> 
		</select><br><br>
		<input type="submit" name="submit" value="submit" style="background-color: blue;color: white;font-size: 20px">
	</form>
</table>
</div>
<div style="float: right;">
	<br>
	<img style="padding-right: 30px" src="grade.png" alt="grade image" width="400" height="400">
</div>
<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	
</body>
</html>
