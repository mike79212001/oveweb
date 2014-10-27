<?php
require_once 'class/DB.php';

function login($email, $password) {
	$db = new DB();
	$encryption = md5($password);
	$result = $db->query("	SELECT *
							FROM user
							WHERE email='$email' AND password='$encryption'");
	if($result > 0) {
		$user = $db->fetch_array();
		// assign directly can effect immediately
		$_COOKIE['id'] 			= $user['id'];
		$_COOKIE['email'] 		= $user['email'];
		$_COOKIE['name'] 		= $user['name'];
		$_COOKIE['nickname'] 	= $user['nickname'];
		$_COOKIE['phone'] 		= $user['phone'];
		$_COOKIE['gender'] 		= $user['gender'];
		setcookie("id", $user['id']);
		setcookie("email", $user['email']);
		setcookie("name", $user['name']);
		setcookie("nickname", $user['nickname']);
		setcookie("phone", $user['phone']);
		setcookie("gender", $user['gender']);
	
		return true;
	}
	else
		return false;
}

function isLogin() {
	if(isset($_COOKIE['id']))
		return true;
	else
		return false;
}

function logout() {
	$_COOKIE['id'] 			= "";
	$_COOKIE['email'] 		= "";
	$_COOKIE['name'] 		= "";
	$_COOKIE['nickname'] 	= "";
	$_COOKIE['phone'] 		= "";
	$_COOKIE['gender'] 		= "";
	setcookie("id", "");
	setcookie("email", "");
	setcookie("name", "");
	setcookie("nickname", "");
	setcookie("phone", "");
	setcookie("gender", "");
}

function addUser($email, $password, $name, $nickname, $phone, $gender) {
	$db = new DB();
	$encryption = md5($password);
	$result = $db->insert("INSERT INTO user (email, password, name, nickname, phone, gender)
						  VALUES ('$email', '$encryption', '$name', '$nickname', '$phone', '$gender')");
	//TODO: send mail
	
	return $result;
}

function removeUser($id) {
	$db = new DB();
	$result = $db->delete("DELETE FROM user WHERE id='$id'");
	return $result;
}

function updatePassword($id, $password) {
	$db = new DB();
	$encryption = md5($password);
	$result = $db->update("UPDATE user SET password='$encryption' WHERE id='$id'");
	return $result;
}

function updateEmail($id, $email) {
	$db = new DB();
	$result = $db->update("UPDATE user SET email='$email' WHERE id='$id'");
	return $result;
}

function updateProfile($id, $name, $nickname, $phone, $gender) {
	$db = new DB();
	$result = $db->update("UPDATE user SET name='$name', nickname='$nickname', phone='$phone', gender='$gender' 
						   WHERE id='$id'");
	return $result;
}

function hasEmail($email) {
	$db = new DB();
	$result = $db->query("SELECT * FROM user WHERE email='$email'");
	return $result;
}

function comparePassword($passwd1, $passwd2) {
	if(strcmp($passwd1, $passwd2)==0) 
		return true;
	else
		return false; 
}

function showUser($id) {
	$db = new DB();
	$result = $db->query("SELECT * FROM user WHERE id='$id'");
	return $db->fetch_array();
}

function getUserGenderCheck($gender, $current)
{
	if($gender == $current) return "checked";
	else return "";
}

?>
