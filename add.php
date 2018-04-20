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
</head>

<body>
	<div class="container-fluid" style="background-color: #053582; height: 75px;">
    <div align="center" style="width: 100%">
	<img class="float-left" src="images/logoblk.png" width="60" height="60" style="border-radius: 50%; margin-top: 7px;"/>
    <h1 style="color: white; padding-top: 10px;">Virginia Rifle and Pistol Club</h1>
  </div>
</div>

<div class="container" align="center">
	<form method="post" action="verify.php" style="text-decoration: none;">
	
		<h3 style='margin-top: 15px; margin-bottom: 15px;'>Add a Member</h3>
		<div class="form-row justify-content-center">
			<div class="col-md-3 mb-3">
			  <label for="validationServer01">First name</label>
			  <input type="text" <?php echo ($fnameValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="f_name" placeholder="First name" value="<?php echo $firstName ?>" required>
			  <?php echo $fnameError ?>
			</div>
			<div class="col-md-3 mb-3">
			  <label for="validationServer02">Last name</label>
			  <input type="text" <?php echo ($lnameValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="l_name" placeholder="Last name" value="<?php echo $lastName ?>" required>
			  <?php echo $lnameError ?>
			</div>
		  </div>			
		  <div class="form-row justify-content-center">
			  <div class="col-md-2 mb-3">
				  <label for="validationServer02">Address</label>
				  <input type="text" <?php echo ($addressValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="e_address" placeholder="Address" value="<?php echo $address ?>" required>
				  <?php echo $addressError ?>
				</div>
			<div class="col-md-2 mb-3">
			  <label for="validationServer03">City</label>
			  <input type="text" <?php echo ($cityValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="e_city" placeholder="City" value="<?php echo $city ?>" required>
			  <?php echo $cityError ?>
			</div>
			<div class="col-md-1 mb-3">
			  <label for="validationServer04">State</label>
			  <input type="text" <?php echo ($stateValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="e_state" placeholder="State" value="<?php echo $state ?>" required>
			  <?php echo $stateError ?>
			</div>
			<div class="col-md-1 mb-3">
			  <label for="validationServer05">Zip</label>
			  <input type="text" <?php echo ($zipValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="e_zip" placeholder="Zip" value="<?php echo $zip ?>" required>
			  <?php echo $zipError ?>
			</div>
		  </div>
		  <div class="form-row justify-content-center">
			<div class="col-md-4 mb-3">
			  <label for="validationServer04">Email</label>
			  <input type="text" <?php echo ($emailValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="e_email" id="validationServer04" placeholder="Email" value="<?php echo $email ?>" required>
			  <?php echo $emailError ?>
			</div>
			<div class="col-md-2 mb-3">
			  <label for="validationServer05">Phone</label>
			  <input type="text" <?php echo ($phoneValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="e_phone" placeholder="###-###-####" value="<?php echo $phone ?>" required>
			  <?php echo $phoneError ?>
			</div>
		  </div>
		  <div class="form-row  justify-content-center">
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
			  <input type="date" <?php echo ($payValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="e_payment" placeholder="Payment" value="<?php echo $payment ?>" required>
			  <?php echo $payError ?>
			</div>
			<div class="col-md-2 mb-3">
			  <label for="validationServer05">NRA Number</label>
			  <input type="text" <?php echo ($nraValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="e_nra" placeholder="NRA #" value="<?php echo $nraNumber ?>" required>
			  <?php echo $nraError ?>
			</div>
		</div>
		<button class='btn btn-outline-primary' type='submit' name='addbtn'>Add Member</button>
		<button class='btn btn-outline-primary' align='center' onclick="window.location.href='adminhome.php?page=1'">View Members</button>
	</form>
</div>
</body>
</html>

