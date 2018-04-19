<!doctype html>
<html>
<head>
  <title>Virginia Rifle And Pistl Club</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/png" href="images/logoblk.png" style="border-radius: 50%;">
</head>

<body>
	<div class="container-fluid" style="background-color: #053582; height: 75px;">
    <div align="center" style="width: 100%">
    <img class="float-left" src="images/logoblk.png" width="60" height="60" style="border-radius: 50%; margin-top: 7px;"/>
    <h1 style="color: white; padding-top: 10px;">Virginia Rifle and Pistol Club</h1>
  </div>
</div>
<?php
//configuration
include('connect.php');

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
		if(!empty($data)){
			$data = trim($data);
			$data = stripslashes($data);
			$pattern = "/[a-zA-Z]{3,30}/";
			if(preg_match($pattern, $data)){
				return $data;
			}
			else{
				//echo "Enter a valid $field<br/>";
				$fnameError = "Enter a valid $field<br/>";
				$ErrCount++;
			}
		}
	}
	
	function validLastName($data, $field){
		global $ErrCount;
		global $lnameError;
		if(!empty($data)){
			$data = trim($data);
			$data = stripslashes($data);
			$pattern = "/^[a-zA-Z '.-]*$/";
			if(preg_match($pattern, $data)){
				return $data;
			}
			else{
				//echo "Enter a valid $field<br/>";
				$lnameError = "Enter a valid $field<br/>";
				$ErrCount++;
			}
		}
	}

	function validAddress($data, $field){
		global $ErrCount;
		global $addressError;
		if(!empty($data)){
			$data = trim($data);
			$data = stripslashes($data);
			$pattern = "/[A-Za-z0-9'\.\-\s\,]/";
			if(preg_match($pattern, $data)){
				return $data;
			}
			else{
				//echo "$field is not in the correct format<br/>";
				$addressError = "$field is not in the correct format.<br/>";
				$ErrCount++;
			}
		}
	}
	
	function validCity($data, $field){
		global $ErrCount;
		global $cityError;
		if(!empty($data)){
			$data = trim($data);
			$data = stripslashes($data);
			$pattern = "/^[a-zA-Z '.-]*$/";
			if(preg_match($pattern, $data)){
				return $data;
			}
			else{
				//echo "$field is not in the correct format<br/>";
				$cityError = "$field is not in the correct format<br/>";
				$ErrCount++;
			}
		}
	}
	
	function validState($data, $field){
		global $ErrCount;
		global $stateError;
		if(!empty($data)){
			$data = trim($data);
			$data = stripslashes($data);
			$pattern = "/^[A-Z]{2}$/";
			if(preg_match($pattern, $data)){
				return $data;
			}
			else{
				//echo "$field is not in the correct format<br/>";
				$stateError = "$field must use capital abbreviation<br/>";
				$ErrCount++;
			}
		}
	}
	
	function validZip($data, $field){
		global $ErrCount;
		global $zipError;
		if(!empty($data)){
			$data = trim($data);
			$data = stripslashes($data);
			$pattern = "/[0-9]{5}/";
			if(preg_match($pattern, $data)){
				return $data;
			}
			else{
				//echo "$field is not in the correct format<br/>";
				$zipError = "$field must be 5-digits long<br/>";
				$ErrCount++;
			}
		}
	}

	function validEmail($data, $field){
		global $ErrCount;
		global $emailError;
		if(!empty($data)){
			$data = trim($data);
			$data = stripslashes($data);
			$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[_a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/i";
			if(preg_match($pattern, $data)){
				return $data;
			}
			else{
				//echo "Enter the valid $field<br/>";
				$emailError = "Enter the valid $field<br/>";
				$ErrCount++;
			}
		}
	}

	function validPhone($data, $field){
		global $ErrCount;
		global $phoneError;
		if(!empty($data)){
			$data = trim($data);
			$data = stripslashes($data);
			$pattern = "/\d{3}-\d{3}-\d{4}/";
			if(preg_match($pattern, $data)){
				return $data;
			}
			else{
				//echo "Enter the $field of format: ###-###-####<br/>";
				$phoneError = "Enter the $field of format: ###-###-####<br/>";
				$ErrCount++;
			}
		}
	}
	
	
	
	function validPayDate($data, $field){
		global $ErrCount;
		global $payError;
		if(!empty($data)){
			$data = trim($data);
			$data = stripslashes($data);
			$pattern = "/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/";
			if(preg_match($pattern, $data)){
				return $data;
			}
			else{
				//echo "Enter the $field of format: YYYY-MM-DD or YYYY/MM/DD<br/>";
				$payError = "Enter the $field of format: YYYY-MM-DD or YYYY/MM/DD<br/>";
				$ErrCount++;
			}
		}
	}
	
	function validNra($data, $field){
		global $ErrCount;
		global $nraError;
		if(!empty($data)){
			$data = trim($data);
			$data = stripslashes($data);
			$pattern = "/^[0-9]{9}$/";
			if(preg_match($pattern, $data)){
				return $data;
			}
			else{
				//echo "Enter a 9-digit $field<br/>";
				$nraError = "Enter a 9-digit $field<br/>";
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
	<form method='post' action='update.php'>
	
		<h3>Edit Member</h3>
		<p class='text-danger'><?php echo $ErrCount ?> error(s), please go back and re-fill the form below.</p>
			<input type='hidden' name='memids' value='<?php echo $id ?>' />
			<div class="form-group form-row">
				<label class="col-md-2" for="fname">First Name:</label>
				<input class="col-md-2" type='text' name='f_name' placeholder='First Name' required value='<?php echo $firstName ?>'>
				<p class='form-control-static text-danger'>&nbsp;<?php echo $fnameError ?></p>				
			</div>
			<div class="form-group form-row">
				<label class="col-md-2" for="lname">Last Name:</label>
				<input class="col-md-2" type='text' name='l_name' placeholder='Last Name' required value='<?php echo $lastName ?>'>
				<p class='form-control-static text-danger'>&nbsp;<?php echo $lnameError ?></p>
			</div>
			<div class="form-group form-row">
				<label class="col-md-2" for="address">Address:</label>
				<input class="col-md-2" type='text' name='e_address' placeholder='Address' required value='<?php echo $address ?>'>
				<p class='form-control-static text-danger'>&nbsp;<?php echo $addressError ?></p>
			</div>
			<div class="form-group form-row">
				<label class="col-md-2" for="city">City:</label>
				<input class="col-md-2" type='text' name='e_city' placeholder='City' required value='<?php echo $city ?>'>
				<p class='form-control-static text-danger'>&nbsp;<?php echo $cityError ?></p>
			</div>
			<div class="form-group form-row">
				<label class="col-md-2" for="state">State:</label>
				<input class="col-md-2" type='text' name='e_state' placeholder='State' required value='<?php echo $state ?>'>
				<p class='form-control-static text-danger'>&nbsp;<?php echo $stateError ?></p>
			</div>
			<div class="form-group form-row">
				<label class="col-md-2" for="zip">Zip Code:</label>
				<input class="col-md-2" type='text' name='e_zip' placeholder='Zip Code' required value='<?php echo $zip ?>'>
				<p class='form-control-static text-danger'>&nbsp;<?php echo $zipError ?></p>
			</div>
			<div class="form-group form-row">
				<label class="col-md-2" for="email">Email:</label>
				<input class="col-md-2" type='text' name='e_email' placeholder='Email' required value='<?php echo $email ?>' >
				<p class='form-control-static text-danger'>&nbsp;<?php echo $emailError ?></p>
			</div>
			<div class="form-group form-row">
				<label class="col-md-2" for="phone">Phone #:</label>
				<input class="col-md-2" type='text' name='e_phone' placeholder='Phone #' required value='<?php echo $phone ?>'>
				<p class='form-control-static text-danger'>&nbsp;<?php echo $phoneError ?></p>
			</div>
			<div class="form-group form-row">
				<label class="col-md-2" for="status">Status:</label>
				<select class="col-md-2" name='e_status' required>
				  <option value=''>Select Status</option>
				  <option <?php if ($status == 'Active') { ?>selected="true" <?php }; ?> value='Active'>Active</option>
				  <option <?php if ($status == 'Inactive') { ?>selected="true" <?php }; ?> value='Inactive'>Inactive</option>
				</select>
			</div>
			<div class="form-group form-row">
				<label class="col-md-2" for="payment">Paymet Date:</label>
				<input class="col-md-2" type='date' name='e_payment' required style='width: 180px;' value='<?php echo $payment ?>'>
			</div>
			<div class="form-group form-row">
				<label class="col-md-2" for="nra">NRA #:</label>
				<input class="col-md-2" type='text' name='e_nra' placeholder='NRA #' required value='<?php echo $nraNumber ?>'>
				<p class='form-control-static text-danger'>&nbsp;<?php echo $nraError ?></p>
			</div>
		<button class='btn btn-link'>Save</button></label>
		<button class='btn btn-link' align='center'><a href='adminhome.php?page=1'>View Members</a></button><br/>

	</form>
	</div>
<?php;
}
else{
	//query
$sql = "UPDATE members
	SET fname=?, lname=?, address=?, city=?, state=?, zip=?, email=?, phone=?, status=?, payment=?, nra=?
	WHERE id=?";
// '?' Question mark represents "Paramiterized Query".

$q = $db->prepare($sql);
$q->execute(array($firstName,$lastName,$address,$city,$state,$zip,$email,$phone,$status,$payment,$nraNumber,$id));
header("location: adminhome.php?page=1");
	?>
	<script type="text/javascript">
    function pageRedirect() {
        window.location.replace("adminhome.php?page=1");
    }      
    setTimeout("pageRedirect()", 5000);
</script>
<?php }


?>
