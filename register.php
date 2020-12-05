<?php include('functions.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registation</title>
	<link rel="stylesheet" href="./style.css">
	<link rel="stylesheet" href="./styles/css/bootstrap.min.css">

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
		button {
			/* background-color: #4CAF50; */
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 100%;
		}
		
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

</head>
<body style="background-image: url(./image/bridge.jpg);">

<button  id="btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto; top: 0;">Register</button>


		<div id="id01" class="modal" style="top: 0px;">
		
			<!-- <form class="modal-content animate" action="https://www.w3schools.com/action_page.php"></form> -->
			<div class="imgcontainer">
			<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			</div>
			<div class="header" style="background: #5F9EA0; color: white;">
				<h4 style="font-weight: 800;">Register</h4>
			</div>
		  <p></p>
			<!-- <p style="padding: 0.5px;"></p> -->
			<form method="post" action="register.php">
				<?php echo display_error(); ?>
				<div class="input-group">
					<label>Username</label>
					<input type="text" name="username" value="<?php echo $username; ?>">
				</div>
				<div class="input-group">
					<label>Email</label>
					<input type="email" name="email" value="<?php echo $email; ?>">
				</div>
				<div class="input-group">
					<label>Password</label>
					<input type="password" name="password_1">
				</div>
				<div class="input-group">
					<label>Confirm password</label>
					<input type="password" name="password_2">
				</div> 
				<div class="input-group">
					<button type="submit" class="btn btn-warning" name="register_btn" style="width: 50%; border-radius: 50px;">Register</button>
				</div>
				<p>
					Already a member? <a href="login.php" class="btn btn-danger" style="width: 40%; border-radius: 10px;">Sign in</a>
				</p>
				
			</form>
			</div>
</body>
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



</body>
</html>

<style>
	#btn{
       
	   position: fixed; 
	  /* align-items: baseline; */
	   /* left: 25%;  */
	  right: 170px; 
	  background: darkblue;
	  border-radius: 30px;
	  /* float: left; */
	  width: 40%;
	  background-color: gold;
	  color: black;
	  /* padding: 15px 20px; */
	  
  } 
</style>