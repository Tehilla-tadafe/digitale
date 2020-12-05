<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Digital-e</title>
	<!DOCTYPE html>
<html>
<head profile="http://localhost/digital-em/image/digital-e4.png">
<link rel="icon" 
      type="image/png" 
      href="http://localhost/digital-em/image/digital-e4.png">

	<style>
		body {font-family: Arial, Helvetica, sans-serif;}
		
		/* Full-width input fields */
		input[type=text], input[type=password] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}
		
		/* Set a style for all buttons */
		/* button {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 100%;
			border-radius: 50px;
		} */
		
		button:hover {
			opacity: 0.8;
		}
		
		/* Extra styles for the cancel button */
		.cancelbtn {
			width: auto;
			padding: 10px 18px;
			background-color: #f44336;
		}
		
		/* Center the image and position the close button */
		.imgcontainer {
			text-align: center;
			margin: 24px 0 12px 0;
			position: relative;
		}
		
		img.avatar {
			width: 40%;
			border-radius: 50%;
		}
		
		.container {
			padding: 16px;
		}
		
		span.psw {
			float: right;
			padding-top: 16px;
		}
		
		/* The Modal (background) */
		.modal {
			display: none; /* Hidden by default */
			position: fixed; /* Stay in place */
			z-index: 1; /* Sit on top */
			left: 0;
			top: 0;
			width: 100%; /* Full width */
			height: 100%; /* Full height */
			overflow: auto; /* Enable scroll if needed */
			background-color: rgb(0,0,0); /* Fallback color */
			background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			padding-top: 60px;
		}
		
		/* Modal Content/Box */
		.modal-content {
			background-color: #fefefe;
			margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
			border: 1px solid #888;
			width: 80%; /* Could be more or less, depending on screen size */
		}
		
		/* The Close Button (x) */
		.close {
			position: absolute;
			right: 25px;
			top: 0;
			color: #000;
			font-size: 35px;
			font-weight: bold;
		}
		
		.close:hover,
		.close:focus {
			color: red;
			cursor: pointer;
		}
		
		/* Add Zoom Animation */
		.animate {
			-webkit-animation: animatezoom 0.6s;
			animation: animatezoom 0.6s
		}
		
		@-webkit-keyframes animatezoom {
			from {-webkit-transform: scale(0)} 
			to {-webkit-transform: scale(1)}
		}
			
		@keyframes animatezoom {
			from {transform: scale(0)} 
			to {transform: scale(1)}
		}
		
		/* Change styles for span and cancel button on extra small screens */
		@media screen and (max-width: 300px) {
			span.psw {
			   display: block;
			   float: none;
			}
			.cancelbtn {
			   width: 100%;
			}
		}
		</style>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
	<link rel="stylesheet" href="./styles/css/bootstrap.min.css">
	<link rel="stylesheet" href="./main-items/w3.css">
</head>

<body id="body">
	<p style="padding: 5px;"></p>
	<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/w3.css">
    <link rel="stylesheet" href="./styles/index.css">
    <title>Digital-e</title>
</head>
<body class="jumbotron" style="height: 10%;">

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light top-nav fixed-top" style="background: linear-gradient(lightblue,grey); height: 13%; width: 97%; text-align: center; left: 15px; border-radius: 40px;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav nav-content">
                    <!-- <img src="./image/DYNASTY LOGO.png" class="img-fluid" alt="" style="height: 70px; width: 70px;"> -->
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="./categories/about.html" target="_blank" style="color: rgba(36, 33, 32, 0.712);">About us</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="./main-items/contact.html" target="_blank" style="color: rgba(36, 33, 32, 0.712);">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./main-items/copy/copyright.html" target="_blank" style="color: rgba(36, 33, 32, 0.712);">Copyrights</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="./categories/sign_up.html" target="_blank" style="color: rgba(36, 33, 32, 0.712);">tutorials</a>
                    </li> -->
                    <li class="nav-item">
					<a class="nav-link" href="#" id="btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <h1 class="wel">Welcome to Digital-e</h1>

    <div class="row">
        <div class="col" id="col-1">
            <span><h2 class="h2">Digital-e</h2>
                <h2 class="h2-1">E-learning made easy.
                </h2>
            </span>
            <h6 style="font-weight: 700;">
                <li style="list-style-type: none;">Real-time classes are Offered online by experienced teachers & schools</li>
                <li style="list-style-type: none;">Real-time interactive tutorial sessions with teachers</li>
				<li style="list-style-type: none;"> made easy thanks to Digital-e app.</li>
            </h6>
        </div>
        <div class="col">
            <p style="padding: 20px;"></p>
            <img src="./image/Digital-e4.png" style="border-radius: 40px; position: absolute;" class="float-left digi">
        </div>
    </div>

    <p style="padding: 8px;"></p>

    <!--Second row-->
    <div class="row">
        <div class="col" id="col">
           <img src="./main-items/Kids learning.jpg" id="kids" style="width: 70%; border-radius: 20px;" class="float-left">
        </div>
        <div class="col">
            
            <span><h2 class="h2">Digital-e app offers</h2>
                <h2 class="h2-1"></h2>
            </span>
            <h6 style="font-weight: 700;">
                <li style="list-style-type: none;">1. Fast & reliable E-books & video tutorials</li>
                <li style="list-style-type: none;">2. Real-time online lectures with school teachers on the app</li>
                <li style="list-style-type: none;">3. End to end secured</li>
				<li style="list-style-type: none;">4. Live video call+</li>
				<li style="list-style-type: none;">5. Remote access</li>
				<li style="list-style-type: none;">6. Large & secured cloud database</li>
				<li style="list-style-type: none;">7. Study follow up</li>
				<li style="list-style-type: none;">8. School management system</li>
            </h6>
            
        </div>
    </div>
    <!--end-->

    <p style="padding: 7px;"></p>

	<!--col & card -->
	<h5 style="color: rgb(0, 87, 87); text-align: center;">Why Digital-e app</h5>
    <div class="row text-white container-1 rounded">
        <div class="col-lg-6 p-lg-5 first-col" style="background: linear-gradient(rgb(180, 167, 167),lightblue);">
			<ul style="color: black; font-weight: 600;">
				<li style="list-style-type: none; text-align: center;">Digital-e app is built to bridge the interactive gap for conventional school system between teachers, student & parents, considering its unique features of remote access & funtime features, associated educational apps.</li>
			 </ul>
        </div>
        <!--Second col-->
		<!-- <div class="col-lg-6 p-lg-5 second-col" style="color: black; background: linear-gradient(rgb(180, 167, 167),lightblue); width: 90%;">
			<h4 style="color: darkslategray; font-weight: 900;"><p><b>Now as we welcome the new Digital-e</b></p></h4>
			<img src="./image/Digital-e4.png" style="width: 250px;">
		</div> -->
    </div>
    <!--end-->

	<!--modal login-->
	<div id="id01" class="modal">
  <div class="imgcontainer">
  <b><span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span></b>
</div>

<div id="content">
	<div class="header" style="background: #5F9EA0; color: white;">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn" style="border-radius: 50px; width: 40%; background: linear-gradient(darkcyan,wheat); ">Login</button>
		</div>
		<p>
			Not yet a member? <b><a href="register.php" style="text-decoration: underline;" class="btn">Sign up</a></b>
		</p>
	</form>
</div>
</div>
	<!--end-->

    <p style="padding: 2%;"></p>

      <!--external links-->
      <h4 style="text-align: center; color: rgba(58, 105, 158, 0.883); font-weight: 800;">Our social media handles</h4>
      <ul style="text-align: center;">
          <li class="fa fa-instagram-official btn w3-orange" style="width: 20%; border-radius: 40px; background: linear-gradient(purple,orange); list-style-type: none;">
              <a href="https://www.ig.me/digital-e" style="color: whitesmoke;">Instagram</a>
          </li>
          <li class="fa fa-facebook-official btn btn-primary" style="width: 16%; border-radius: 40px; list-style-type: none;">
              <a href="https://www.facebook.com/digital-e" style="color: whitesmoke;">Facebook</a>
          </li>
          <li class="fa fa-twitter-official btn btn-primary" style="width: 16%; border-radius: 40px; list-style-type: none;">
              <a href="https://www.twitter.com/digital-e" style="color: whitesmoke;">Twitter</a>
          </li>
      </ul>
      <!--end-->

    <footer style="height: 20%; background: linear-gradient(rgb(180, 167, 167),lightblue); border-radius: 25%;">
		<img src="./image/DYNASTY LOGO.png" width="100" height="100" class="img-fluid">
		<img src="./main-items/Galatians logo-1.png" width="100" height="100" class="img-fluid">
        <!-- <img src="./Galatians logo-1.png" width="200" height="200" class="img-fluid" alt=""> -->
        <h4 style="color: rgb(149, 22, 22);">&copy; 2020 Dynasty corp. &reg;</h4>
        <!-- <p style="padding: 5px;"></p> -->
    </footer>

	<!--modal js-->
	<script>
	// Get the modal
	var modal = document.getElementById('id01');

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
	</script>
	<!--end-->

           <!-- <p style="padding: 10%;"></p> -->
           <script src="./asset/js/jquery.js"></script>
           <script src="./asset/bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>

<style>
	#btn {
		border-radius: 50px;
		height: 60px;
		width: 400px;
	}
</style>