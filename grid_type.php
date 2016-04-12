<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">
function del(id)
{
	if(confirm("Do You Really Want To Continue?"))
	{
		window.location="grid_type.php?Tid="+id;
	}
}
</script>
<font size="+3" color="#FFFFFF">
<title>Untitled Document</title>
<link href="../style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form name="frm1" method="post">
<?php
include("connect.php");
if($_REQUEST["Tid"]<>"")
{
	$i=$_REQUEST["Tid"];
	$qr="delete from type where Tid=".$i."";
	mysql_query($qr,$cn);
	
}
$qr="select * from type";
$result=mysql_query($qr,$cn);
?>
<form name="type" method="post">
<table>
<!--	<tr>
    <td>Please EnTer TyPE iD</td>
    <td><input type="text" id"tid" /></td>
    </tr>-->
    <tr>
    <td>Please Enter The Type</td>
    <td><input type="text" name="tname" /></td>
    </tr>
    <tr>
    <td>
    	<input type="submit"  name="Insert" value="Insert">
    </td>
    </tr>
    
</table>
</form>
<?php
	include("connect.php");
	if($_REQUEST["Insert"]<>"")
	{
		$query="INSERT INTO type(Tname) VALUES('".$_POST["tname"]."')";
		mysql_query($query,$cn);
		
	}
?>




<table border="1">
<tr>
<th>Tid</th>
<th>Tname</th>
<th>Action</th>
</tr>
<?php 
while($row=mysql_fetch_array($result))
{
	?>
     
    <tr>
    <td><?php echo $row[0]?></td>
    <td><?php echo $row[1]?></td>
    <td><?php echo $row[2]?>
    <a href="javascript:del('<?php echo $row[0]?>')">Delete</a>
    
   <a href="edit_type.php?id=<?php echo $row[0]?>">Edit</a></td>
   
    </tr>
    <?php
	
}

?>
    
    
    </table>
    </font>
</body>
</form>
</html>

