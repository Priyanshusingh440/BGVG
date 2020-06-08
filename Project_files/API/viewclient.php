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
 
            $check='SELECT * FROM client ';
            $result=$this->conn->query($check);
            if($result->num_rows>0)
            {
                $i=0;
                while($row = $result->fetch_assoc())
                {
                    $country[$i]['Id']=$row['id'];
                    $country[$i]['Company']=$row['Company'];
                    $country[$i]['User_name']=$row['User_ame'];
                    $country[$i]['first_name']=$row['firt_name'];
                    $country[$i]['Last_name']=$row['Last_name'];
                    $country[$i]['ClientName']=$row['Clent_Name'];
                    $country[$i]['Address']=$row['Addrss'];
                    $country[$i]['postal_code']=$row['postal_code'];
                    $country[$i]['aboutme']=$row['abot_me'];
                    $country[$i]['password']=$row['pssword'];
                    $country[$i]['Profile']=$row['Proile'];
                    $country[$i]['Client_Code']=$row['lient_Code'];
                    $country[$i]['Client_SPOC']=$row['ClientSPOC'];
                    $country[$i]['counry']=$row['country'];
                    $country[$i]['Inv_Bank']=$row['Inv_Bank'];
                    $country[$i]['Inv_Coe']=$row['Inv_Code'];
                    $country[$i]['Contat_Applicant']=$row['Contact_Applicant'];
                    $country[$i]['Is_Blk_Upload']=$row['Is_Bulk_Upload'];
                    $country[$i]['DOB']=$row['DOB'];
                    $country[$i]['Lie_DateDate']=$row['Live_DateDate'];
                    $country[$i]['Crrency']=$row['Curency'];
                    $country[$i]['Internal_ReferenceID']=$row['Internal_eference_ID'];
                    $country[$i]['Email_ID']=$row['Email_D'];
                    $country[$i]['Is_GSTIN']=$row['Is_GSIN'];

                    $i++;
                }
                echo json_encode($country);
            }
            else {
                echo "0 results";
            }
            
            

    }
}
            $basic_details=new country($con);
            $basic_details->update_details();