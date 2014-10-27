<?php
require_once 'class/DB.php';

function join201406_ming($id, $notebook, $focusming, $comment) {
	$db = new DB();
	$result = $db->insert("INSERT INTO 201406_ming (id, notebook, focusming, comment) 
						   VALUES ('$id', '$notebook', '$focusming', '$comment')");
	return $result;
}

function leave201406_ming($id) {
	$db = new DB();
	$result = $db->delete("DELETE FROM 201406_ming WHERE id='$id'");
	return $result;
}

function update201406_ming($id, $notebook, $focusming, $comment) {
	$db = new DB();
	$result = $db->update("	UPDATE 201406_ming SET notebook='$notebook', focusming='$focusming', comment='$comment' 
							WHERE id='$id'");
	return $result;
}

function hasJoinProfile($id) {
	$db = new DB();
	$result = $db->query("SELECT * FROM 201406_ming WHERE id='$id'");
	return $result;
}

function show201406_ming($id) {
	$db = new DB();
	$result = $db->query("SELECT * FROM 201406_ming WHERE id='$id'");
	return $db->fetch_array();
}

function getNotebookChecked($id, $flag) {
	$result = show201406_ming($id);
	$notebook = $result['notebook'];
	if($notebook == null) {
		return $flag ? "" : "checked";
	}
	else if($notebook == "是") {
		return $flag ? "checked" : "";
	} 
	else {
		return $flag ? "" : "checked";
	}
}

function getFocusChecked($id, $flag) {
	$result = show201406_ming($id);
	$focusming = $result['focusming'];
	
	if($focusming == null) {
		return $flag ? "" : "checked";
	}
	else if($focusming == "有") {
		return $flag ? "checked" : "";
	}
	else {
		return $flag ? "" : "checked";
	}
}

function getComment($id) {
	$result = show201406_ming($id);
	return $result['comment'];
}

function getDataArray($id) {
	$db = new DB();
	$db->query("SELECT * FROM 201406_ming WHERE id='$id'");
	$result = $db->fetch_array();
	$list = array();
	array_push($list, $result['notebook']);
	array_push($list, $result['focusming']);
	array_push($list, nl2br($result['comment']));
	return $list;
}

function getTitleArray() {
	$list = array();
	array_push($list, "是否帶筆電？");
	array_push($list, "是否訂閱小銘？");
	array_push($list, "備註");
	return $list;
}

?>
