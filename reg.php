<html>
<h2>Welcome To Registration For Member</h2>

<me
ta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php include("connect.php");?>
<script language="javascript" type="text/javascript">
function validate_blank(control,msg)
{
	with(control)
	{
		if(value=="" || value==NULL)
		{
			alert("");
			focus();
			return false;
		}
		return true;
	}
	
}
function validate_len(control,msg)
{
	with(control)
	{
		if(value.len<6)
		{
			alert("please re type your password more than 6 letters");
			focus();
			return false;
			
		}
		return true;
	}
}

function validate_num(control,msg)
{
	with(control)
	{
		if(isNAN(value)==true)
		{
			alert(msg);
			focus();
			return false;
		}
		return true;
	}
}

function validate_form(thisform)
{
	with(thisform)
	{
		if(validate_blank(utxt,"UserName can't be blank!")== false)
		{
			return false;
		}
		if(validate_blank(ptxt,"Password can't be blank!")== false)
		{
			return  false;
		}
	}
}
function validate_form(thisform)
{
	with(thisform)
	{
		if(validate_len(ptxt,"Password length should be greater than 6 char!")==false)
		{
			return false;
		}
		if(validate_num(atxt,"Enter a valid number!")==false)
		{
			return false;
		}
	}
	
}
</script>

<body>
<p>Register</p>

<form name="frm1" method="post">
<table border="10">
   <tr>
    <td>UserID:</td>
    <td> 
        <input type="text" name="utxt">
    </td>
  </tr>
  <tr>
    <td>Name:</td>
    <td>
          <input type="text" name="ntxt">
    </td>
  </tr>
  <tr>
    <td>Password:</td>
    <td> 
       <input type="password" name="ptxt">
    </td>
  </tr>
  <tr>
    <td>Confirm Password:</td>
    <td>          
    	<input type="password" name="cptxt">
    </td>
  </tr>
  <tr>
    <td>Address:</td>
    <td>
      <textarea  cols="45" rows="5" name="adtxt"></textarea>
    </td>
  </tr>
  
  <tr>
    <td>city</td>
    <td>  
    	<select name="city">   
    	 <?php
		 
		 $qr="select * from city";
		 $result = mysql_query($qr,$cn);
		 while($row=mysql_fetch_array($result))
		 {
				echo "<option value='$row[0]'>$row[1]</option>"; 
		 }
		 
		 ?>
        </select>
    </td>
  </tr>
  
  <tr>
    <td>state</td>
    <td>      
 		<select name="state">   
    	 <?php
		 
		 $qr="select * from state";
		 $result = mysql_query($qr,$cn);
		 while($row=mysql_fetch_array($result))
		 {
				echo "<option value='$row[0]'>$row[1]</option>"; 
		 }
		 
		 ?>
        </select>   	
    </td>
  </tr>
  
  <tr>
    <td>Contact-no:</td>
    <td>
      <input type="text" name="notxt">
    </td>
  </tr>
  
  
  <tr>
    <td>Email_id:</td>
    <td>
        <input type="text" name="mtxt">
    </td>
  </tr>
  
  <tr>
    <td>Gender:</td>
    <td>
    <input type="radio" name="gender" value="male">Male 
    <input type="radio" name="gender" value="female">Female
    </td>
  </tr>
  
  <tr>
    <td colspan="2">
     
    <input type="submit" name="submit"  value="Login" />
    
    <input type="reset" name="clear" value="clear" />
    
    </td>
  </tr>
</table>
</form>



<?php

	if($_REQUEST["submit"]<>"")
	{
		$unm=$_REQUEST["utxt"];
		$nm=$_REQUEST["ntxt"];
		$pass=$_REQUEST["ptxt"];
		$add=$_REQUEST["adtxt"];
		$cpass=$_REQUEST["cptxt"];
		$cty=$_REQUEST["city"];
		$st=$_REQUEST["state"];
		$cno=$_REQUEST["notxt"];
		$mid=$_REQUEST["mtxt"];
		$gen=$_REQUEST["gender"];
	
	
		if($pass=$cpass)
		{
			$qsr="insert into reg values('".$unm."','".$nm."','".$pass."','".$add."','".$cty."','".$st."','".$cno."','".$mid."','".$gen."','U')";
			
			mysql_query($qr,$cn);
			
			echo "Data saved!!";
		}
		else
		{
			echo "Please check the password!!";
		}
	}

?>

</body>

</html>