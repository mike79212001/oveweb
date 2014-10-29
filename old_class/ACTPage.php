<?php
require_once 'class/DB.php';

function addACTPage($id, $pagename) {
	$db = new DB();
	$result = $db->insert("INSERT INTO ACTPage (id, pagename) 
				 VALUES ('$id', '$pagename')");
	return $result;
}

function removeACTPage($id) {
	$db = new DB();
	$result = $db->delete("DELETE FROM ACTPage WHERE id='$id'");
	return $result;
}

function updateACTPage($id, $pagename) {
	$db = new DB();
	$result = $db->update("UPDATE ACTPage SET pagename='$pagename' WHERE id='$id'");
	return $result;
}

function hasACTPage($id) {
	$db = new DB();
	$result = $db->query("SELECT * FROM ACTPage WHERE id='$id'");
	return $result;
}

function getPageName($id) {
	$db = new DB();
	$result = $db->query("SELECT * FROM ACTPage WHERE id='$id'");
	$re = $db->fetch_array();
	if($result == true) {
		return $re['pagename'];
	}
	else {
		return "attend.php";
	}
}

?>
