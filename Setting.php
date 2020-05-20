<?php
session_start(); 
$servername = "localhost";
$username = "root";
$password = "";
$con=mysqli_connect($servername,$username,$password,"DBMS");
function emailer($to, $subject){
  ini_set( 'display_errors', 1 );
  error_reporting( E_ALL );
  $from = "noreply@codeditor.com";
  $message = "PHP mail works just fine";
  $headers = "From:" . $from;
  mail($to,$subject,$message, $headers);
}

$otp = rand(1000,9999);
if(isset($_POST["button"])){
  echo "<script>alert('OTP is send to your Mail')</script>";
  $otp="<script>prompt('Enter you OTP ')</script>";
  $username=$_SESSION["name"];
  $email= $_SESSION["email"] ;
  $pass=$_SESSION["password"];

}
else{
  echo "na";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Codeditor</title>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
        <script type="text/javascript" src="jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    </head>
    <style class="text/css">
    .nav-item{
        margin-left: 20px;
    }
    
    </style>
    <body>
    <form method="post">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">

            <a class="navbar-brand" href="#"><img src="https://cdn1.iconfinder.com/data/icons/seo-icons-5/96/Coding-512.png" width="40px" style="margin-right: 15px;">Code Collector</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
              <li class="nav-item ">
                <a class="nav-link" href="Dashboard.php">Dashboard </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="AllCodes.php">All Repository</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="About.php">About</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="Setting.php">Settings <span class="sr-only">(current)</span> </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      More
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="index.php">Log out</a>
                    </div>
                  </li>
              </ul>
            </div>
        </nav>
        <div class="d-flex justify-content-center" >
            <div class="alert" style="width:800px;" role="alert">
                <h3 class="alert-heading">User Settings</h3>
                <p>Details.</p>
                <hr>
                <p class="mb-0"></p>
            </div>
            
        </div>    
        <div class="d-flex justify-content-center">
            <div  style="width:700px;">
                <div class="alert alert-success" role="alert" style="text-align: center;">
                    You can View your Details!!
                  </div>
                <form>
                    <div class="input-group mb-3" style="padding-bottom: 20px;">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Username</span>
                        </div>
                        <input type="text" class="form-control" placeholder="*************" id="Username" aria-label="Username" aria-describedby="basic-addon1" readonly>
                        
                      </div>
                      <div class="input-group mb-3" style="padding-bottom: 20px;">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Email</span>
                        </div>
                        <input type="Email" class="form-control" id="email" placeholder="*************" aria-label="Username" aria-describedby="basic-addon1" readonly>
                        
                      </div>
                      <div class="input-group mb-3" style="padding-bottom: 20px;">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Password</span>
                        </div>
                        <input type="Password" class="form-control" id="password" placeholder="*************" aria-label="Username" aria-describedby="basic-addon1" readonly>
                        
                      </div>
                      <div class="d-flex justify-content-center">
                        <button type="submit" id="button" name="button" style="width:750px;margin-bottom: 50px;" class="btn btn-dark">View </button>
                      </div>
                   
                  
            </div>
        </div>
        </form>
       
    </body>
</html>