<html>
<head>
  <font size="+2">
<?php 
include("connect.php");
?>


<link href="file:///C|/Users/Miti/Documents/Downloads/hardware-store/hardwarestore/style1.css" rel="stylesheet" type="text/css">


<link href="../style.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#C9E2E0">
<h4 ALIGN="center" color="blue"><strong>LOGIN PAGE</strong></h4>
<form method="post" >
  <strong><img src="uploads/OnlineElectronic.jpg" width="374" height="122" align="baseline"></strong>     
  <table height="169" border="1" align="center" >
    <tr>
      <td width="306"><div align="center">UserId:
        <input type="text" name="username" placeholder="Enter ID">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Password:
        <input type="password" name="password" placeholder="Enter Password">
      </div></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit"  name="Login" value="login"></td>
    </tr>
  </table>
  <a href="New_User.php"><strong>Sign Up</strong></a>
</form>
<?php

error_reporting(0);
session_start();
$username=$_REQUEST["username"];
$password=$_REQUEST["password"];
if(!$username || !$password)
echo "Enter A Username And Password";
else
{
	$login ="SELECT * FROM registration WHERE usrnm='".$username."' AND pwd='".$password."'";
	$res=mysql_query($login,$cn);
	$row=mysql_fetch_array($res);
	$counter=mysql_num_rows($res);
	
	if($counter>=1)
	{
		if($row[7]==0)
		{
			$_SESSION["usrnm"]=$row[0];
			$_SESSION["pwd"]=$row[1];
			header("location:Userhome.php");
		}
		if($row[7]==1)
		{
			$_SESSION["usrnm"]=$row[0];
			$_SESSION["pwd"]=$row[1];
			header("location:Adminhome.php");
		}
	}
	else
	{
		echo"Invalid Username Password";
	}
}
?>
</font>
</html>

