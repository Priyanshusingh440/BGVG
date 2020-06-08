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


if(isset($data['country_id']))
{
    $check='SELECT * FROM package_list where country_id="'.$data['country_id'].'" ';
    $result=$this->conn->query($check);
    if($result->num_rows>0)
    {
        $i=0;
        while($row = $result->fetch_assoc())
        {
            $states[$i]['id']=$row['id'];
            $states[$i]['package_name']=$row['package_name'];
            $states[$i]['country_id']=$row['country_id'];
           
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
    echo "Country ID not found";
}
           
            

    }
}
            $basic_details=new States($db);
            $basic_details->get_package();