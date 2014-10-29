<?php
    include_once("../class/DB.php");
    
    $array = array($_POST["account"], $_POST["password"]);
    echo json_encode($array);
?>