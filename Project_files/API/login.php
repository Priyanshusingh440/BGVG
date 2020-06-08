<?php

require_once "../config/config.php";

#---------------------<---Code Written and Designed By Priyanshu Raghuvanshi--->-----------------------#

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
 
    

// Checks if it's empty or not
if( isset($_POST))
{
  $email=$_POST['email'];
  $password=$_POST['password'];

  if(isset($_POST['user-type']))
  {
    if($_POST['user-type']=='Admin')
    {
      
      if ($email != "" && $password != "")
      {
          $check='SELECT * FROM admin  WHERE email_id="'.$Email.'" and password="'.$password.'"';
          
          $result=$this->conn->query($check);
          
          if($result->num_rows==1)
              {
                  $row = $result->fetch_assoc();
                  session_start();
                  $_SESSION['Email'] = $email;
                  $_SESSION['password']=$password;
                  $_SESSION['uid']=$row['id'];
                  
                  echo "Admin logged in";
                  
              }
              else
              {
                  echo "Wrong admin Credentials";
              }
      }
    } 
    else if($_POST['user-type']=='Employee')
    {
      $check='SELECT * FROM employee  WHERE email_id="'.$email.'" and password="'.$password.'"';
      
      $result=$this->conn->query($check);
      
      if($result->num_rows==1)
          {
              $row = $result->fetch_assoc();
              session_start();
              $_SESSION['email'] = $email;
              $_SESSION['password']=$password;
              $_SESSION['uid']=$row['id'];
              
              echo "Employee Logged In";
              
          }
          else
          {
              echo "Wrong Employee Credentials";
          }
    }
  }
  else
  {
    echo "Please Select User-type";
  }
 
}

else 
{
  echo "Connection Denied From Server";
}

                }

            }

            $basic_details=new login($db);
            $basic_details->update_details();