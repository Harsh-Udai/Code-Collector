<?php
session_start(); 
$servername = "shareddb-u.hosting.stackcp.net";
$username = "DBMSPROJECT-31333374d5";
$password = "DBMSPROJECT@";
$con=mysqli_connect($servername,$username,$password,"DBMSPROJECT-31333374d5");
function emailer($from, $message){
  ini_set( 'display_errors', 1 );
  error_reporting( E_ALL );
  $to = "harshudai@jklu.edu.in";
  $subject = "Feedback";
  $headers = "From:" . $from;
  mail($to,$subject,$message, $headers);
}

$otp = rand(1000,9999);

if(isset($_POST["button"])){
    $result1=mysqli_query($con,"INSERT INTO feedback(email,password,feedback) values('".$_SESSION["email"]."', '".$_SESSION["password"]."','".$_POST["ideas"]."')");
  emailer($_SESSION["email"],$_POST["ideas"]);
  echo '<script type="text/JavaScript">  
        alert("Your feedback is collected!"); 
        </script>';
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
                <a class="nav-link" href="About_.php">About</a>
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
                        <button type="button" id="button" name="button" style="width:750px;margin-bottom: 50px;" class="btn btn-dark">View </button>
                      </div>
                   
                  
            </div>
            
        </div>   
        <div class="d-flex justify-content-center" >
            <div class="alert" style="width:800px;" role="alert">
                <h3 class="alert-heading">If you face problems using this platform, Mail us.</h3>
                <p>We are happy if you share your feedback.</p>
                <hr>
                <p class="mb-0"></p>
            </div>
             
        </div>
        <div class="d-flex justify-content-center">
          <div style="width:700px;margin-bottom:80px">
            <form >
              <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" name="from" class="form-control" id="exampleFormControlInput1" placeholder="<?php echo $_SESSION["email"] ?>" readonly required>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Write here!</label>
                <textarea class="form-control" name="ideas" id="exampleFormControlTextarea1" rows="3" required></textarea>
              </div>
              <button type="submit" name="button" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
        </form>
        <script type="text/javascript">
        document.getElementById("button").onclick=function(){
            
            var username='<?php echo $_SESSION["name"] ?>';
            var email='<?php echo $_SESSION["email"] ?>';
            var password='<?php echo $_SESSION["password"] ?>';
            
              document.getElementById("Username").placeholder = (username);
              document.getElementById("email").placeholder = (email);
              document.getElementById("password").placeholder =(password);
            
        }
        </script>
    </body>
</html>