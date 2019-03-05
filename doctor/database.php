<?php
Class database{
    public $host = DB_HOST;   
    public $user = DB_USER;   
    public $pass = DB_PASS;   
    public $dbname = DB_NAME;
    
    public $link;
    public $error;
    
    public function __construct(){
        $this->connectDB();
    }
    
    private function connectDB(){
        
        $this->link = new mysqli ($this->host, $this->user, $this->pass, $this->dbname);
        if(!$this->link){
            $this->error ="Connection failed".$this->link->connect_error;
            return false;
        }
    }
    
    //for select or read data
    public function select($query){
        $result = $this->link->query($query) or die ($this->link->error.__LINE__); // show error line
        if($result->num_rows > 0){ // if there is data
            return $result;
        } else{
            return false;
        }
        
    }
   
   public function update($query){
        $update_row = $this->link->query($query) or die ($this->link->error.__LINE__); 
        //validation
        if($update_row){
            header("Location: index.php?msg=".urlencode('Data updated Successfully'));
            exit();
        }else{
            die("Error : (".$this->link->errno.")".$this->link->error.__LINE__);
        }
    }
	public function delete1($query){
        $delete_row = $this->link->query($query) or die ($this->link->error.__LINE__); 
        //validation
        if($delete_row){
            header("Location: index.php?msg=".urlencode('Data deleted Successfully'));
            exit();
        }else{
            die("Error : (".$this->link->errno.")".$this->link->error.__LINE__);
        }
    }
	
}
?>