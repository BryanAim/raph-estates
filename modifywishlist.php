<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
include('function.php');
$id=$_GET['id'];
$query="update wishlist set sho='0' where id='$id'";
$con=con();
$res=$con->query($query);
header('location:profile.php');
?>
</body>
</html>