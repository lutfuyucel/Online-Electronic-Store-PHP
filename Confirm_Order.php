<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../stylekl.css" rel="stylesheet" type="text/css" />
<link href="../style.css" rel="stylesheet" type="text/css" />
</head>
<font size="+2">

<?php
include("connect.php");

$qr1="select * from order";
$result1=mysql_query($qr1,$cn);
$row1=mysql_fetch_array($result1);

$qr="select * from temp";
$result=mysql_query($qr,$cn);
$row=mysql_fetch_array($result);

$qr2="select * from product";
$result2=mysql_query($qr2,$cn);
$row2=mysql_fetch_array($result2);


?>

<body>
<center><h1 align="center">This Your Final Order That Will Be Dispatched At Your Home. Thankyou For Shopping With Us!!</h1><center></center></center>
<div align="center">
  <table width="379" height="241" border="1">
    <tr>
      <th>Orderid</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Image</th>
      <th>Total</th>
    </tr>
    <tr>
      <td><?php echo $row2[1]?></td>
      <div align="center"></div></td>
      <td><?php echo $row[2]?></td>
      <td><?php echo $row[3]?></td>
      <th> <img src="uploads/<?php echo $row2[5] ?>" height="150" width="150"  /></th>
      <td><?php echo ($row[2]*$row[3])?></td>
    </tr>
    
  </table>
</div>

 <p><a href="logout.php">Logout</a></p>
</font>
</body>
</html>