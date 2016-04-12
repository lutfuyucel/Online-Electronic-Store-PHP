<html>
<head>
<title>Untitled Document</title>
<script type="text/javascript">
function del(id)
{
	if(confirm("Do You Really Want To Continue?"))
	{
		window.location="grid.php?Pid="+id;
	}
}
</script>
<link href="../style.css" rel="stylesheet" type="text/css">
<font size="+3" color="#FFFFFF">
</head>
<?php
include("connect.php");
if($_REQUEST["Pid"] <> "")
{
	$i=$_REQUEST["Pid"];
	$qr="delete from product Where Pid='".$i."'";
	mysql_query($qr,$cn);
}
$qr="select * from product";
$result=mysql_query($qr,$cn);
?>

<body>
<form name="type" method="post"  enctype="multipart/form-data">
<table>
<caption>PRODUCT</caption>
<!--	<tr>
    <td>Please EnTer TyPE iD</td>
    <td><input type="text" id"tid" /></td>
    </tr>-->
    <tr>
    <td>Please Enter The ProductId</td>
    <td><input type="text" name="pid" /></td>
    </tr>
    
    <tr>
    <td>Please Enter The Product</td>
    <td><input type="text" name="pname" /></td>
    </tr>
    <tr>
    <td>Please Enter The Price</td>
    <td><input type="text" name="price"/></td>
    </tr>
    <tr>
    <td>Please enter The Quantity</td>
    <td><input type="text" name="qty"/></td>
    </tr>
    <tr>
    <td>PleaseUpload Your Image</td>
    <td> <input type="file" name="f" /></td>
    </tr><br/>
    
    
	<tr>
    <td>Please Enter The Type ID</td>
    <td><input type="text" name="tid"/></td>
    </tr>
    
    <tr>
    <td>Please Enter The Company ID</td>
    <td><input type="text" name="cid"/></td>
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
			$nm= $_FILES["f"]["name"];
			$src= $_FILES["f"]["tmp_name"];
			move_uploaded_file($src,"uploads/".$nm);
			
		
		
		
		
		
		$query="INSERT INTO product(Pid,Pname,Price,Qty,Img,tid,Cid) VALUES('".$_POST["pid"]."','".$_POST["pname"]."','".$_POST["price"]."','".$_POST["qty"]."','".$nm."','".$_POST["tid"]."','".$_POST["cid"]."')";
		mysql_query($query,$cn);
		
	
		
	}
?>








<table border="1" align="center">
<tr>
<th>Product ID</th>
<th>Product Name</th>
<th>Price</th>
<th>Qty</th>
<th >Img</th>
<th>Tid</th>
<th>Cid</th>
<th>Action</th>
</tr>
<?php
while($row=mysql_fetch_array($result))
{

	?>
    
    <tr>
    <td><?php echo $row[1]?></td>
    <td><?php echo $row[2]?></td>
    <td><?php echo $row[3]?></td>
    <td><?php echo $row[4]?></td>
    <td> <img src="uploads/<?php echo $row[5]?>"  height="100" width="100"/></td>
    <td><?php echo $row[6]?></td>
    <td><?php echo $row[7]?></td>
    	<td><a href="javascript:del('<?php echo $row[1]?>')">Delete</a>
    
   <a href="edit.php?id=<?php echo $row[1]?>">Edit</a></td>
   
    </tr>
    <?php
	
}

?>
    
    
    </table>
    </font>
</body>
</html>