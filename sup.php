<?php
 session_start();
 $sid=$_SESSION['sid'];
 $con=mysqli_connect("localhost","bala","balams","osrms"); 
 if(mysqli_connect_errno()) 
 { 
  echo "Connection Failed!".mysqli_connect_error();
 } 
 else 
 {
  $sql="select * from student where sid=$sid";
  $res=mysqli_query($con,$sql);
  if($row=mysqli_num_rows($res)>0)
  {
   while($result=mysqli_fetch_array($res))
   {
    $sname=$result['sname'];
    $email=$result['email'];
    $cour=$result['course'];
    $mno=$result['mno'];

   }
  }
 }
 mysqli_close($con);
?>
<html>
<head>
<title>Update Data</title>
</head>
<body>
<form action="ssup.php" method="POST">
Sname:<input type="text" name="sname" value="<?php echo $sname;?>"><br><br>
Email:<input type="email" name="email" value="<?php echo $email;?>"><br><br>
Mobile.No:<input type="number" name="mno" value="<?php echo $mno;?>"><br><br>
Course:
<select name="crs">
         <optgroup lable=B.SC>
         <option>B.SC(cs)</option>
         <option>B.SC(sts)</option>
         </optgroup>
         <optgroup lable=B.COM>
         <option>B.COM(ca)</option>
         <option>B.COM(gen)</option>
         </optgroup>
         <optgroup lable=BCA>
         <option>HTML&CSS</option>
         <option>PYTHON</option>
         <option>JAVA</option>
         </optgroup>
       </select><br><br>
<input type="submit" value="Update Record"> | <a href=sportal.php>Student Portal</a>
</form>
</body>
</html>
