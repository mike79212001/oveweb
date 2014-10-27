<?php
require_once 'class/DB.php';

function requestVIP($id, $title, $description) {
	$db = new DB();
	$result = $db->insert("	INSERT INTO viprequest (id, title, description)
							VALUES ('$id', '$title', '$description')");
	return $result;
}

function showAllRequest() {
	$db = new DB();
	$result = $db->query("SELECT * FROM viprequest");
	$list = array();
	while($re = $db->fetch_array()) array_push($list, $re);
	return $list;
}

function acceptVIPRequest($id, $title) {
	$resultVIPrequest = false;
	
	$db = new DB();
	$resultVIP = $db->insert("	INSERT INTO vip (id, title)
								VALUES ('$id', '$title')");
	if($resultVIP == true) $resultVIPrequest = $db->delete("DELETE FROM viprequest WHERE id='$id'");
	return $resultVIPrequest;
}

function rejectVIPRequest($id) {
	$db = new DB();
	$result = $db->delete("DELETE FROM viprequest WHERE id='$id'");
	return $result; 	
}

function removeVIP($id) {
	$db = new DB();
	$result = $db->delete("DELETE FROM vip WHERE id='$id'");
	return $result;	
}

function isRequest($id) {
	$db = new DB();
	$result = $db->query("SELECT * FROM viprequest WHERE id='$id'");
	return $result;
}

function isVIP($id) {
	$db = new DB();
	$result = $db->query("SELECT * FROM vip WHERE id='$id'");
	return $result;
}

?>
