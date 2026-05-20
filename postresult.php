<?php
$ai=$_POST['aid'];
$m=$_POST['math'];
$c=$_POST['com'];
$l=$_POST['lang'];
$tot=$m+$c+$l;
$a=$tot/300*100/10;
if($m>34&&$c>34&&$l>34)
  {
    $r="pass";
  }
else
{
  $r="fail";
}

$con=mysqli_connect("localhost","bala","balams","osrms");
if(mysqli_connect_error())
  {
    echo "connection failed".mysqli_connect_errno();
  }
else
  {
    $sql="update student set maths=$m,computer=$c,lang=$l,total=$tot,avg=ROUND($a,1),result='$r' where aid=$ai";
    $res=mysqli_query($con,$sql);
    if($res)
    {
       echo "RESULT POSTED!";
       echo "<a href=adminportal.php>ADMIN PORTAL</a>";
    }
    else
    {
       echo "RESULT NOT POSTED!";
       echo "<a href=adminportal.php>ADMIN PORTAL</a>";
    }
   }
mysqli_close($con);
?>


