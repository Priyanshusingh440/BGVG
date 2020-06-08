<?php

require_once "../config/config.php";

#---------------------<---Code Written and Designed By Priyanshu Raghuvanshi--->-----------------------#

$get_connection=new connectdb;
$db=$get_connection->connect();

class country
{
    
    public function __construct($db)
    {
    $this->conn=$db;
    }

   public function update_details()
   {
 
            $check='SELECT * FROM service_type ';
            $result=$this->conn->query($check);
            if($result->num_rows)
            {
                $i=0;
                while($row = $result->fetch_assoc())
                {
                    $country[$i]['Id']=$row['id'];
                    $country[$i]['name']=$row['name'];
                    
                    
                    $i++;
                }
                
            }
            else {
                $country['Status']="0";
                $country['message']="No result found";
                echo json_encode($country);
            }
            
            

    }
}
            $basic_details=new country($db);
            $basic_details->update_details();