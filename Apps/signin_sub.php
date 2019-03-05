<?php
include("users.php");
$signin=new users;
extract($_POST);
if($signin->signin($name,$password))
{
	$signin->url("../admin/index.php");
}
else
{
	$signin->url("../adminlogin.php?run=failed");
}
?>