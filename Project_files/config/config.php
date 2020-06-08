<?php

    
class connectdb
{
    
    private $servername='localhost';
    private $user='pesrsxttfd';
    private $password='Demo@123';
  //  private $user='root';
//  private $password='';
    private $dbname='pesrsxttfd';
    private $conn;
    
   public function connect()
    {
        $this->conn=null;
        $this->conn=new mysqli($this->servername,$this->user,$this->password,$this->dbname);
        
         if($this->conn->connect_error)
        {
            die("Connection Failed:" .$this->conn->connect_error);
        }
        else
        {
          //  echo "Connection Successfull";
        }
        
        return $this->conn;
        
    }
}
?>