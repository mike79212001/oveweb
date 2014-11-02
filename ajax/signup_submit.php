<?php
	include_once("User.php");
	
	// get input data
	$account = $_POST["account"];
	$password = $_POST["password"];
	$password_check = $_POST["password_check"];
	$name = $_POST["name"];
	$nickname = $_POST["nickname"];
	$phone = $_POST["phone"];
	$gender = $_POST["gender"];
	
	$result = hasemail($account);
	if($result == true) {
		echo "ACCOUNT EXIST";
		return;
	}
	
	if(strcmp($password, $password_check) != 0) {
		echo "NO MATCH";	
		return;
	}
	
	$encryption = md5($password);
	$result = addUser($account, $encryption, $name, $nickname, $phone, $gender);
	if($result == true) echo "SUCCESS";
	else echo "FAIL";
?>
