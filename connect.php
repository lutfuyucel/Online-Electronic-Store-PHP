<?php
$cn=mysql_connect("localhost","root","");
mysql_select_db("store",$cn) or die("Problem In Connectivity");
error_reporting(0);
session_start()
?>
