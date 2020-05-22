<?php

session_start(); 
$servername = "shareddb-u.hosting.stackcp.net";
$username = "DBMSPROJECT-31333374d5";
$password = "DBMSPROJECT@";
$con=mysqli_connect($servername,$username,$password,"DBMSPROJECT-31333374d5");




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
    .flex-container {
      display: flex;
      flex-wrap: wrap;
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
              <li class="nav-item active">
                <a class="nav-link" href="AllCodes.php">All Repository <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="About_.php">About </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="Setting.php">Settings </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      More
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Log out</a>
                    </div>
                  </li>
              </ul>
            </div>
        </nav>
        <div class="d-flex justify-content-center" >
            <div class="alert" style="width:800px;" role="alert">
                <h3 class="alert-heading" style="text-align:center">All Repository</h3>
                <hr>
                <p class="mb-0"></p>
            </div>
            
        </div>   
      <div class="d-flex justify-content-center" style="margin-top:-20px">
        <form class="form-inline" method="post">
          <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search" style="width:500px">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        </div>
        <div class="d-flex justify-content-center flex-container" style="margin:10px">
        <?php
          if(isset($_POST["search"])){
            $name=$_POST["search"];
            $result=mysqli_query($con,"SELECT title from datatable where password='".$_SESSION["password"]."' and title like '%$name%'  ");
            if(mysqli_num_rows($result)>0){
              while($row=mysqli_fetch_array($result)){
                echo "<a href='Dash-View.php?title={$row["title"]}'><div class='alert alert-dark ' style='margin:10px;width:280px;'  role='alert' id='haina'>
                                    {$row["title"]}
                                    </div></a>";
  
              }
          }
          else{
            echo '<div class="alert alert-danger" role="alert">
            No data Found!
          </div>';
          }
          }

        ?>
        </div>
        <div class="d-flex justify-content-center" >
            <div class="alert" style="width:800px;" role="alert">
                <h3 class="alert-heading" style="text-align:center"></h3>
                <hr>
                <p class="mb-0"></p>
            </div>
            
        </div>   
        <div class="d-flex justify-content-center flex-container"  style="margin-top:10px;text-align:center">
        <?php
          
            $result1=mysqli_query($con,"SELECT title from datatable where password='".$_SESSION["password"]."' and email='".$_SESSION["email"]."' ");
            while($row1=mysqli_fetch_array($result1)){
            
              echo "<a href='Dash-View.php?title={$row1["title"]}'><div class='alert alert-dark ' style='margin:10px;width:280px;'  role='alert' id='haina'>
              {$row1["title"]}
              </div></a>";
            }
          

        ?>
        </div>
        

        
      
    </body>
</html>