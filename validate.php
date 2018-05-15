<?php
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
		if(empty($data)){
			$ErrCount++;
			$fnameError = "<div class='invalid-feedback'>
								 First Name is required
							   </div>";
				$fnameValid = 1;
		}else{
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
		if(empty($data)){
			$ErrCount++;
			$lnameError = "<div class='invalid-feedback'>
								 Last Name is required
							   </div>";
				$lnameValid = 1;
		}else{
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
		if(empty($data)){
			$ErrCount++;
			$addressError = "<div class='invalid-feedback'>
								 Address is required
							   </div>";
				$addressValid = 1;
		}else{
			$data = trim($data);
			$data = stripslashes($data);
			$pattern = "/[A-Za-z0-9'\.\-\s\,]/";
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
		if(empty($data)){
			$ErrCount++;
			$cityError = "<div class='invalid-feedback'>
								 City is required
							   </div>";
				$cityValid = 1;
		}else{
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
		if(empty($data)){
			$ErrCount++;
			$stateError = "<div class='invalid-feedback'>
								 State is required
							   </div>";
				$stateValid = 1;
		}else{
			$data = trim($data);
			$data = stripslashes($data);
			$pattern = "/^[A-Z]{2}$/";
			if(preg_match($pattern, $data)){
				return $data;
				$stateValid = 0;
			}
			else{
				$stateError = "<div class='invalid-feedback'>
								State must be a capitalized abbreviation
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
		if(empty($data)){
			$ErrCount++;
			$zipError = "<div class='invalid-feedback'>
								 Zip Code is required
							   </div>";
				$zipValid = 1;
		}else{
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
		if(empty($data)){
			$ErrCount++;
			$emailError = "<div class='invalid-feedback'>
								 Email is required
							   </div>";
				$emailValid = 1;
		}else{
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
		if(empty($data)){
			$ErrCount++;
			$phoneError = "<div class='invalid-feedback'>
								 Phone # is required
							   </div>";
				$phoneValid = 1;
		}else{
			$data = trim($data);
			$data = stripslashes($data);
			$pattern = "/\d{3}-\d{3}-\d{4}$/";
			if(preg_match($pattern, $data)){
				return $data;
				$phoneValid = 0;
			}
			else{
				$phoneError = "<div class='invalid-feedback'>
								###-###-#### format
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
		if(empty($data)){
			$ErrCount++;
			$payError = "<div class='invalid-feedback'>
								 Payment Date is required
							   </div>";
				$payValid = 1;
		}else{
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
								Date cannot be later than today
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
		if(empty($data)){
			$ErrCount++;
			$nraError = "<div class='invalid-feedback'>
								 NRA # is required
							   </div>";
				$nraValid = 1;
		}else{
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
	
	function validStatus($data, $field){
		global $ErrCount;
		global $statusError;
		global $statusValid;
		if(empty($data)){
			$ErrCount++;
			$statusError = "<div class='invalid-feedback'>
								Status is required
							   </div>";
				$statusValid = 1;
		}else{
			$statusValid = 0;
			return $data;
		}
	}

?>