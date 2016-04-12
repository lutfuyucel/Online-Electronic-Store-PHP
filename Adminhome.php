<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<body>
<?php
include("connect.php");
session_start();

?>
<font size="+3">
<h3>Welcome Admin</h3>
<h3>Please Select Any Operation</h3>

<a href="grid.php">Edit Product Database</a><br/>
<a href="grid_Company.php">Edit Company Database</a><br/>
<a href="grid_Type.php">Edit Type Database</a><br/>
</font>
<?php

?>


<br/>
<a href="logout.php">Logout</a>

</body>
</html>