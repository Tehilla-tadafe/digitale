<?php 
    include('functions.php');
    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html>
<head profile="http://www.w3.org/2005/10/profile">
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
		button {
			background-color: #4CAF50;
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

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Logged in</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
	<link rel="stylesheet" href="./styles/css/bootstrap.min.css">
</head>

<body id="body">

	<p style="padding: 5px;"></p>

			<button  id="btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Access main page</button>


		<div id="id01" class="modal">
		
		<!-- <form class="modal-content animate" action="https://www.w3schools.com/action_page.php"></form> -->
			<div class="imgcontainer">
			<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			</div>

			<div id="content">
				<div class="header">
					<h2>Logged in</h2>
				</div>
				<div class="content">
					<!-- notification message -->
					<?php if (isset($_SESSION['success'])) : ?>
						<div class="error success" >
							<h3>
								<?php 
									echo $_SESSION['success']; 
									unset($_SESSION['success']);
								?>
							</h3>
						</div>
					<?php endif ?>
					<!-- logged in user information -->
					<div class="profile_info">
						<img src="./image/Digital-e4.png" style="border-radius: 100px; width: 90px; height: 70px;">
			
						<div>
							<?php  if (isset($_SESSION['user'])) : ?>
								<strong><?php echo $_SESSION['user']['username']; ?></strong>
			
								<p style="padding: 1px;"></p>
								<small> 
									<br>
									<a href="./main-items/qr.html" style="color: whitesmoke; width: 110%; height: 19%; text-decoration: none;" class="btn btn-secondary">Click to access the main page</a>
								</small>
			
								
			
							<?php endif ?>
						</div>
					</div>
				</div>
			
				<p style="padding: 2%;">
					<a href="./SchoolManagementSMSPHP/schooladmin/admin/index.php" target="_blank" id="admin" class="btn btn-primary" style="text-decoration: none; text-align: center; width: 18%;">Admin panel</a>
				</p>
			</div>
			<div>
				<h1 style="text-shadow: 1%; left: 10%;  position: fixed; align-items: baseline;right: 300px; border-radius: 50px;width: 30%;color: wheat;"><b>Digital-e</b></h1>
			</div>
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
	  align-items: baseline;
	   /* left: 25%;  */
	  right: 170px; 
	  background: darkblue;
	  border-radius: 50px;
	  /* float: left; */
	  width: 40%;
	  background-color: gold;
	  color: black;
	  
  }

  #body{
		  background: url(./image/digital-e-gov.png);
		  background-size: 100vw 100vh;
	  }

	  .container{
		  width: 40%;
	  }

	  #admin{
		  position: fixed; 
	  align-items: baseline;
	  /* left: 5%; */
	   right: 170px; 
	  /* background: darkblue; */
	  border-radius: 50px;
	  /* float: right; */
	  width: 10%;
	  /* background-color: gold; */
	  color: whitesmoke;
	  }
</style>