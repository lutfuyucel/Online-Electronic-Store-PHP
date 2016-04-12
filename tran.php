<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script type="text/javascript">

	function sel(c)
	{
		window.location="tran.php?typ="+c.value;
	}

</script>
<font size="+3">


<link href="../style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body,td,th {
	font-size: medium;
}
</style>
</head>

<?php

	include("connect.php");
?>
<body>

	<form name="frm1" method="post" action="payment.php">
      <div align="center">Select Payment option
          <select name="tr" onchange="sel(this)">
            
            <?php
		
			if($_REQUEST["typ"]=="cc")
			{
		?>
            <option value="-1"><---Option---></option>
            <option value="cc" selected="selected">Credit card</option>
            <option value="cod">Cash on Delivery</option>
            <?php
			}
			else if($_REQUEST["typ"]=="cod")
			{
		?>   
            
            <option value="-1"><---Option---></option>
            <option value="cc" >Credit card</option>
            <option value="cod" selected="selected">Cash on Delivery</option> 
            <?php
			}
			else
			{
		 
		 ?>   
            
            <option value="-1"><---Option---></option>
            <option value="cc" >Credit card</option>
            <option value="cod">Cash on Delivery</option> 
            
            <?php
			}
		  ?>  
            
            
          </select>
        <br/>
        
        <?php
		
				if($_REQUEST["typ"]=="cc")
				{
					
	 ?>
     
     	Enter ur credit card no:<input type="text" name="ctxt" /><br/>	
     
     <?php				
					
				}
		
		
		?>
        
        
        
        <input type="submit" value="Click to Pay" name="submit" />
   	  </div>
    </form>


</font>
</body>
</html>