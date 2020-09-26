<?php
session_start();
if(!isset($_SESSION['ID']))
{
  header("Location:Login.html");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Show student result</title>
</head>
<body style="background:url(ra.jpg);padding:30px" >
  
   <table align="center" width="100%" style=" border-radius: 20px 20px 20px 20px;  margin-bottom: 1px solid #fff;font-size: 30px; background:url(ra.jpg);">
    <center>
    <a href="mainpage.php">Go to home</a>
   </center>
   	<tr><th>Academic result</th></tr><br></br>
    </table>
   <table>
   	<br>
   <form action="Showresult.php" method="post">
   	<input type="text" placeholder="Student ID " name="studentid" required style="background-color: powderblue;color:black; width: 270px;font-size: 20px;"><input type="submit" name="submit" value="Search" style="font-size: 20px; background-color: green;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <?php
include_once("config.php");
if(isset($_POST["submit"]))
{
  $sid=$_POST['studentid'];
   
   $re=mysqli_query($con,"SELECT * FROM studentdata WHERE SID='$sid'");

?>
    <select name="Selectsemester" style="background-color: powderblue;color:black;width: 270px;font-size: 20px; margin-bottom: 1px solid #fff;">
        <option>Select semester---</option>
      <?php
      while($res = mysqli_fetch_array($re))
               {
            
   ?>
    
      <option value="<?php echo $res['Enrollment'] ?>"><?php echo $res['Enrollment'] ?></option>
      <?php
       
             }

    ?>
    </select>
    <?php
  }
    ?>

   
   	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   	<input type="submit" name="showresult" value="Show Result" style="border-radius: 20px 20px 20px 20px; font-size: 24px;background-color: orange; color:black; margin-bottom: 1px solid">

	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
   </form>
</table>
<hr>
<h1> Student Info</h1>
   <hr>
<?php
include_once("config.php");
if(isset($_POST["showresult"]))
{
   $id=$_POST['studentid'];
   $Enrollment=$_POST['Selectsemester'];
   $re=mysqli_query($con,"SELECT * FROM studentdata WHERE SID='$id' && Enrollment='$Enrollment'");

while($res = mysqli_fetch_array($re))
               {
                  $all[] = $res;}
                  foreach ($all as $res ) {
                     ?> 
<table align="left" style="font-size: 28px;color: white;">
   <div style="float: left;">
<tr><td>Program: <?php echo $res['Pname'];?> </td></tr><br>
<tr></tr>
<tr><td>Name of Student: <?php echo $res['Name']; ?></td></tr><br>
<tr></tr>
<tr><td>Student Id: <?php echo $res['SID']; ?></td></tr><br>
<tr></tr>
<tr><td>Enrollment: <?php echo $res['Enrollment']; ?></td></tr>
<tr></tr>
<tr><td>Batch: <?php echo $res['Batch']; ?></td></tr>
</div>
                   <?php
                  }
}
?>
<div style="float: right;">
   <img src="grade.png" alt="grade image" width="350" height="360">
</div>
</table>
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
<hr>
</body>
</html>
<center>
<table border="1" width="80%" style="font-size: 24px;background-color: white;"> <tr style="background-color: red;"><th>Course code</th><th>Course title</th><th>Credit</th><th>Grade</th><th>Semester</th><th>Gradepoint</th>
<?php
include_once("config.php");
If(isset($_POST["showresult"]))
{
$sid=$_POST['studentid'];
$semester=$_POST['Selectsemester'];
   $result=mysqli_query($con,"SELECT * FROM resultinfo WHERE student_id='$sid' && semester='$semester' ");
   $totalcredit=0;
   $sum=0;
   while($res = mysqli_fetch_array($result))
               {
      
     echo "<tr><td>".$res['course_code']."</td>";
     echo "<td>".$res['course_title']."</td>";
     echo "<td>".$res['credit']."</td>";
     echo "<td>".$res['grade']."</td>";
     echo "<td>".$res['semester']."</td>";
     echo "<td>".$res['gradepoint']."</td></tr>";

     $prod=$res['credit']*$res['gradepoint'];
     $sum+=$prod;

     $totalcredit+=$res['credit'];

   }
   
}



?>
</table><br>
<?php
$sgpa=$sum/$totalcredit;
   echo "<font color='white';font size='24px'>SGPA is: ".$sgpa;
   
?>
</center>