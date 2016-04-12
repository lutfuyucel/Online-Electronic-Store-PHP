<html>
<head>
</head>

<body>
<?php
include("connect.php");
$x=$_REQUEST["idtxt"];
$y=$_REQUEST["ntxt"];
$z=$_REQUEST["qtxt"];
$l=$_REQUEST["ptxt"];

	

	$qr="update product set Pname='".$y."',Qty=".$z.",Price=".$l." where Pid='".$x."'";
	mysql_query($qr,$cn);	
	
	header("location:grid.php?msg=Successfully Updated Pid=".$x)

?>

