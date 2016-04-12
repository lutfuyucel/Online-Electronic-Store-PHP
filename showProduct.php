<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link href="../default.css" rel="stylesheet" type="text/css" />
<link href="../style.css" rel="stylesheet" type="text/css" />
<h1><font color="#CCCCCC" size="+3">We Provide The Following Products Of The Type You Selected</h1>
</font></head>

<body>
<?php
include("connect.php");
$qr="select * from product where Tid='".$_REQUEST["id"]."'";
$result=mysql_query($qr,$cn);
?>
<font size="+4">
<select name="prod" >

<?php while($row=mysql_fetch_array($result))
{
?>


<option value="<?php echo $row[1]?>" ><?php echo $row[2]?></option>
<?php
}
?>

</select>
<h4 ><a href="Products.php" >Do You Want A Closer Look At The Products????</h4>
</font>
</body>
</html>