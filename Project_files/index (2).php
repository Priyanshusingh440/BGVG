<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  
<!-- Our Custom CSS -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

<style>

.body {

margin:0;

}

.navbar-nav {

text-align:center;


}

.vl
{

border-left:2px solid black;
height:70%;


}

</style>

</head>

<body>

<!--Navbar-->

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Active</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>
  </ul>
</nav>

  <div class="container-fluid">
     
  <div class="row" style="margin-top:6%;margin-left:7%">

  <div class="col-6">

  <img src="images/bg_login_desk.png" style="width:90%;height:70%;">

  </div>

  <div class="col-1">

  <div class="vl"></div>

  </div>

  <div class="col-5">

  <div class="row">

  <h3 style="margin-left:1.7%;"id="hea">I am a</h3>

  <form action="" style="margin-top:1.5%;margin-left:4%;">

  <input type="radio" id="male" name="gender" value="male"onclick="ShowFormOne()"style="margin-right:1%;">Admin
   <label for="employee"></label>

  <input type="radio" id="female" name="gender" value="female"onclick="ShowFormTwo()"style="margin-left:0.5%;margin-right:1%;">Employee
  <label for="employee"></label>

  </form>

  </div>
  
  <form method="POST">
    <div class="form-group">
      <label for="username">Username</label>
      <input type="email" class="form-control" id="username" placeholder="Enter Email Id" style="width:70%;">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password"style="width:70%;">
    </div>
    <div>
     <a href="index.html">Forget Password</a>
      
    </div>
    <button type="submit"name="submit" id="submit" class="btn btn-primary"onclick="sendJSON()"style="margin-top:3%;">
    Sign In</button>
  </form>



  </div>


  </div>

    </div>

  <script src="index.js"></script> 


</body>



</html>