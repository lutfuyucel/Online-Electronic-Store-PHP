<?php
include("connect.php");

$userqr="SELECT * FROM registration where usrnm='".$_POST['usrnm']."'";
$res=mysql_query($userqr,$cn);
$counter=mysql_num_rows($res);
if($counter>=1)
	{
		echo "User name already exist Pls select other name";
	}
	else
	{
	$qr="INSERT INTO registration  VALUES('".$_POST['usrnm']."','".$_POST['pass']."','".$_POST['add']."','".$_POST['sex']."','".$_POST['email']."',".$_POST['phone'].",'".$_POST['account']."','".$_POST['aoi']."')";
	echo $qr;
	mysql_query($qr,$cn);
	}

?>