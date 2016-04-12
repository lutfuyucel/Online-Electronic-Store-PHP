<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" language="javascript">


	function validateName(control)
	{
		var x=control.value;
		if (x==null || x=="")
  		{
  			alert("First name must be filled out");
  			return false;
  		}
		return true;
	}
	function validatePass(control)
	{
		var x=control.value.length;
		if(x<=4)
		{
			alert("Password Must Be Atleast 4 Characters Long");
		return false;
		}
		return true;
	}
	function check_pass(c1,c2)
	{
		x=c1.value;
		y=c2.value;
		if(x!=y)
		{
			alert("Passwords Do Not Match");
			return false;
		}
		return true;
	}
	function chech_gen(c)
	{
		if(!c[0].checked&&!c[1].checked)
		{	
			alert("Plz Select The Gender!");
			return false;
		}
		return true;
	}
	
	function check_eml(c)
	{
		d=c.value;
		at=d.indexof("@");
		dot=d.lastindexof(".");
		if(at<1 || dot<at+2 || dot+2>d.length)
		{
			alert("Invalid Email!!");
			return false;
		}
		return true;
	}
	function check_num(control)
	{
		x=control.value;
		if(isNaN(x))
		{
			alert("Plz Enter Valid Non-Zero Number!");
			control.value="";
			control.focus();
		}
		
	}
	
	function validateForm(New_User)
	{
	with(New_User)
	{
		if(!validateName(USERNAME))
		{
			return false;
		}
		if(!validatePass(PASSWORD))
		{
			return false;
		}
		if(!check_pass(PASSWORD,re-password))
		{
			return false;
		}
		
		if(!check_gen(sex))
		{
			return false;
		}
		if(!check_eml(email))
		{
			return false;
		}
		
		if(!check_num(account))
		{
			return false;
		}
	}
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<font size="+2" color="#FFFFFF">

<link href="../style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form action="insert.php" method="post" name="New_User" class="alignleft" color="biege" >
<fieldset>
<legend><h1 align="center">REGISTRATION</h1></legend>
USERNAME<input type="text"  name="usrnm" size="30"/><br />
PASSWORD<input type="password"  name="pass" size="30"/><br />
RE-PASSWORD<input type="password"  name="repassword" size="30"/><br />
ADDRESS 
<textarea rows="5" cols="40" name="add"></textarea>
</fieldset>
<fieldset>
<legend>GENDER</legend>
<input type="radio" name="sex" value="MALE" selected="selected" />MALE<br />
<input type="radio" name="sex" value="FEMALE" />FEMALE<br />
</fieldset>
<fieldset>
EMAIL<input type="text"  name="email" size="30" placeholder="user@domain.com"/><br />
PHONE<input type="number" value="" size="30" name="phone"/><br />
ACCOUNT NUMBER<input type="text" name="account" size="30"/><br />
</fieldset>
<legend>DATE OF BIRTH</legend>
DATE:
<select name="date">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
MONTH:
<select name="month">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
YEAR:
<select name="year">
<option value="90">90</option>
<option value="91">91</option>
<option value="92">92</option>
<option value="93">93</option>
<option value="94">94</option>
<option value="95">95</option>
<option value="96">96</option>
<option value="97">97</option>
<option value="98">98</option>
<option value="99">99</option>
<option value="00">00</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
</select>
<input type="submit" value="submit" onclick="return validateForm(New_User)" name="submit"  />
<input type="reset" value="Reset"/><br />
</fieldset>
</form>
</font>
</body>

</html>
