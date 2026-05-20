<html>
<head>
<title>STUDENT REGISTRATION</title>
</head>
<body bgcolor="yellow">
<form action="stdreg.php" method="POST">
NAME:<input type="text" name="nm"><br><br>
AID:<input type="number" name="ai"><br><br>
EMAIL:<input type="email" name="email"><br><br>
PASSWORD:<input type="password" name="pass"><br><br>
COURSE:
       <select name="crs">
         <optgroup lable="B.SC">
         <option>B.SC(cs)</option>
         <option>B.SC(sts)</option>
         </optgroup>
         <optgroup lable="B.COM">
         <option>B.COM(ca)</option>
         <option>B.COM(gen)</option>
         </optgroup>
         <optgroup lable="BCA">
         <option>HTML&CSS</option>
         <option>PYTHON</option>
         <option>JAVA</option>
         </optgroup>
       </select><br><br>
MOBILE NO:<input type="number" name="mno"><br><br>
<input type="submit" value="REGISTRATION">  | <a href="head1.php">HOME</a>
</form>
</body>
</html>