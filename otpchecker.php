<?php
session_start();

if(strlen(isset($_POST['check'])<4)){
    
}
else{
    if(strcmp($_POST["check"],$_SESSION['otp'])==0){
        header("Location: passwordSet.php");
        
    }
    else{
        
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Codeditor</title>
        <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
        <script type="text/javascript" src="jquery.min.js"></script>
        <script src="jquery-ui/jquery-ui.js"></script>
        <link href="jquery-ui/jquery-ui.css" rel="stylesheet">
    </head>
    <style type="text/css">
    body{
        background-color: #F2F3F4;
    }
    .nav-item{
		margin-left: 20px;
	}
	
    .main-box{
        margin-top: -25px;
        margin-bottom: 30px;
        position: relative;
        width:480px;
        left:32%;
    }
    .box-1{
        min-width:400px;
        min-height:480px;
        height: 350px;
        background-color: white;
        border-radius: 1.5%;
    }
    .signup{
        text-align: center;
        padding-top:10px;
        
    }
    .part-1{
        margin-top: 70px;
        text-align: center;
        font-family: 'Manrope', sans-serif;
        font-size: 150%;
        padding-top: 40px;
    }
    .part-1 h3{
        margin-top:-10px;
    }
    .part-11{
        margin-top: -10px;
        text-align: center;
        font-family: 'Manrope', sans-serif;
        font-size: 100%;
        padding-top: 40px;
    }
    .part-2{
        padding-left: 65px;
    }
    .button{
        background-color: #27AE60;
        border: 0.1px solid #27AE60;
        width: 100px;
        padding-left:7px;
        padding-top: 7px;
        padding-right: 7px;
        padding-bottom: 7px;
        color:white;
        font-family: 'Manrope', sans-serif;
        font-size: 120%;
    }
    .button-part{
        margin-left: 180px;
        margin-top: 20px;
        
    }
    .part-3{
        text-align: center;
        font-family: 'Manrope', sans-serif;
    }
    .change:hover{
        text-decoration: underline;
        cursor:pointer;
    }
    #parrt1{
        margin-top:10px;
        display:none;
    }
    @media screen and (max-width: 450px) {
        .main-box{
            left:0px;
            margin:0px;
            padding:0px;
        }   
    }
    </style>
     <body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <a class="navbar-brand" href="#"><img src="https://cdn1.iconfinder.com/data/icons/seo-icons-5/96/Coding-512.png" width="40px" style="margin-right: 15px;">Code Collector</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" href="index.php">Home </a>
        </li>
        
        <li class="nav-item active">
          <a class="nav-link" href="Signup.php">Signup <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="Signin.php">Login </a>
        </li>
        <li class="nav-item">
				  <a class="nav-link" href="Verification.php">Verification</a>
			  </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
          </li>
        </ul>
      </div>
      </nav>
        <form method="post">
        <div>
            <div>
                <div class="main-box">
                    <div class="box-1">
                        <div class="part-1">
                            <h3>Codeditor</h3>
                            <p>Enter the security passcode</p>
                        </div>
                        <div>
                            <img src="mid.jpg" width="150px" style="margin-top:-10px;margin-left:150px">
                        <div class="part-11">
                            <p>An OTP is send to your email</p>
                        </div>
                        <div class="part-2">
                            <input type="text" id="check" name="check"  style="width: 350px;font-size: medium;height:30px;border:1px solid black;;">
                        </div>
                        <div class="button-part">
                            <a href="passwordSet.php"><button  id="button" class="button">Begin</button></a>
                        </div>
                    </div>
                </div>
                <div id="parrt1"> 
                    <div  class="alert alert-danger" role="alert">
                        A simple danger alert—check it out!
                    </div>
                </div>
            </div>
        </div>
        </form>
    </body>
    
    <script type="text/javascript">

    document.getElementById("button").onclick=function(){
            
            var otp=String(<?php echo $_SESSION["otp"] ?>);
            var otp1=String(document.getElementById("check").value);
        
            
            function string(a,b){
                var say=false;
                var count=0;
                for(var i=0;i<4;i++){
                    if(a[i]==b[i]){
                    count+=1;
                    }
                }
                if(count>3){
                    say=true;
                }
                else{
                    say=false;
                }
                return say;
            };
            if(otp1.length>0){
                if(string(otp,otp1)==true){
                    alert("OTP is correct");
                    
                }
                else{
                    alert("OTP is wrong");
                }
            }
            else{
                alert("Enter the OTP");
            }
    }
            

    </script>

</html>