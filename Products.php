<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script type="text/javascript">

	function add(id,name,price)
	{
		if(confirm("Do u really want to add " +name+ " to ur cart which will cost "+price+"/item ?"))
		{
			
			qty= prompt("Plz enter the number of quantity:");
			
			window.location="Products.php?pur_id="+id+"&pr="+price+"&qty="+qty;
		}
	}

</script>

<link href="../style.css" rel="stylesheet" type="text/css" />
</head>
<font size="+2">

<p> Click On The Images To Add The Product To Your Cart</p>
<?php

	include("connect.php");
	
	
	if($_REQUEST["pur_id"]<>"")
	{
		
	 $u = $_SESSION["usrnm"];
	 $pid = $_REQUEST["pur_id"];
	 $q = $_REQUEST["qty"];
	 $p = $_REQUEST["pr"];
	 
		
		
		$qr ="insert into temp values('".$u."',".$pid.",".$q.",".$p.")";
		mysql_query($qr,$cn);
		
		echo "<br/>Product has been added to ur cart successfully!<br/>";
		
	?>
    
    	<a href="confirm.php">Click to Confirm ur order</a><br/>
    	<a href="cancel.php">Click to Cancel ur order</a><br/>    	
    
    <?php
	
	
	
		
	}
	
	
	
	
	$qr="select *from product";
	$result = mysql_query($qr,$cn);
	
	while($row=mysql_fetch_array($result))
	{

?>

<body>

	

<p><a href="javascript:add('<?php echo $row[1] ?>','<?php echo $row[2] ?>','<?php echo $row[3] ?>')">
  <input type="image" src="uploads/<?php echo $row[5] ?>" />
</a><?php echo $row[2] ?></p>
<p>&nbsp;</p>
<p><br/>
</p>




<?php

	}
	
	
	
	
	
?>	
 <p><a href="logout.php" >Logout</a></p>

</font></body>
</html>