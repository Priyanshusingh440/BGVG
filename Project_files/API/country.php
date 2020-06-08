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
 
            $check='SELECT * FROM countrie';
            $result=$this->conn->query($check);
            if($result->num_rows>0)
            {
                $i=0;
                while($row = $result>fetch_assoc())
                {
                    $country[$i]['id']=$row['id'];
                    $country[$i]['country_code']=$row['sortname'];
                    $country[$i]['phonecode']=$row['phonecode'];
                    $i++;
                }
                echo json_encode($country);
            }
            else {
                echo "0 results";
            }
            
            

    }
}
            $basic_details=new country($db);
            $basic_details->updatedetails();