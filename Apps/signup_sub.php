<?php
include("users.php");
$register=new users;
extract($_POST);
$img_name=$_FILES['img']['name'];
$tmp_name=$_FILES['img']['tmp_name'];
move_uploaded_file($tmp_name,"../img/".$img_name);
$query="INSERT INTO admin_info VALUES ('','$fullname','$name','$password','$email','$img')";
if($register->signup($query)){
	$register->url("../adminlogin.php?run=success");
}
?>