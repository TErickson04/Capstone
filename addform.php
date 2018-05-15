<div class="container" align="center">
	<form method="post" action="verify.php"  id="addform">
	
		<h3 style='margin-top: 15px; margin-bottom: 15px;'>Add a Member</h3>
		<div class="form-row justify-content-center">
			<div class="col-md-3 mb-3">
			  <label for="validationServer01">First name</label>
			  <input type="text" <?php echo ($fnameValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="f_name" placeholder="First name" value="<?php echo $firstName ?>" />
			  <?php echo $fnameError ?>
			</div>
			<div class="col-md-3 mb-3">
			  <label for="validationServer02">Last name</label>
			  <input type="text" <?php echo ($lnameValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="l_name" placeholder="Last name" value="<?php echo $lastName ?>" />
			  <?php echo $lnameError ?>
			</div>
		  </div>			
		  <div class="form-row justify-content-center">
			  <div class="col-md-2 mb-3">
				  <label for="validationServer02">Address</label>
				  <input type="text" <?php echo ($addressValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="e_address" placeholder="Address" value="<?php echo $address ?>" />
				  <?php echo $addressError ?>
				</div>
			<div class="col-md-2 mb-3">
			  <label for="validationServer03">City</label>
			  <input type="text" <?php echo ($cityValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="e_city" placeholder="City" value="<?php echo $city ?>" />
			  <?php echo $cityError ?>
			</div>
			<div class="col-md-1 mb-3">
			  <label for="validationServer04">State</label>
			  <input type="text" <?php echo ($stateValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="e_state" placeholder="State" value="<?php echo $state ?>" />
			  <?php echo $stateError ?>
			</div>
			<div class="col-md-1 mb-3">
			  <label for="validationServer05">Zip</label>
			  <input type="text" <?php echo ($zipValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="e_zip" placeholder="Zip" value="<?php echo $zip ?>" />
			  <?php echo $zipError ?>
			</div>
		  </div>
		  <div class="form-row justify-content-center">
			<div class="col-md-4 mb-3">
			  <label for="validationServer04">Email</label>
			  <input type="text" <?php echo ($emailValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="e_email" id="validationServer04" placeholder="Email" value="<?php echo $email ?>" />
			  <?php echo $emailError ?>
			</div>
			<div class="col-md-2 mb-3">
			  <label for="validationServer05">Phone</label>
			  <input type="text" <?php echo ($phoneValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="e_phone" placeholder="###-###-####" value="<?php echo $phone ?>" />
			  <?php echo $phoneError ?>
			</div>
		  </div>
		  <div class="form-row  justify-content-center">
			<div class="col-md-2 mb-3">
			  <label for="validationServer04">Status</label>
			  <select <?php echo ($statusValid == 0) ? "class='custom-select custom-select-md mb-3 is-valid'" : "class='custom-select custom-select-md mb-3 is-invalid'"; ?> name='e_status' >
				  <option value=''>Select Status</option>
				  <option <?php if ($status == 'Active') { ?>selected="true" <?php }; ?> value='Active'>Active</option>
				  <option <?php if ($status == 'Inactive') { ?>selected="true" <?php }; ?> value='Inactive'>Inactive</option>
				</select>
				<?php echo $statusError ?>
			</div>		  
			<div class="col-md-2 mb-3">
			  <label for="validationServer05">Payment Date</label>
			  <input type="date" <?php echo ($payValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="e_payment" placeholder="Payment" value="<?php echo $payment ?>" />
			  <?php echo $payError ?>
			</div>
			<div class="col-md-2 mb-3">
			  <label for="validationServer05">NRA Number</label>
			  <input type="text" <?php echo ($nraValid == 0) ? "class='form-control is-valid'" : "class='form-control is-invalid'"; ?> name="e_nra" placeholder="NRA #" value="<?php echo $nraNumber ?>" />
			  <?php echo $nraError ?>
			</div>
		</div>
		<button class='btn btn-outline-primary' type='submit' name='addbtn'>Add Member</button>
	</form>
	<button id="viewbutton" class='btn btn-outline-primary' align='center' onclick="window.location.href='adminhome.php?page=1'">View Members</button>
</div>