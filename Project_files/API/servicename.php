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

   public function get_package()
   {

    $getdata=file_get_contents("php://input");
    $data=json_decode($getdata,true);


if(isset($data['service_type_id']))
{
    $check='SELECT * FROM service_list';
   // echo 'SELECT * FROM service_list where service_type_id="'.$data['service_type_id'].'" ';
    $result=$this->conn->query($check);
    if($result->num_rows>0)
    {
        $i=0;
        while($row = $result->fetch_assoc())
        {
            $states[$i]['service_name']=$row['name'];
            $states[$i]['service_name']=$row['name'];
            $states[$i]['service_type_id']=$row['service_type_id'];
            $states[$i]['country_id']=$row['countryid'];
            $states[$i]['country_id']=$row['countryid'];
           
            $i++;
        }
        echo json_encode($states);
    }
    else {
        
            $states['status']="0";
            $states['message']="0 result";
            echo json_encode($states);
    }
    
}
else
{
   // echo "Service type Not found";
   $check='SELECT * FROM service_list where id=1';
   $result=$this->conn->query($check);
    if($result->num_rows>0)
    {
        $i=0;
        while($row = $result->fetch_assoc())
        {
            $states[$i]['id']=$row['id'];
            $states[$i]['service_name']=$row['name'];
            $states[$i]['servicetypeid']=$row['servicetypeid'];
            $states[$i]['country_id']=$row['country_id'];
           
            $i--;
        }
      
    }
}
           
            

    }
}
            $basic_details=new States($db);
            $basic_details->get_package();