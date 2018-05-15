<?php
require ('connect.php'); //Database connection
session_start(); //Start the session

	
if(isset($_POST['username'])){
	$username = $_POST['username'];
}
	

if(isset($_POST['password'])){
	$password = $_POST['password'];
}

$sql = "SELECT * FROM user WHERE username = '$username'";
$query = $db->prepare($sql);
$query->execute();
$row = $query->fetch(PDO::FETCH_ASSOC);

if($query->rowCount() == 0){
		header('Location: index.php?err=1');
		exit();	
}else{
	
	$hashedPwdCheck = password_verify($password, $row['password']);
	//echo $hashedPwdCheck;
	if($hashedPwdCheck == 0){
		header('Location: index.php?err=1');
		exit();
	}elseif($hashedPwdCheck == 1){
		$_SESSION['sess_user_id'] = $row['id'];
		$_SESSION['sess_username'] = $row['username'];
		$_SESSION['sess_userrole'] = $row['role'];

		if($_SESSION['sess_userrole'] == "admin"){
			header('Location: adminhome.php?page=1');
		}
	}
}

?>