<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form name="img_learn" method="post" enctype="multipart/form-data">
Image <input type="file" name="f"><br/>
<input type="submit" name="submit" value="Upload" />
</form>


	<?php
	
		if($_REQUEST["submit"]<>"")
		{
			
			$nm= $_FILES["f"]["name"];
			$src= $_FILES["f"]["tmp_name"];
			
			move_uploaded_file($src,"images/".$nm);
			
			echo "Image uploaded!";
			
			
		}
	
	
	?>

</body>
</html>