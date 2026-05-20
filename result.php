<?php
$id=$_POST['aid'];
$con=mysqli_connect("localhost","bala","balams","osrms"); 
if(mysqli_connect_errno()) 
{ 
 echo "Connection Failed!".mysqli_connect_error();
} 
else 
{
 $sql="select * from student where aid=$id";
 $res=mysqli_query($con,$sql);
 if($row=mysqli_num_rows($res)>0)
{ 
   while($result=mysqli_fetch_assoc($res))
   {
    $n=$result['sname'];
    $a=$result['aid'];
    $c=$result['course'];
    $m=$result['maths'];
    $co=$result['computer'];
    $l=$result['lang'];
    $t=$result['total'];
    $av=$result['avg'];
    $r=$result['result'];
    }
      if($m==null&&$co==null&&$l==null&&$t==null&&$av==null&&$r==null)
         {
             echo "<h1>Result not posted!</h1>";
             echo "<br>| <a href=sportal.php>STUDENT PORTAL</a>";
          }
       else
          {
             echo"<table border=2>";
               echo"<tr><td>SNAME</td><td>".$n."</td></tr>";
               echo"<tr><td>AID</td><td>".$a."</td></tr>";
               echo"<tr><td>COURSE</td><td>".$c."</td></tr>";
               echo"<tr><td>MATHS</td><td>".$m."</td></tr>";
               echo"<tr><td>COMPUTER</td><td>".$co."</td></tr>";
               echo"<tr><td>LANG</td><td>".$l."</td></tr>";
               echo"<tr><td>TOTAL</td><td>".$t."</td></tr>";
               echo"<tr><td>AVG</td><td>".$av."</td></tr>";
               echo"<tr><td>RESULT</td><td>".$r."</td></tr>";
             echo"</table>";
             echo "<br>| <a href=sportal.php>STUDENT PORTAL</a>";
            }
  }
  else
  {
    echo "<h1>No student records!</h1>";
 
    echo "<br>| <a href=sportal.php>STUDENT PORTAL</a>";
  }
}
mysqli_close($con);
?>