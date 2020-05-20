<?php
session_start(); 
$servername = "localhost";
$username = "root";
$password = "";
$con=mysqli_connect($servername,$username,$password,"DBMS");


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
    body{
        background-image: url(pattern.png);
    }  
    .horizontal-line{
       
        float:right;
        margin: 40px;
    }
    .rpo{
        font-size: 300%;
        font-family: 'Jost', sans-serif;
        margin: 30px;
        margin-left:100px;
    }
    .search{
        margin: 30px;
        margin-left: 80px;
    }
    .card-setter{
        margin-left: 525px;
        margin-top: 40px;
    }
    .report{
      margin-top:-450px;
      position:absolute;
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
                  <li class="nav-item dropdown ">
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
        <div>
        </div>
            
        <div>
            <div class="horizontal-line">
                <div>
                  <div class="alert alert-primary" style="width:350px;text-align: center;background-color:#2980B9;color:white" role="alert">
                          Try our new Features!!
                  </div>
                  <div class="alert alert-success" style="width:350px;"  role="alert">
                      <h4 class="alert-heading">Code Player</h4>
                      <p>Compile your HTML, CSS and JAVASCRIPT Codes here.</p>
                      <hr>
                      <p class="mb-0"><a href="CodePlayer.php" class="btn btn-success" style="width:100px">Execute</a></p>
                  </div>
                </div>
                <div class="alert alert-primary" style="width:350px;text-align: center;margin-top: 60px;" role="alert">
                    Recently used Codes
                </div>
                <div>
                <?php
                  $result=mysqli_query($con,"SELECT counter FROM datatable where email='".$_SESSION["email"]."' and password='".$_SESSION["password"]."' ");
                  $max=0;
                  while($row=mysqli_fetch_array($result)){
                      
                      if($max<$row["counter"]){
                          $max=$row["counter"];
                      }
                  }
                  $found=mysqli_query($con,"SELECT title FROM datatable where counter='".$max."' and password='".$_SESSION["password"]."' ");
                  if($max>0){
                    if($row1=mysqli_fetch_array($found)){
                      echo "<a href='Dash-View.php?title={$row1["title"]}'><div class='alert alert-dark'  role='alert' id='haina'>
                                  {$row1["title"]}
                                  </div></a>";
                  }
                  if($row1=mysqli_fetch_array($found)){
                    echo "<a href='Dash-View.php?title={$row1["title"]}'><div class='alert alert-dark'  role='alert' id='haina'>
                                {$row1["title"]}
                                </div></a>";
                }
                  }
                else{
                  echo '<div class="alert alert-danger" role="alert">
                    No data Found!
                  </div>';
                }
                  

                ?>
                </div>
          

            </div>
        </div>

          </div>
            <div class="card-setter">
                <div class="card" style="width: 18rem;">
                    <img src="walls.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Code</h5>
                      <p class="card-text">So you can quickly add your codes to our database by just clicking on the Add button.</p>
                      <a href="Dash-Add.php" class="btn btn-success" style="width:100px">Add</a>
                    </div>
                </div>
            </div>
          </div>

          <div class="report">
            <div class="rpo">
                <p>Repositries</p>
            </div>
            <div class="search" style="width:280px;margin-top:-20px">
                <div class='alert alert-success' style="text-align:center"  role='alert' id='haina' >
                Recently Add Codes
                </div>
                <div style="width:280px;margin-top:10px" id='roller' value="<?php $string=null ?>">
                      <?php 
                      $result=mysqli_query($con,"SELECT title FROM datatable where email='".$_SESSION["email"]."' and password='".$_SESSION["password"]."' ORDER BY title DESC ");
                      $count=0;
                      if($row= mysqli_fetch_array($result)){
                        echo "<a href='Dash-View.php?title={$row["title"]}'><div class='alert alert-dark'  role='alert'>
                                  {$row["title"]}
                            </div></a>";
                        $count=$count+1;
                        if(gettype($row)=='array'){
                          if($count<5){
                            while($row = (mysqli_fetch_array($result)))
                            {
                              echo "<a href='Dash-View.php?title={$row["title"]}'><div class='alert alert-dark'  role='alert' id='haina'>
                                  {$row["title"]}
                                  </div></a>";
                                  $count=$count+1;
                                  if($count==5){
                                    echo '<a href="AllCodes.php" class="btn btn-success" style="width:280px">View all Codes</a>';
                                    break;
                                  }
                            }  
                          }
                          else{
                            echo '<a href="Dash-Add.php" class="btn btn-success" style="width:100px">Add</a>';
                          }
                          
                        }
                        else{
                          echo '<div class="alert alert-danger" role="alert">
                            No data Found!
                          </div>';
                        }
                        
                        
                      }
                      else{
                        echo '<div class="alert alert-danger" role="alert">
                          No data Found!
                        </div>';
                      }
                      
                      ?>
                </div>
              </div>
          </div>        
          <br>
          <br>
          <br>
          <br>
          <BR>
          <br>
          <div>
            <div class="d-flex justify-content-center"> 
            <div class="jumbotron" style="width:800px; padding-top;100px">
              <h1 class="display-4">Hello, <?php 
                  $result=mysqli_query($con,"SELECT name FROM signup1 where email='".$_SESSION["email"]."' and password='".$_SESSION["password"]."' ");
                  if($result){
                      $row=mysqli_fetch_array($result);
                      echo $row[0];
                      
                  }  
                  ?>!</h1>
                    <p class="lead">This is a platfrom to store your codes and manage it.</p>
                    <hr class="my-4">
                    <p>Team Code Collector.</p>
              
            </div>
            </div>
          </div>
        
    </body>
</html>