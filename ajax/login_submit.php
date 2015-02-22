<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	require_once "$path/ajax/User.php";
    
    $account = $_POST["account"];
    $password = $_POST["password"];
    
    $encryption = md5($password);
    
    $result = login($account, $encryption);
    $number = sizeof($result);
    
    if ($number == 1) echo false;    // failed login, array is empty
    else echo json_encode($result);  // login       
?>