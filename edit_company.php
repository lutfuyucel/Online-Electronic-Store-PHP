<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("connect.php");
$x=$_REQUEST["id"];
$qr="select * from company where Cid='".$x."'";
$result=mysql_query($qr,$cn);
$row=mysql_fetch_array($result);
?>
<form name="frm3" method="post" action="update_company.php">
ID:<input type="text" name="cidtxt" value="<?php echo $row[0]?>" readonly="readonly"><br/>
Name:<input type="text" name="cntxt" value="<?php echo $row[1]?> "><br/>
Submit:<input type="submit" name="submit"><br/>
</form>
</body>
</html>