<html>

<head>
<script type="text/javascript">

		function check_blank(t1,control)
		{
			data=control.value;
			if(data.length==0)
			{
				alert("Name Can't Be Blank");
				return false;
			
		}
	return true;
	}

function check_num(control)
{
	x=control.value;
	if(isNaN(x))
	{
		alert("Please Enter Valid Non-Zero No. !");
	}
	else if(x==0)
	{
		alert("Please Enter Non-Zero No!");
	}
	else if(x<0)
	{
		alert("Please Enter Non-Negative No!");
		control.value=" ";
		control.focus();
	}
	
}
function check_pass_len(control)
{
	len=control.value.length;
	if(len<8)
	{
		alert("Password Must Be Atleast 8 Characters Long");
	return false;
	}
	return true;
}
function check_pass(pwd,cpwd)
{
	x=pwd.value;
	y=cpwd.value;
	if(x!=y)
	{
		alert("Passwords Do Not Match!");
	return false;
	}
	return true;
}
</script>

<body bgcolor="#0099FF" background="images.jpg">
<h2 align="center" >REGISTRATION FORM</h2>
<table align="center">

<form method="post" align="center" action="insert.php">



<tr><input type="text" name="t1"/>Name<br/></tr>
<tr><input type="password" name="pwd" onBlur("check_pass_len(this)"/>Password<br/></tr>
<tr><input type="password" name="cpwd" onBlur("check_pass(pwd,cpwd)"/> Confirm Password<br/></tr>
<tr><input type="text" name="h"/>Hobbies<br/></tr>
<tr>City:<br/></tr>
<tr><input type="radio" name="ta" value="Surat"/>Surat<br/></tr>
<tr><input type="radio" name="ta" value="Ahmedabad"/>Ahmedabad<br/></tr>
<tr>Gender:<br/></tr>
<tr><input type="radio" name="gn" value="Female"/>Female<br/></tr>
<tr><input type="radio" name="gn" value="Male"/>Male<br/></tr>
<tr><input type="text" name="ag" onBlur="check_num(this)"/>Age<br/></tr>
<tr><input type="submit" name="submit" onClick="return check_blank(t1)"/><br/></tr>
</form>



</body>
</html>
	
	
	
