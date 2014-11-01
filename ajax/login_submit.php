<?php
    include_once("User.php");
    $account = $_POST["account"];
    $password = $_POST["password"];
    
    $result = login($account, $password);
    $number = sizeof($result);
    if ($number == 1) echo false;    // array is empty
    else echo json_encode($result);  // login       
?>