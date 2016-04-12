<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body {
	background-color: #06F;
}
body,td,th {
	color: #FFF;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: X-large;
}
</style>
<link href="../style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
include("connect.php");
session_start();?>
<font size="+3"><?php echo " Welcome  ".$_SESSION['usrnm'];
?></font>

<h1>Welcome We Provide Products Of The Following Categories</h1>
<div align="left">
  <p><font size="+3">
    <?php $qr="select * from type";
$result=mysql_query($qr,$cn);
while($row=mysql_fetch_array($result))
{
?>
  </p>
  <p>&nbsp;</p>
  <p>    <a href="showProduct.php?id=<?php echo $row[0]?>"><?php echo $row[1]?></a><br/>
    </p>
  <p>&nbsp;</p>
  <p>
    <?php
}
?>
    
    
    <br/>
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><a href="logout.php">Logout</a></p>
</div>
</font>
</body>
</html>