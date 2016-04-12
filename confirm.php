<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link href="../stylekl.css" rel="stylesheet" type="text/css" />
<link href="../style.css" rel="stylesheet" type="text/css" />
</head>
<font size="+2">

<?php

	include("connect.php");
	
	$qr="select *from temp where usrid='".$_SESSION["usrnm"]."'";
	
	$result = mysql_query($qr,$cn);
	
	

?>
<body>

	<table border="1" align="center" >
    
    <tr>
    	<th>Product Name</th>
        <th>Image</th>
    	<th>Product Quantity</th>
    	<th>Product Price</th>
    	<th>Sub Total</th>                        
    </tr>

<?php

		while($row=mysql_fetch_array($result))
		{

?>

	<tr>
    
    <?php
	
		$qr1 = "select *from product where pid=".$row[1]."";
		$result1 = mysql_query($qr1,$cn);
		
		$row1=mysql_fetch_array($result1);
		
		
	
	?>
    
    
    	<th> <?php echo $row1[2] ?></th>
		<th> <img src="uploads/<?php echo $row1[5] ?>" height="150" width="150"  /></th>        
    	<th> <?php echo $row[2] ?></th>
    	<th> <?php echo $row[3] ?></th>
        
    	<th><?php echo $row[2]*$row[3] ?></th>                        
    </tr>




<?php

		}
?>

	</table><br/>
    
    
<center>    <a href="tran.php">Proceed for Transaction</a> </center>
</body></font>    
    

</html>