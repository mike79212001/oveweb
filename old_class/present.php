<?php
require_once 'class/DB.php';

function joinACT($user_id, $ACT_id) {
	$db = new DB();
	$result = $db->insert("	INSERT INTO present (user_id, ACT_id)
							VALUES ('$user_id', '$ACT_id')");
	return $result;
}

function leaveACT($user_id, $ACT_id) {
	$db = new DB();
	$result = $db->delete("DELETE FROM present WHERE user_id='$user_id' AND ACT_id='$ACT_id'");
	return $result;
}

function showUserByACT($ACT_id) {
	$db = new DB();
	$result = $db->query("SELECT user_id FROM present WHERE ACT_id='$ACT_id' ORDER BY number ASC");
	$list = array();
	while($re = $db->fetch_array()) array_push($list, $re['user_id']);
	return $list;
}

function showACTByUser($user_id) {
	$db = new DB();
	$result = $db->query("SELECT ACT_id FROM present WHERE user_id='$user_id'");
	$list = array();
	while($re = $db->fetch_array()) array_push($list, $re['ACT_id']);
	return $list;
}

function isJoinACT($user_id, $ACT_id) {
	$db = new DB();
	$result = $db->query("SELECT * FROM present WHERE ACT_id='$ACT_id' AND user_id='$user_id'");
	return $result;
}

function removeUserByACT($id) {
	$db = new DB();
	$result = $db->delete("DELETE FROM present WHERE ACT_id='$id'");
	return $result;
}

function removeACTByUser($id) {
	$db = new DB();
	$result = $db->delete("DELETE FROM present WHERE user_id='$id'");
	return $result;
}

?>
