<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	require_once "$path/ajax/User.php";
	
	// get input data
	$account 		= $_POST["account"];
	$password 		= $_POST["password"];
	$name 			= $_POST["name"];
	$nickname 		= $_POST["nickname"];
	$gender 		= $_POST["gender"];
	
	// check the email has used or not
	$result = hasemail($account);
	if($result == true) {
		echo "ACCOUNT EXIST";	// reuturn account exist
		return;
	}
	
	$encryption = md5($password);
	$result = addUser($account, $encryption, $name, $nickname, "0", $gender);
	$id = mysql_insert_id();
	
	if($result == true) echo $id;
	else echo "FAIL";
?>
