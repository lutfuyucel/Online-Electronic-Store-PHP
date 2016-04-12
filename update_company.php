<html>
<head>
</head>

<body>
<?php
include("connect.php");
$x=$_REQUEST["cidtxt"];
$y=$_REQUEST["cntxt"];


	

	$qr="update company set Cname='".$y."' where Cid='".$x."'";
	mysql_query($qr,$cn);	
	
	header("location:grid_company.php?msg=Successfully Updated Cid=".$x)

?>

