<html>
<head><h2 ALIGN="center" >LOGIN PAGE</h2></head>
<body>

<form method="post">
<table border="1">
<tr>
<td><input type="text" name="t1" value="abc">UserId:</td>
</tr>
<tr>
<td><input type="password" name="t2" value="xyz">Password:</td>
</tr>
<tr>
<td><input type="submit"  name="login" value="login"></td>
</tr>
</table>
</form>
<?php
error_reporting(0);
session_start();
if($_REQUEST['login'] <> "")
{
	if($_REQUEST['t1']=="admin" and $_REQUEST['t2']=="admin")
	{
	
	$_SESSION['uname']=$_REQUEST['t1'];
	setcookie("pass",$_REQUEST['t2']);
	header('location:Welcome.php');
	}
	else
	{
	echo"Invalid Username Or Password!!";
	}
}
?>
</body>
</html>

