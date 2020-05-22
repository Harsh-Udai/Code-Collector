<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Codeditor</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">
    </head>
    <style type="text/css">
    body{
        margin: 0px;
        padding: 0px;      
        background-image:url('hhhh.png');
            background-size: 1400px;
            background-repeat: no-repeat; 
    }
    .nav-item{
		margin-left: 20px;
	}
    .text{
        text-align: center;
        
        margin-top:150px;
        
    }
    .text p{
        font-size: 320%;   
        font-family: 'Caveat', cursive;
    }
    .object{
        font-size: 120%;   
        margin-bottom: 30px;
    }
    .button{
        background-color: #28B463;
        color:white;
        text-align: center;
        border:1px solid #28B463;
        padding-left:15px;
        padding-right:15px;
        padding-top:12px;
        padding-bottom:12px;
        font-family: 'Roboto Mono', monospace;
        font-size:100%;
    }
    .button:hover{
        cursor: pointer;
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
              
              <li class="nav-item ">
                <a class="nav-link" href="Signup.php">Signup </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="Signin.php">Login </a>
              </li>
              <li class="nav-item ">
                  <a class="nav-link" href="Verification.php">Verification</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
                </li>
              </ul>
            </div>
            </nav>
        <div>
            <div>
            
            </div>
            <div class="text">
                <p>You have completed your account creation in <br><spam >Code Collector</spam></p>
                <p>Now, Login in</p>
                <div class="object">
                    <a href="Signin.php" style="text-decoration: none; color:#F2F3F4"><button class="button" id="button">Log in</button></a>
                  </div>
            </div>
            
        </div>
    </body>
</html>