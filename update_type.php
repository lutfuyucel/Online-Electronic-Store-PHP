<html>
<head>
</head>

<body>
<?php
include("connect.php");
$x=$_REQUEST["tidtxt"];
$y=$_REQUEST["tntxt"];


	

	$qr="update type set Tname='".$y."' where Tid='".$x."'";
	mysql_query($qr,$cn);	
	echo $qr;
	header("location:grid_type.php?msg=Successfully Updated Tid=".$x)

?>

