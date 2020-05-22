<?php
session_start(); 
$servername = "shareddb-u.hosting.stackcp.net";
$username = "DBMSPROJECT-31333374d5";
$password = "DBMSPROJECT@";
$con=mysqli_connect($servername,$username,$password,"DBMSPROJECT-31333374d5");
function isEmail($email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return False;
    }
    else{
        return True;
    }
}

if($_POST){
    if(isset($_POST["email"]) && isset($_POST["password"])){
        if(isEmail($_POST["email"])){
            if(strlen($_POST["password"])>=8){
                $result=mysqli_query($con,"SELECT Name,Email,Verification FROM signup1 WHERE Email='".$_POST["email"]."' and Password='".$_POST["password"]."' ");
                $row=mysqli_fetch_array($result);
                if(isset($row[2])){
                    $_SESSION["name"]=$row[0];
                    $_SESSION["email"]=$row[1];
                    $_SESSION["password"]=$_POST["password"];
                    if($row[2]=="Verified"){
                        $result1=mysqli_query($con,"INSERT INTO login(email,password) values('".$_POST["email"]."', '".$_POST["password"]."')");
                        header("Location: Dashboard.php");
                    }
                    else{
                        echo '<script type="text/JavaScript">  
                            alert("Not verified!"); 
                            </script>';
                    }
                   
                }
                else{
                    echo '<script type="text/JavaScript">  
                            alert("No Account Found! "); 
                            </script>';
                }
            }
            else{
                echo '<script type="text/JavaScript">  
                            alert("Enter the Password "); 
                            </script>';
            }

        }
        else{
            echo '<script type="text/JavaScript">  
              alert("Enter the Email"); 
              </script>';
        }
        
    }
    else{
        echo '<script type="text/JavaScript">  
              alert("Fill the Details"); 
              </script>';
    }
}





?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Log in</title>
        <script type="text/javascript" src="jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    </head>
    <style type="text/css">
    body{
        background-color: #E5E7E9;
    }
    .Box{
        min-width: 400px;
        min-height: 500px;
        margin:30px;
        margin-left:240px;
        margin-right:240px;
        margin-bottom: 30px;
        background-color: white;
    }
    .nav-item{
		margin-left: 20px;
	}
    .image{
        margin-left:70px;
        padding-top: 120px;
    }
	.text-part{
        /*float:right;
        margin-right:120px;*/
        text-align: center;
        padding-left:300px ;
        margin-top:-360px;
    }
    .text-part h2{
        margin-top: 40px;
        margin-left: 60px;
    }
    .box-2{
        width: 320px;
        height:40px;
        background-color:#F2F3F4;
        margin-left:150px;
        margin-top: 40px;
        margin-right: 25px;
        margin-bottom: 20px;
        border-bottom: #F2F3F4 solid;
        border-radius: 25px;
        
    }
    .input-1{
        padding-left: 400px;
        margin-top: -31px;
    }
    .object{
        margin-top: 30px;
        margin-left: 50px;
    }
    .button{
        background-color: #28B463;
        color:white;
        text-align: center;
        border:1px solid #28B463;
        padding-left:137px;
        padding-right:137px;
        padding-top:8px;
        padding-bottom:8px;
        font-size:100%;
        border-radius: 25px;
    }
    .button:hover{
        cursor: pointer;
    }
    @media screen and (max-width: 1300px) {
        .extra{
            margin-top: 360px;
            margin-left:-10%;
            margin-right: 30px;
        }
        .Box{
            margin-left: 140px;
            padding-bottom: 30px;
        }
        .box-2{
            margin-left: 75px;
            margin-right: 30px;
        }
        .image{
            margin-left:60px;
        }
    }
    
    @media screen and (max-width: 1000px) {
        .extra{
            margin-top: 360px;
            margin-left:-20%;
        }
        .Box{
            margin-left: 70px;
            padding-bottom: 30px;
        }
        .box-2{
            margin-left: -10px;
            margin-right: 30px;
        }
        .image{
            margin-left:50px;
        }
    }
    @media screen and (max-width: 850px) {
        .extra{
            margin-top: 360px;
            margin-left:-75%;
            padding-right: 30px;
        }
        .Box{
            margin-left: 30px;
            padding-right: -30px;
            padding-bottom: 30px;
        }
        .box-2{
            margin-left: 30px;
            margin-right: 30px;
        
        }
        .image{
            margin-left:40px;
        }
    }
    @media screen and (max-width: 450px) {
        .Box{
            margin: 0px;
            padding: 0px;
        }
    }
    </style>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">

            <a class="navbar-brand" href="index.php"><img src="https://cdn1.iconfinder.com/data/icons/seo-icons-5/96/Coding-512.png" width="40px" style="margin-right: 15px;">Code Collector</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
              <li class="nav-item ">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              
              <li class="nav-item ">
                <a class="nav-link" href="Signup.php">Signup </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="Signin.php">Login <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item ">
                  <a class="nav-link" href="Verification.php">Verification </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="About.php">About</a>
                </li>
              </ul>
            </div>
            </nav>
        <div>
        <form method="post">
            <div class="Box">
                <div class="image">
                    <img src="laptop.png">
                </div>
                <div class="extra">
                    <div class="text-part">
                        <h2>Member Login</h2>
                        <div class="box-2" id="box-3">
                            <div style="padding-top: 5px;margin-left: -270px;">
                                <img src="kisspng-ipma-email-telephone-message-email-icon-5acf36453ee1e1.3103384815235292852576.jpg" width="30px" height="30px">
                                <div class="input-1" style="margin-left: -100px;">
                                    <input type="email"  name="email" id="email" placeholder="Email" style="width: 250px;font-size: medium;height:30px;border:1px solid #F2F3F4;background-color: #F2F3F4;">
                                </div>
                            </div>
                            </div>
                      <div class="box-2" id="box-3">
                        <div style="padding-top: 5px;margin-left: -270px;">
                            <img src="BASICAPP_1-39-512.png" width="35px" height="30px">
                            <div class="input-1" style="margin-left: -100px;">
                                <input type="password"  name="password" id="password" placeholder="Password" style="width: 250px;font-size: medium;height:30px;border:1px solid #F2F3F4;background-color: #F2F3F4;">
                            </div>
                        </div>
                    </div>
                    <div class="box-2">
                        <a href="#" style="text-decoration: none; color:#F2F3F4"><button  class="button" id="button">Login</button></a>
                      </div>
                    <div>
                        <a href="Forget.php" style="text-decoration: none;color:black;"><p style="padding-left: 50px;padding-top: 15px;">Forget Password</p></a>
                    </div>
                    <div>
                        <a  href="Signup.php" style="text-decoration: none;color:black;"><p style="padding-left: 50px;padding-top: 25px;">Create your Account</p></a>
                    </div>
                </div>
                
            </div>
            </form>
        </div>
        <script>
            
        </script>
    </body>
</html>