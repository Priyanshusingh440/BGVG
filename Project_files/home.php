<?php
require_once "config/config.php";

#---------------------<---Code Written and Designed By Priyanshu Raghuvanshi--->-----------------------#

$get_connection=new connectdb;
$db=$get_connection->connect();

class home
{
    
    public function __construct($db)
    {
    $this->conn=$db;
    }

   public function update_details()
   {

   // session_start();
if(!isset($_SESSION['uid'])){
 // echo $_SESSION['uisdsd'];
      header('Location:adminDashboard_sidebar.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location:adminDashboard_sidebar.php?msg=invalid');
}

  
    }

            }

            $basic_details=new home($db);
            $basic_details->update_details();
?>
<!doctype html>
<html>
    <head></head>
    <body>
        <h1>Homepage</h1>
        <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form>
    </body>
</html>



