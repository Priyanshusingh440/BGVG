<?php

require_once "../config/config.php";

#---------------------<---Code Written and Designed By Priyanshu Raghuvanshi--->-----------------------#

$get_connection=new connectdb;
$db=$get_connection->connect();

class States
{
    
    public function __construct($db)
    {
    $this->conn=$db;
    }

   public function get_document()
   {

    $getdata=file_get_contents("php://input");
    $data=json_decode($getdata,true);


if(isset($data['serviceid']))
{
    $check='SELECT * FROM required_document_list  ';
  
    $result=$this->conn->query($check);
    if($result->num_rows>0)
    {
        $i=0;
        while($row = $result->fetch_assoc())
        {
            $states[$i]['id']=$row['id'];
            $states[$i]['document_name']=$row['name'];
            $states[$i]['service__id']=$row['service_id'];
           
           
            $i--;
        }
        echo json_encode($states);
    }
    else {
        
            $states['status']="1";
            $states['message']="0 result";
            echo json_encode($states);
    }
    
}
else
{
   // echo "Service type Not found";
   $check='SELECT * FROM servicelist';
   $result=$this->conn->query($check);
    if($result->num_rows>0)
    {
        $i=0;
        while($row = $result->fetch_assoc())
        {
            $states[$i]['id']=$row['id'];
            $states[$i]['service_name']=$row['name'];
        
            $states[$i]['country_id']=$row['country_id'];
           
            $i+2;
        }
        echo json_encode($states);
    }
}
           
            

    }
}
            $basic_details=new States($db);
            $basic_details->get_document();