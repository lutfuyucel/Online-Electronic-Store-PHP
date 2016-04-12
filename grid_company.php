<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">
function del(id)
{
	if(confirm("Do You Really Want To Continue?"))
	{
		window.location="grid_company.php?Cid="+id;
	}
}
</script>
<font size="+2" color="#FFFFFF">
<title>Untitled Document</title>
<link href="../style.css" rel="stylesheet" type="text/css" />
</head>
<?php
include("connect.php");
if($_REQUEST["Cid"]<>"")
{
	$i=$_REQUEST["Cid"];
	$qr="delete from company where Cid=".$i."";
	mysql_query($qr,$cn);
	
}
$qr="select * from company";
$result=mysql_query($qr,$cn);
?>


<body>
<form name="company" method="post" enctype="multipart/form-data">
<table>
<!--	<tr>
    <td>Please EnTer TyPE iD</td>
    <td><input type="text" id"tid" /></td>
    </tr>-->
    <tr>
    <td>Please Enter The Company ID</td>
    <td><input type="text" name="Cid" /></td>
    </tr>
    
    <tr>
    <td>Please Enter The Company Name</td>
    <td><input type="text" name="tname" /></td>
    </tr>
    <tr>
    <td>PleaseUpload Your Image</td>
    <td> <input type="file" name="f" /></td>
    </tr><br/>
    
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
			$nm= $_FILES["f"]["name"];
			
			echo $nm;
			$src= $_FILES["f"]["tmp_name"];
			
			
			echo $src;
			
			move_uploaded_file($src,"uploads/".$nm);
			$query="INSERT INTO company(Cid,Cname,Image) VALUES('".$_POST["Cid"]."''".$_POST["tname"]."','".$nm."')";
			mysql_query($query,$cn);
		
	}
?>
<table border="1">
<tr>
<th>Cid</th>
<th>Cname</th>
<th>Image</th>
<th>Action</th>
</tr>
<?php 
while($row=mysql_fetch_array($result))
{
	?>
     
    <tr>
    <td><?php echo $row[0]?></td>
    <td><?php echo $row[1]?></td>
    <td> <img src="uploads/<?php echo $row[2]?>"  height="100" width="100"/></td>
    <td><?php echo $row[3]?>
    <a href="javascript:del('<?php echo $row[0]?>')">Delete</a>
    
   <a href="edit_company.php?id=<?php echo $row[0]?>">Edit</a></td>
   
    </tr>
    <?php
	
}

?>
    
    
    </table>
    </font>
</body>
</html>

