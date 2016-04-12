<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1> Edit Your Product Records</h1> 
<font size="+3" color="#FFFFFF">
<?php
include("connect.php");
$x=$_REQUEST["id"];
$qr="select * from product where Pid='".$x."'";
$result=mysql_query($qr,$cn);
$row=mysql_fetch_array($result);
?>
<form name="frm1" method="post" action="update.php">
ID:<input type="text" name="idtxt" value="<?php echo $row[1]?>" readonly="readonly"><br/>
Name:<input type="text" name="ntxt" value="<?php echo $row[2]?> "><br/>
Price:<input type="text" name="ptxt" value="<?php echo $row[3]?> "><br/>
Quantity:<input type="text" name="qtxt" value="<?php echo $row[4]?>" ><br/>
Image:<input type="file" name="f" value="<?php echo $row[5]?>" ><br/>

Submit<input type="submit" name="submit" value="submit" /><br/>


</form>
</font>
</body>
</html>