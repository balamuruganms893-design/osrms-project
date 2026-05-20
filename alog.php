<html>
<head>
<title>Admin Login</title>
</head>
<body bgcolor="gray">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
User Name:<br>
<input type="text" name="un"><br><br>
Password:<br>
<input type="password" name="pass"><br><br>
<input type="submit" value="Login">  | <a href="head1.php">HOME</a>
</form>
</body>
</html>

<?php

if(isset($_POST['un'])&&isset($_POST['pass']))
{
$un=$_POST['un'];
$pass=$_POST['pass'];
session_start();
$_SESSION['un']=$un;
$_SESSION['pass']=$pass;
$con=mysqli_connect("localhost","bala","balams","osrms"); 
if(mysqli_connect_errno()) 
{ 
 echo "Connection Failed!".mysqli_connect_error();
} 
else 
{
 $sql="select username,password from admin where username='$un' and password='$pass'";
 $res=mysqli_query($con,$sql);
 
 if($row=mysqli_num_rows($res)>0)
 { 
   header("Location:adminportal.php");
 } 
 else
 {
   echo "Invalid Credential!";
 }
}
mysqli_close($con);

}

?>