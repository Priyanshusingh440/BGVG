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
 
            $check='SELECT * FROM lob_type';
            $result=$this->conn->query($check);
            if($result->num_rows)
            {
                while($row = $result->fetch_assoc())
                {
                    $country[$i]['id']=$row['id'];
					$country[$i]['addone']=$row['addone'];
                    $country[$i]['addtwo']=$row['addtwo'];
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
            $basic_details->update_details();