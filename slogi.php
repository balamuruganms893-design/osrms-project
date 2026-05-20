<html>
<head>
<title>Student Login</title>
</head>
<body bgcolor="pink">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
Email ID:<br>
<input type="email" name="email"><br><br>
Password:<br>
<input type="password" name="pass"><br><br>
<input type="submit"> | 
<a href="head1.php">HOME</a>
</form>
</body>
</html>

<?php

if(isset($_POST['email'])&&isset($_POST['pass']))
{
$email=$_POST['email'];
$pass=$_POST['pass'];

$con=mysqli_connect("localhost","bala","balams","osrms"); 
if(mysqli_connect_errno()) 
{ 
 echo "Connection Failed!".mysqli_connect_error();
} 
else 
{
 $sql="select email,password,sid,sname from student where email='$email' and password='$pass'";
 $res=mysqli_query($con,$sql);
 
 if($row=mysqli_num_rows($res)>0)
 { 
   while($result=mysqli_fetch_assoc($res))
   {
    $sid=$result['sid'];
    $sname=$result['sname'];
    $semail=$result['email'];
    $spass=$result['password'];
    session_start();
    $_SESSION['sid']=$sid;
    $_SESSION['sname']=$sname;
    $_SESSION['semail']=$email;
    header("Location:sportal.php");
   
   }
 } 
 else
 {
   echo "Invalid Credential!";
 }
}
mysqli_close($con);

}

?>