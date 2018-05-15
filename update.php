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
	
<?php
	include ('header.php');
	include ('validate.php');


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
	$status = validStatus($_POST['e_status'], "Status");

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
	<div align="center">
		<h3>Edit Member</h3>
	</div>
	
<?php
	include ('erreditform.php');
	$alert = false;
}
else{

		//configuration
		include('connect.php');
	
		$encryptedNra = openssl_encrypt ($nraNumber, $cipherMethod, $key);
			//query
		$sql = "UPDATE members
			SET fname=?, lname=?, address=?, city=?, state=?, zip=?, email=?, phone=?, status=?, payment=?, nra=?
			WHERE id=?";
		// '?' Question mark represents "Paramiterized Query".

		$q = $db->prepare($sql);
		$q->execute(array($firstName,$lastName,$address,$city,$state,$zip,$email,$phone,$status,$payment,$encryptedNra,$id));
		$alert = true;
		if($alert){
			include ('confirmation.php');
			echo '<script> $("#editModal").modal("show");</script>';

		}


		//header("location: adminhome.php?page=1");
		$this->connection->close();
}


?>
