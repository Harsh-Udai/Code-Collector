<?php
session_start(); 
$servername = "localhost";
$username = "root";
$password = "";
$con=mysqli_connect($servername,$username,$password,"DBMS");

if($_POST){
  if(isset($_POST["title"]) & isset($_POST["data"])){
    $data=mysqli_real_escape_string($con,$_POST["data"]);
    $final=strval($data);
    
    $result=mysqli_query($con,"INSERT INTO datatable(email,password,title,data) values('".$_SESSION["email"]."','".$_SESSION["password"]."','".$_POST["title"]."','".$final."')");
    if($result){
      echo '<script type="text/JavaScript">  
      alert("Your file is created!"); 
      </script>';
    }
    else{
      
    }
  }
  else{
  
  }
}
else{
  
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
              <li class="nav-item active">
                <a class="nav-link" href="Dashboard.php">Dashboard <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="AllCodes.php">All Repository</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="About.php">About</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="Setting.php">Settings </a>
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
                <h3 class="alert-heading">Create a new repository</h3>
                <p>A repository will contain your file.</p>
                <hr>
                <p class="mb-0"></p>
            </div>
            
        </div>    
        <div class="d-flex justify-content-center" style="margin-top: -20px;">
          <input class="form-control" type="text" style="width:750px;" placeholder="<?php 

            $result=mysqli_query($con,"SELECT name FROM signup1 where email='".$_SESSION["email"]."' and password='".$_SESSION["password"]."' ");
            if($result){
                $row=mysqli_fetch_array($result);
                
                echo '@'.$row["name"];
                
            }  
        
              ?>" readonly>
        </div>
        <div>
            <div class="d-flex justify-content-center">
              <div class="form-row" style="margin-top: 10px;">
                <div class="col-md-6 mb-3">
                  <label for="validationServer03">File Name</label>
                  <input type="text" name="title" style="width:750px;" class="form-control " id="validationServer03" required>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Enter or paste your Codes</label>
            <textarea class="form-control" name="data" style="width:750px;" id="exampleFormControlTextarea1" rows="20" required></textarea>
          </div>
        </div>
        <div class="d-flex justify-content-center">
          <button type="submit" style="width:750px;margin-bottom: 50px;" class="btn btn-dark">Submit</button>
        </div>

      </form>      
    </body>
</html>