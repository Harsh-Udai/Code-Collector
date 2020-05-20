
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
              <li class="nav-item active">
                <a class="nav-link" href="About.php">About <span class="sr-only">(current)</span></a>
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
                <h3 class="alert-heading">About</h3>
                <hr>
                <p class="mb-0"></p>
            </div>
            
        </div>   
        <div class="d-flex justify-content-center"> 
        <div class="jumbotron" style="width:800px">
            <h1 class="display-4">Hello !</h1>
            <p class="lead">This is a simple platform to store and manage your codes.</p>
            <hr class="my-4">
            <p>Technical team : Harsh Udai, Yash Rakesh Mishra, Yash Goyal and Varun Rawat.</p>
            
          </div>
        </div>
        
    </body>
</html>