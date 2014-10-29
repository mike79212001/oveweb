<?php
require_once 'class/DB.php';

function addACT($title, $description, $content, $ACT_date) {
	$db = new DB();
	$result = $db->insert("	INSERT INTO activity (title, description, content, ACT_date)
							VALUES ('$title', '$description', '$content', '$ACT_date')");
	return $result;
}

function removeACT($id) {
	$db = new DB();
	$result = $db->delete("DELETE FROM activity WHERE id='$id'");
	return $result;
}

function updateACT($id, $title, $description, $content, $ACT_date) {
	$db = new DB();
	$result = $db->update("	UPDATE activity SET title=''$title', description='$description', content='$content', ACT_date='$ACT_date'
							WHERE id='$id'");
	return $result;
}

function updateEXP($id, $exp) {
	$db = new DB();
	$result = $db->update("UPDATE activity SET exp='$exp' WHERE id='$id'");
	return $result;
} 

function checkAllEXP() {
	$db = new DB();
	$now = date('Y-m-d');
	$result = $db->query("SELECT * FROM activity WHERE exp=0 AND ACT_date < '$now'");
	while($re = $db->fetch_array()) updateEXP($re['id'], 1);
}

function showActiveACT() {
	$db = new DB();
	$result = $db->query("	SELECT * 
							FROM activity 
							WHERE exp=0
							ORDER BY date DESC");
	$list = array();
	while($re = $db->fetch_array()) array_push($list, $re);
	return $list; 
}

function dateToString($year, $month, $day) {
	return "$year-$month-$day";
}

function hasACT($id) {
	$db = new DB();
	$result = $db->query("SELECT * FROM activity WHERE id='$id'");
	return $result;
}

function showACT($id) {
	$db = new DB();
	$result = $db->query("SELECT * FROM activity WHERE id='$id'");
	return $db->fetch_array();
}

?>
