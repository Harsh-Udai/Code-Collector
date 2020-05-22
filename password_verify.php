<?php
session_start(); 

$servername = "shareddb-u.hosting.stackcp.net";
$username = "DBMSPROJECT-31333374d5";
$password = "DBMSPROJECT@";
$con=mysqli_connect($servername,$username,$password,"DBMSPROJECT-31333374d5");
function is_upper($str){
    $Upper=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
    $check=false;
    $count_upper=0;
    for($i=0;$i<strlen($str);$i++){
        $temp=$str[$i];
        for($j=0;$j<count($Upper);$j++){
            if($Upper[$j]==$temp){
                $count_upper+=1;
            }
        }
    }
    if($count_upper>=1){
        $check=true;
    }
    else{
        $check=false;
    }
    return $check;
};
function is_lower($str){
    $Lower=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
    $check=false;
    $count_lower=0;
    for($i=0;$i<strlen($str);$i++){
        $temp=$str[$i];
        for($j=0;$j<count($Lower);$j++){
            if($Lower[$j]==$temp){
                $count_lower+=1;
            }
        }
    }
    if($count_lower>=1){
        $check=true;
    }
    else{
        $check=false;
    }
    return $check;
};
function is_digit($str){
    $digit=array("0","1","2","3","4","5","6","7","8","9");
    $count_digit=0;
    $check2=false;
    for($i=0;$i<strlen($str);$i++){
        $temp=$str[$i];
        for($j=0;$j<count($digit);$j++){
            if($digit[$j]==$temp){
                $count_digit+=1;
            }
        }
    }
    if($count_digit>=1){
        $check2=true;
    }
    else{
        $check2=false;
    }
    return $check2;
};
function isPassword($str){
    $final_count=false;
    if(strlen($str)>=8){
        if(is_upper($str)){
            if(is_lower($str)){
                if(is_digit($str)){
                    $final_count=true;
                }
            }
        }
    }
    else{
        $final_count;
    }
    return $final_count;
};
if(isset($_POST["password"])){
    if(isPassword($_POST["password"])){
        $result=mysqli_query($con,"UPDATE signup1 SET Password='".$_POST["password"]."', Verification='Verified' where name='".$_SESSION["name"]."' and email='".$_SESSION["email"]."' ");
        if($result){
            header("Location: Allset.php");
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Codeditor</title>
        <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
        <script type="text/javascript" src="jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    </head>
    <style type="text/css">
    body{
        background-color: #F2F3F4  ;
    }
    .nav-item{
		margin-left: 20px;
	}
	
    .main-box{
        margin-top: -30px;
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
        margin-top: -40px;
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
        margin-left: 39%;
        margin-top: 30px;
        
    }
    .part-3{
        text-align: center;
        font-family: 'Manrope', sans-serif;
    }
    .change:hover{
        text-decoration: underline;
        cursor:pointer;
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
        <form method="post" id="form">
        <div>
            <div>
                <div class="main-box">
                    <div class="box-1">
                        <div class="part-1">
                            <h3>Codeditor</h3>
                            <img src="mid1.jpg" width="120px" style="margin-top:10px;margin-bottom:30px">
                            <p>Now Enter your Password <br> & Join us</p>
                        </div>
                        <div class="part-11">
                            <p></p>
                        </div>
                        <div class="part-2">
                            <input type="text" id="password"  name="password"  style="width: 350px;font-size: medium;height:30px;border:1px solid black;;">
                        </div>
                        <div class="button-part">
                            <a href="#"><button  id="button" class="button">All Set</button></a>
                        </div>
                        
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
         
    <script type="text/javascript">
        document.getElementById("button").onclick=function(){
            var pass=document.getElementById("password").value;
            var Upper=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
    var Lower=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    var digit=[0,1,2,3,4,5,6,7,8,9];
    var count_upper;
    var count_lower;
    var count_digit;  
    
    function is_upper(str){
        var check=false;
        count_upper=0;
        for(var i=0;i<str.length;i++){
            var temp=str[i];
            for(var j=0;j<Upper.length;j++){
                if(Upper[j]==temp){
                    count_upper+=1;
                }
            }
        }
        if(count_upper>=1){
            check=true;
        }
        else{
            check=false;
        }
        return check;
    };
        function is_lower(str){
            var check1=false;
            count_lower=0;
            for(var i=0;i<str.length;i++){
                var temp=str[i];
                for(var j=0;j<Lower.length;j++){
                    if(Lower[j]==temp){
                        count_lower+=1;
                    }
                }
            }
            if(count_lower>=1){
                check1=true;
            }
            else{
                check1=false;
            }
            return check1;
        };
        function is_digit(str){
            count_digit=0;
            var check2=false;
            for(var i=0;i<str.length;i++){
                var temp=str[i];
                for(var j=0;j<digit.length;j++){
                    if(digit[j]==temp){
                        count_digit+=1;
                    }
                }
            }
            if(count_digit>=1){
                check2=true;
            }
            else{
                check2=false;
            }
            return check2;
        };
        function isPassword(str){
            var final_count=false;
            if(str.length>=8){
                if(is_upper(str)){
                    if(is_lower(str)){
                        if(is_digit(str)){
                            final_count=true;
                        }
                    }
                }
            }
            else{
                final_count;
            }
            return final_count;
        };
            if(isPassword(pass)){
                alert("Your Password is Set!!");
            }
            else{
                    alert("Your Password must be 8 Character minimum & consist of Uppercase, Lowercase & Digit");
            }
    }    



    </script>
</body>
</html>