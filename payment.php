<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../default.css" rel="stylesheet" type="text/css" />
<link href="../style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body,td,th {
	font-size: 20px;
}
</style>
</head>
<font size="+3">
<?php
include("connect.php");
$qr="select * from temp where usrid='".$_SESSION["usrnm"]."'";
$result=mysql_query($qr,$cn);
$row=mysql_fetch_array($result);

?>
<body>
<table border="1">
<tr>
<th>Sr No</th>
<th>UsrId</th>
<th>Date/Time</th>
<th>Total</th>
<th>Payment</th> 
</tr>

<?php
$a=$_SESSION["usrnm"];

?>

<tr>
<td><?php echo $row[1]?></td>
<td><?php echo $a?></td>
<td><?php echo $row[2]?></td>
<td><?php echo $row[3]?></td>
<td><?php echo $row[2]*$row[3] ?></td>

</tr>
</table>

<a href="Confirm_Order.php">Click Here To See Your Order Details</a>
</font>
</body>

</html>