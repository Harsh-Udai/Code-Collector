<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome</title>
	<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<style type="text/css"> 
	.nav-item{
		margin-left: 20px;
	}
	body{
        background-image: url(pattern3.png);
	
    }  
	.text{
		text-align:center;
		padding-top:50px;
		font-family: 'Balsamiq Sans', cursive;
		font-size:400%
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
			<li class="nav-item active">
			  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			</li>
			
			<li class="nav-item">
			  <a class="nav-link" href="Signup.php">Signup</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="Signin.php">Login</a>
			  </li>
			<li class="nav-item">
				<a class="nav-link" href="Verification.php">Verification</a>
			  </li>
			<li class="nav-item">
				<a class="nav-link" href="About.php">About</a>
			  </li>
		  </ul>
		</div>
	  </nav>
	  <div class="text">
	  	<p>Get back to Code!!</p>
		<p>Store and manage your <span style="color:orange">Codes</span> at one place.</p>
	  </div>
	  <div class="d-flex justify-content-center"> 
			<div class="jumbotron" style="width:800px;text-align:center">
				<h1 class="display-4">Hello, Coders!</h1>
				<p class="lead">Happy to see you here.</p>
				<hr class="my-4">
				<p>Use this platform to make your personal code room.</p>
				<a class="btn btn-primary btn-lg" href="Signup.php" role="button">Sign up</a>
			</div>
		</div>
		<div class="d-flex justify-content-center">
		<div  style="margin-top:100px;margin-bottom:50px;width:700px;height:400px" >
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
					<img src="wall1.jpg" class="d-block w-100" alt="..." height="400px">
					</div>
					<div class="carousel-item">
					<img src="wall.jpg" class="d-block w-100" alt="..." height="400px">
					</div>
					<div class="carousel-item">
					<img src="wall2.jpg" class="d-block w-100" alt="..." height="400px">
					</div>
					<div class="carousel-item">
					<img src="img22.png" class="d-block w-100" alt="..." height="400px">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		</div>
		
</body>
</html>
