<?php 
  session_start();
?>
<html>
<head>
<title>Student Portal</title>
</head>
<body bgcolor="gray">
<h2>Welcome <?php echo $_SESSION['sname'];?> </h2>
<a href="sup.php">Update Data</a>
<a href="viewresult.php">RESULT</a>
<a href="scp.php">Change Password</a>
<a href="slogo.php">Logout</a>
<marquee><h1>5th sem result available now!</h1></marquee>
</body>
</html>