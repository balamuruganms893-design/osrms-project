<?php
session_start();
$sid = $_SESSION['sid'];
$name=$_POST['sname'];
$email=$_POST['email'];
$mno=$_POST['mno'];
$crs=$_POST['crs'];

$con=mysqli_connect("localhost","bala","balams","osrms"); 
 if(mysqli_connect_errno()) 
 { 
  echo "Connection Failed!".mysqli_connect_error();
 } 
 else 
 {
  $sql="update student set sname='$name' ,email= '$email', mno = $mno, course = '$crs' where sid = $sid";
  $res=mysqli_query($con,$sql);
  
  if($res)
  {
     echo "Data Updated Successfully!";
  }
  else
  {
     echo "Data Not Updated!";
  }
 }

 mysqli_close($con);
echo "<a href=sportal.php>Student Portal</a>";

 ?>