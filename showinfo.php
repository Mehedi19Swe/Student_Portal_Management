<?php
include_once("config.php");
$result=mysqli_query($con,"SELECT * FROM admindata order by id asc");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Show Admin information</title>
</head>
<body style="background:purple;">
	<table  width="90%" align="center" style="border-radius: 80px 0px 80px 0px;  background-image: url(green.jpg);color:white;font-size: 35px">
		<tr><th><i>Show admin information</i></th></tr>
	</table>
	<hr>
	<br>
	<br>
	<center>
<table border="1" width="80%" style="font-size: 20px;background-image: url(grass.jpg);color:white;text-align: center;" <tr><th>Name</th><th>Email</th><th>Gender</th><th>City</th></tr>
	
	<?php

	while($res=mysqli_fetch_array($result))
	{
		echo "<tr><td>".$res['name']."</td>";
		echo "<td>".$res['email']."</td>";
		echo "<td>".$res['gender']."</td>";
		echo "<td>".$res['city']."</td></tr>";
		
		}
	?>
</table>
</center>
</body>
</html>