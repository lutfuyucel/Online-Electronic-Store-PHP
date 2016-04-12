<?php
error_reporting(0);
if($a=$_REQUEST['submit'] <> "")
{
	$a=$_REQUEST['t1'];
	echo"Your Name Is ".$a."<br>";
	$b=$_REQUEST['pwd'];
	echo"Entered Password Is ".$b."<br>";
	$d=$_REQUEST['cpwd'];
	echo"Entered Confirm Password Is ".$d."<br>";
	$c=$_REQUEST['ta']; 
	echo"You Selected ".$c." as your city"."<br>";
	$d=$_REQUEST['gn'];
	echo"You Selected ".$d." as your gender"."<br>";
	$hobby=$_REQUEST['h'];
	$ct=count($hobby);
	echo"Your Hobbies Are";
	for($i=0;$i<$ct;$i++)
	{
		if($i<$ct-1)
		{
			echo $hobby[$i].",";
		}
		else
		{
			echo $hobby[$i]." ";
		}
	}
}
else 
{
	echo"Button Not Pressed...";
}
?>