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
		<div class="form-group form-row" align="right">
			<label class="col-md-2" for="fname">First Name:</label>
			<input class="col-md-2" type='text' name='f_name' placeholder='First Name' required>
			<label class="col-md-2" for="lname">Last Name:</label>
			<input class="col-md-2" type='text' name='l_name' placeholder='Last Name' required>				
		</div>
		<div class="form-group form-row" align="right">
			<label class="col-md-2" for="address">Address:</label>
			<input class="col-md-2" type='text' name='e_address' placeholder='Address' required>
			<label class="col-md-2" for="city">City:</label>
			<input class="col-md-2" type='text' name='e_city' placeholder='City' required>
		</div>
		<div class="form-group form-row" align="right">
			<label class="col-md-2" for="state">State:</label>
			<input class="col-md-2" type='text' name='e_state' placeholder='State' required>
			<label class="col-md-2" for="zip">Zip Code:</label>
			<input class="col-md-2" type='text' name='e_zip' placeholder='Zip Code' required>
		</div>
		<div class="form-group form-row"  align="right">
			<label class="col-md-2" for="email">Email:</label>
			<input class="col-md-2" type='email' name='e_email' placeholder='Email' required>
			<label class="col-md-2" for="phone">Phone #:</label>
			<input class="col-md-2" type='tel' name='e_phone' placeholder='Phone #' required>
		</div>
		<div class="form-group form-row"  align="right">
			<label class="col-md-2" for="status">Status:</label>
			<select class="col-md-2" name='e_status' required>
			  <option value=''>Select Status</option>
			  <option value='Active'>Active</option>
			  <option value='Inactive'>Inactive</option>
			</select>
			<label class="col-md-2" for="payment">Paymet Date:</label>
			<input class="col-md-2" type='date' name='e_payment' required>
		</div>
		<div class="form-group form-row" align="right">
			<label class="col-md-2" for="nra">NRA #:</label>
			<input class="col-md-2" type='text' name='e_nra' placeholder='NRA #' required>
		</div>
		<button class='btn btn-link btn-light' type='submit' name='addbtn'>Add Member</button></td>
		<button class='btn btn-link'><a href='adminhome.php?page=1'>View Members</a></button><br/>

	</form>
</div>
</body>
</html>

