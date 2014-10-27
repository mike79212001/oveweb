<?php
require_once 'class/DB.php';

function isAdmin($id) {
	$db = new DB();
	$result = $db->query("SELECT * FROM admin WHERE id='$id'");
	return $result;
}

?>
