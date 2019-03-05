<?php 
session_start();
class users{
	public $host="localhost";
	public $username="root";
	public $pass="";
	public $db_name="cms";
	public $conn;
	public $data;
	public function __construct()
	{
		$this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
		if($this->conn->connect_errno)
		{
			die ("database connection failed".$this->conn->connect_errno);
		}
	}
	
	public function signup($data)
	{
		$this->conn->query($data);
		return true;
	}
	public function signin($name, $password){
		$qry = $this->conn->query("SELECT name, password from admin_info WHERE name = '$name' AND password = '$password'");
		$qry->fetch_array(MYSQLI_ASSOC);
		if ($qry->num_rows>0) {
			$_SESSION['name']=$name;
			return true;
		}
		else{
			return false;
		}
	}
	public function user_profile($name){
		$qry = $this->conn->query("SELECT * from admin_info WHERE name = '$name'");
		$row = $qry->fetch_array(MYSQLI_ASSOC);
		if ($qry->num_rows>0) {
			$this->data[] = $row;
		}
		return $this->data;
	}
	
	public function url($url){
		header("location:".$url);

	}
}
?>