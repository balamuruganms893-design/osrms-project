<html>
<head>
<title>Change Password</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
New Password:<input type="password" name="npass"><br><br>
<input type="submit"value="Change Password">
<p><a href="sportal.php">Student Portal</a></p>

</form>
</body>
</html>

<?php
if(isset($_POST['npass']))
{
   session_start();
   $email=$_SESSION['semail'];
   
   
   $npass=$_POST['npass'];
 
     $con=mysqli_connect("localhost","bala","balams","osrms"); 
     if(mysqli_connect_errno()) 
     { 
       echo "Connection Failed!".mysqli_connect_error();
     } 
     else 
     {
       $sql="update student set password='$npass' where email='$email'";
       $res=mysqli_query($con,$sql);
       if($res)
       {
         echo "Password Changed Successfully!";
       }
       else
       {
         echo "Password not changed!";
       }
     }

   mysqli_close($con);
}

?>