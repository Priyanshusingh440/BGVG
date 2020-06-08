
<?php

require_once "../config/config.php";


$get_connection=new connectdb;
$db=$get_connection->connect();

class login
{
    
    public function __construct($db)
    {
    $this->conn=$db;
    }

   public function update_details()
   {
 
    
$json_data = file_get_contents("php://input");

// Checks if it's empty or not
if( !empty($json_data) )
{

  // Decodes the JSON object to an Array
  $data = json_decode($json_data, true);
  //var_dump($data);
  $Client_Name=$data['Client Name'];	
  $Client_Code=$data['Client Code'];	 
  $Client_SPOC=$data['Client SPOC'];
  $Zip_Code=$data['Zip Code'];
  $Contact_Number=$data['Contact Number'];
  $App_Response_Time=$data['Applicant Response Time'];
  $Inv_Address=$data['Invoice Address Details'];
  $Inv_Bank=$data['Invoice Bank Detail']; 
  $Inv_Due_Days=$data['Invoice Payment Due Days'];
  $Inv_Code=$data['Invoice Code'];
  $Is_GSTIN=$data['Is GSTIN'];
  $Email=$data['Email ID'];
  $dob=$data['dateofbirth'];
  $Is_Package=$data['Is Package'];
  $Email_radio=$data['Email ID radio']; 
  $Is_LOB_Mapping=$data['Is LOB Mapping'];	 
  $Country=$data['locality-dropdown'];
  $State=$data['select_state'];
  $City=$data['select_city'];
  $currency=$data['currency'];
  
 

        if ($Client_Name!= "")
        {
           /* $check="INSERT INTO `client`( `Client_Name`, `Client_Code`, `Client_SPOC`, 
            `country`, `State`, `city`, `Zip_Code`, `Contact_Number`, `email`, `App_Response_Time`, `Inv_Address`,
             `Inv_Bank`, `Inv_Due_Days`, `Inv_Code`, `Contact_Applicant`, `Is_Bulk_Upload`, `Is_Prin_Merge`, `Is_GSTIN`, 
             `Is_Package`, `Is_Cancelled_Report`, `Is_SEZ`, `Is_LOB_Mapping`, `Contact_Aggregator`, `Email_ID`,
              `Applicant_Check_List`, `Internal_Reference_ID`, `Currency`, `Live_DateDate`) VALUES ('$Client_Name',
              '$Client_Code','$Client_SPOC','$Country','$State','$City','$Zip_Code','$Contact_Number',
             '$Email','$App_Response_Time','$Inv_Address','$Inv_Bank','$Inv_Due_Days','$Inv_Code',
             '$Contact_Applicant','$Is_Bulk_Upload','$Is_Prin_Merge','$Is_GSTIN','$Is_Package','$Is_Cancelled_Report',
             '$Is_SEZ','$Is_LOB_Mapping','$Contact_Aggregator','$Email_ID',
             '$Applicant_Check_List','$Internal_Reference_ID','$Currency','$Live_DateDate') ";
             //echo $check;
             */
     $check="INSERT INTO `client` SET      
    `Client_Name`='".$Client_Name."',
    `Client_Code`='".$Client_Code."',
    `Client_SPOC`='".$Client_SPOC."',
    `Zip_Code`='".$Zip_Code."',
    `Contact_Number`='".$Contact_Number."',
    `App_Response_Time`='".$App_Response_Time."',
    `Inv_Address`='".$Inv_Address."',
    `Inv_Bank`='".$Inv_Bank."',
    `Inv_Due_Days`='".$Inv_Due_Days."',
    `Inv_Code`='".$Inv_Code."',
    `Is_GSTIN`='".$Is_GSTIN."',
    `email`='".$Email."',
    `DOB`='".$dob."',
    `Is_Package`='".$Is_Package."',
    `Email_ID`='".$Email_radio."',
    `Is_LOB_Mapping`='".$Is_LOB_Mapping."',
    `country`='".$Country."',
    `State`='".$State."',
    `city`='".$City."',
    `Currency`='".$currency."'";

         //    echo"<script>console.log(\"SQL Query:\"+$check)</script>";
             $result=$this->conn->query($check);
          if($result){
              echo "  sucess";
          }
          else{
            echo "  error";
          }
             
        }
   
}

else 
{
  echo "Empty JSON object, something's wrong!";
}

                }

            }

            $basic_details=new login($db);
            $basic_details->update_details();

?>
