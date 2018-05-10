<!doctype html>
<html>
<head>
  <title>Virginia Rifle And Pistol Club</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/png" href="images/logoblk.png">
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>

<body>
	<div class="container-fluid" id="headerdiv">
		<div align="center" id="logodiv">
			<img id="icon" src="images/logoblk.png"/ alt="Logo">
			<h1 id="header">Virginia Rifle and Pistol Club</h1>
	    </div>
	</div>
<div align="center" id="indexdiv">
	<img src="images/logoblk.png" id="indexicon"/>
	<h2 id="logintext">Administrator Login</h2>
	<?php
//Associative array to display 2 types of error message.
	$errors = array(1=>"Invalid username or password, Try again",
				    2=>"Please login to access this area");
//Get the error_id from URL
	$error_id = $_GET['err'];
	if ($error_id == 1){
		echo '<p class="text-danger">'.$errors[$error_id].'</p>';
	}elseif ($error_id == 2){
		echo '<p class="text-danger">'.$errors[$error_id].'</p>';
	}


?>
	<form action="authentication.php" method="post" role="form" class="form-signin">
		<label class="col-form-label" for="username" style="font-size: 24px;">Username</label><input type="text" class="form-control col-md-4" id="username" name="username" placeholder="Username" required autofocus/>
		<label class="col-form-label" for="password" style="font-size: 24px;">Password</label><input type="password" class="form-control col-md-4" id="password" name="password" placeholder="Password" required/>
		<button class="btn btn-lg btn-block" type="submit" style="color: white; background-color: #053582; width: 300px; margin-top: 15px; border: 2px; border-color: black;" name="submit">Sign in</button>
	</form>
</div>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
