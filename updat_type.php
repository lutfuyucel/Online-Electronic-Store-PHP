<html>
<head>
</head>

<body>
<?php
include("connect.php");
$x=$_REQUEST["idtxt"];
$y=$_REQUEST["ntxt"];


	

	$qr="update type set Tname='".$y."' where Tid='".$x."'";
	mysql_query($qr,$cn);	
	
	header("location:grid_type.php?msg=Successfully Updated Tid=".$x)

?>

