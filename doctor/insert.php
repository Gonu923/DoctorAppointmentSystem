<?php
	$name="";
	$t1="";
	$t2="";
	$id=0;
    $db = mysqli_connect('localhost','root','','cc');
    if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
    //data validation
    if(isset($_POST['save'])){ // if submit is found
		//$name = $_POST['name'];
        $name = $_POST['name'];
        $t1= $_POST['t1'];
        $t2= $_POST['t2'];
        $query = "INSERT INTO abouthome(name, t1, t2) VALUES('$name','$t1','$t2')";
        mysqli_query($db,$query); // database methods instance creation and access
        
        
    }
?>