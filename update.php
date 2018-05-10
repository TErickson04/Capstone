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
  <link rel="icon" type="image/png" href="images/logoblk.png" >
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>

<body>
	<div class="container-fluid" id="headerdiv">
		<div align="center" id="logodiv">
			<img id="icon" src="images/logoblk.png"/ alt="Logo">
			<h1 id="header">Virginia Rifle and Pistol Club</h1>
	    </div>
	</div>
<?php


//new data
	$id = $_POST['memids'];
	$firstName = $_POST['f_name'];
	$lastName = $_POST['l_name'];
	$address = $_POST['e_address'];
	$city = $_POST['e_city'];
	$state = $_POST['e_state'];
	$zip = $_POST['e_zip'];
	$email = $_POST['e_email'];
	$phone = $_POST['e_phone'];
	$status = $_POST['e_status'];
	$payment = $_POST['e_payment'];
	$nraNumber = $_POST['e_nra'];


function validFirstName($data, $field){
		global $ErrCount;
		global $fnameError;
	    global $fnameValid;
		if(!empty($data)){
			$data = trim($data);
			$data = stripslashes($data);
			$pattern = "/^[a-zA-Z '.-]*$/";
			if(preg_match($pattern, $data)){
				return $data;
				$fnameValid = 0;
			}
			else{
				$fnameError = "<div class='invalid-feedback'>
								 Please enter a valid first name
							   </div>";
				$fnameValid = 1;
				$ErrCount++;
			}
		}
	}

	function validLastName($data, $field){
		global $ErrCount;
		global $lnameError;
		global $lnameValid;
		if(!empty($data)){
			$data = trim($data);
			$data = stripslashes($data);
			$pattern = "/^[a-zA-Z '.-]*$/";
			if(preg_match($pattern, $data)){
				return $data;
				$lnameValid = 0;
			}
			else{
				$lnameError = "<div class='invalid-feedback'>
								 Please enter a valid last name
							   </div>";
				$lnameValid = 1;
				$ErrCount++;
			}
		}
	}

	function validAddress($data, $field){
		global $ErrCount;
		global $addressError;
		global $addressValid;
		if(!empty($data)){
			$data = trim($data);
			$data = stripslashes($data);
			$pattern = "/[A-Za-z0-9'\.\-\s\,]$/";
			if(preg_match($pattern, $data)){
				return $data;
				$addressValid = 0;
			}
			else{
				$addressError = "<div class='invalid-feedback'>
									Please provide a valid address
								  </div>";
				$addressValid = 1;
				$ErrCount++;
			}
		}
	}

	function validCity($data, $field){
		global $ErrCount;
		global $cityError;
		global $cityValid;
		if(!empty($data)){
			$data = trim($data);
			$data = stripslashes($data);
			$pattern = "/^[a-zA-Z '.-]*$/";
			if(preg_match($pattern, $data)){
				return $data;
				$cityValid = 0;
			}
			else{
				$cityError = "<div class='invalid-feedback'>
								Please provide a valid city
							  </div>";
				$cityValid = 1;
				$ErrCount++;
			}
		}
	}

	function validState($data, $field){
		global $ErrCount;
		global $stateError;
		global $stateValid;
		if(!empty($data)){
			$data = trim($data);
			$data = stripslashes($data);
			$pattern = "/^[A-Z]{2}$/";
			if(preg_match($pattern, $data)){
				return $data;
				$stateValid = 0;
			}
			else{
				$stateError = "<div class='invalid-feedback'>
								Please provide a valid state
							  </div>";
				$stateValid = 1;
				$ErrCount++;
			}
		}
	}

	function validZip($data, $field){
		global $ErrCount;
		global $zipError;
		global $zipValid;
		if(!empty($data)){
			$data = trim($data);
			$data = stripslashes($data);
			$pattern = "/^[0-9]{5}$/";
			if(preg_match($pattern, $data)){
				return $data;
				$zipValid = 0;
			}
			else{
				$zipError = "<div class='invalid-feedback'>
								Zip code must be a 5-digit number
							  </div>";
				$zipValid = 1;
				$ErrCount++;
			}
		}
	}

	function validEmail($data, $field){
		global $ErrCount;
		global $emailError;
		global $emailValid;
		if(!empty($data)){
			$data = trim($data);
			$data = stripslashes($data);

			$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[_a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/i";
			if(preg_match($pattern, $data)){
				return $data;
				$emailValid = 0;
			}
			else{
				$emailError = "<div class='invalid-feedback'>
								Please provide a valid email
							  </div>";
				$emailValid = 1;
				$ErrCount++;
			}
		}
	}

	function validPhone($data, $field){
		global $ErrCount;
		global $phoneError;
		global $phoneValid;
		if(!empty($data)){
			$data = trim($data);
			$data = stripslashes($data);
			$pattern = "/\d{3}-\d{3}-\d{4}$/";
			if(preg_match($pattern, $data)){
				return $data;
				$phoneValid = 0;
			}
			else{
				$phoneError = "<div class='invalid-feedback'>
								Phone # must be in ###-###-#### format
							  </div>";
				$phoneValid = 1;
				$ErrCount++;
			}
		}
	}


	function validPayDate($data, $field){
		global $ErrCount;
		global $payError;
		global $payValid;
		global $newDate;
		global $date;
		if(!empty($data)){
			date_default_timezone_set('America/Chicago');
			//$data = trim($data);
			//$data = stripslashes($data);
			$newDate = date($data);
			$date = date('Y-m-d');
			if($date >= $newDate){
				return $data;
				$payValid = 0;
			}
			else{
				$payError = "<div class='invalid-feedback'>
								Please provide a valid payment date
							  </div>";
				$payValid = 1;
				$ErrCount++;
			}
		}
	}

	function validNra($data, $field){
		global $ErrCount;
		global $nraError;
		global $nraValid;
		if(!empty($data)){
			$data = trim($data);
			$data = stripslashes($data);
			$pattern = "/^[0-9]{9}$/";
			if(preg_match($pattern, $data)){
				return $data;
				$nraValid = 0;
			}
			else{
				$nraError = "<div class='invalid-feedback'>
								NRA # must be a 9-digit number
							  </div>";
				$nraValid = 1;
				$ErrCount++;
			}
		}
	}

	$ErrCount = 0;
	$firstName = validFirstName($_POST['f_name'], "First Name");
	$lastName = validLastName($_POST['l_name'], "Last Name");
	$address = validAddress($_POST['e_address'], "Street Address");
	$city = validCity($_POST['e_city'], "City");
	$state = validState($_POST['e_state'], "State");
	$zip = validZip($_POST['e_zip'], "Zip");
	$email = validEmail($_POST['e_email'], "Email ID");
	$phone = validPhone($_POST['e_phone'], "Phone Number");
	$payment = validPayDate($_POST['e_payment'], "Payment Date");
	$nraNumber = validNra($_POST['e_nra'], "NRA Number");

if($ErrCount > 0){
	$id = $_POST['memids'];
	$firstName = $_POST['f_name'];
	$lastName = $_POST['l_name'];
	$address = $_POST['e_address'];
	$city = $_POST['e_city'];
	$state = $_POST['e_state'];
	$zip = $_POST['e_zip'];
	$email = $_POST['e_email'];
	$phone = $_POST['e_phone'];
	$status = $_POST['e_status'];
	$payment = $_POST['e_payment'];
	$nraNumber = $_POST['e_nra'];

	?>
	<div class="container" align="center">
	<h3>Edit Member</h3>
	<form method='post' action='update.php'>
		<p class='text-danger'><?php echo $ErrCount ?> error(s), please go back and re-fill the form below.</p>
			<input type='hidden' name='memids' value='<?php echo $id ?>' />
			<div class="form-row justify-content-center">
			<div class="col-md-3 mb-3">
			  <label for="validationServer01">First name</label>
			  <input type="text" <?php echo ($fnameValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="f_name" placeholder="First name" value="<?php echo $_POST['f_name'] ?>" required>
			  <?php echo $fnameError ?>
			</div>
			<div class="col-md-3 mb-3">
			  <label for="validationServer02">Last name</label>
			  <input type="text" <?php echo ($lnameValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="l_name" placeholder="Last name" value="<?php echo $_POST['l_name'] ?>" required>
			  <?php echo $lnameError ?>
			</div>
		  </div>
		  <div class="form-row justify-content-center">
			  <div class="col-md-2 mb-3">
				  <label for="validationServer02">Address</label>
				  <input type="text" <?php echo ($addressValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="e_address" placeholder="Address" value="<?php echo $_POST['e_address'] ?>" required>
				  <?php echo $addressError ?>
				</div>
			<div class="col-md-2 mb-3">
			  <label for="validationServer03">City</label>
			  <input type="text" <?php echo ($cityValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="e_city" placeholder="City" value="<?php echo $_POST['e_city'] ?>" required>
			  <?php echo $cityError ?>
			</div>
			<div class="col-md-1 mb-0">
			  <label for="validationServer04">State</label>
			  <input type="text" <?php echo ($stateValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="e_state" placeholder="State" value="<?php echo $_POST['e_state'] ?>" required>
			  <?php echo $stateError ?>
			</div>
			<div class="col-md-1 mb-3">
			  <label for="validationServer05">Zip</label>
			  <input type="text" <?php echo ($zipValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="e_zip" placeholder="Zip" value="<?php echo $_POST['e_zip'] ?>" required>
			  <?php echo $zipError ?>
			</div>
		  </div>
		  <div class="form-row justify-content-center">
			<div class="col-md-4 mb-3">
			  <label for="validationServer04">Email</label>
			  <input type="text" <?php echo ($emailValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="e_email" id="validationServer04" placeholder="Email" value="<?php echo $_POST['e_email'] ?>" required>
			  <?php echo $emailError ?>
			</div>
			<div class="col-md-2 mb-3">
			  <label for="validationServer05">Phone</label>
			  <input type="text" <?php echo ($phoneValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="e_phone" placeholder="###-###-####" value="<?php echo $_POST['e_phone'] ?>" required>
			  <?php echo $phoneError ?>
			</div>
		  </div>
		  <div class="form-row justify-content-center">
			<div class="col-md-2 mb-3">
			  <label for="validationServer04">Status</label>
			  <select class="custom-select custom-select-md mb-3 is-valid" name='e_status' required>
				  <option value=''>Select Status</option>
				  <option <?php if ($status == 'Active') { ?>selected="true" <?php }; ?> value='Active'>Active</option>
				  <option <?php if ($status == 'Inactive') { ?>selected="true" <?php }; ?> value='Inactive'>Inactive</option>
				</select>
			</div>

			<div class="col-md-2 mb-3">
			  <label for="validationServer05">Payment Date</label>
			  <input type="date" <?php echo ($payValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="e_payment" placeholder="Payment" value="<?php echo $_POST['e_payment'] ?>" required>
			  <?php echo $payError ?>
			</div>
			<div class="col-md-2 mb-3">
			  <label for="validationServer05">NRA Number</label>
			  <input type="text" <?php echo ($nraValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="e_nra" placeholder="NRA #" value="<?php echo $_POST['e_nra'] ?>" required>
			  <?php echo $nraError ?>
			</div>
		</div>
		<button class="btn btn-outline-primary" type="submit" name="editbtn" value="Save">Save</button>


	</form>
  <button style="margin-top: 5px;" class="btn btn-outline-primary" onclick="window.location.href='adminhome.php?page=1'">View Members</button>
	</div>
<?php;
}
else{

		//configuration
		include('connect.php');
			//query
		$sql = "UPDATE members
			SET fname=?, lname=?, address=?, city=?, state=?, zip=?, email=?, phone=?, status=?, payment=?, nra=?
			WHERE id=?";
		// '?' Question mark represents "Paramiterized Query".

		$q = $db->prepare($sql);
		$q->execute(array($firstName,$lastName,$address,$city,$state,$zip,$email,$phone,$status,$payment,$nraNumber,$id));
		$alert = true;
		if($alert){
				echo "<script type='text/javascript'>window.alert('Member Successfully Edited');window.location.href='adminhome.php?page=1';</script>";

		}


		//header("location: adminhome.php?page=1");
		$this->connection->close();
}


?>
