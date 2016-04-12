<html>
<body>
<?php
session_start();
session_destroy();
setcookie("pass"," ",time()-3600);
header('location:login.php');
?>
</body>
</html>
