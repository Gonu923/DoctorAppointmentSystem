<?php 

	
	$db = mysqli_connect('localhost','root','','cc');

	function getUserAddress($id)
	{
		$array = array();
		$q = mysqli_query("SELECT * FROM addresses where id=".id);
		while ($r = mysql_fetch_assoc($q)) {

			$array['id'] = $row['id'];
			$array['phone'] = $row['phone'];
			$array['number1'] = $row['number1'];
			$array['address'] = $row['address'];
			$array['addressdetails'] = $row['addressdetails'];
			$array['email'] = $row['email'];
			$array['emailaddress'] = $row['emailaddress'];
			
		}
		return $array;
	}






 ?>