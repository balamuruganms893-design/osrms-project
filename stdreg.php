<?php
$nm=$_POST['nm'];
$ai=$_POST['ai'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$crs=$_POST['crs'];
$mno=$_POST['mno'];
$con=mysqli_connect("localhost","bala","balams","osrms");
if(mysqli_connect_error())
  {
    echo "connection failed".mysqli_connect_errno();
  }
else
  {
    $sql="insert into student (sname,aid,email,password,course,mno)values('$nm',$ai,'$email','$pass','$crs',$mno)";
    $res=mysqli_query($con,$sql);
    if($res)
    {
       echo "REGISTERED!";
       echo "<a href=head1.php>HOME</a>";
    }
    else
    {
       echo "NOT REGISTERED!";
       echo "<a href=head1.php>HOME</a>";

    }
   }
mysqli_close($con);
?>


