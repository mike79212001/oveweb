<?php
require_once 'class/DB.php';

function addPost($title, $description, $content, $top) {
	$db = new DB();
	$result = $db->insert("INSERT INTO post (title, description, content, top) 
						   VALUES ('$title', '$description', '$content', '$top')");
	return $result;
}

function removePost($id) {
	$db = new DB();
	$result = $db->delete("DELETE FROM post WHERE id='$id'");
	return $result;
}

function updatePost($id, $title, $description, $content, $top) {
	$db = new DB();
	$result = $db->update("UPDATE post SET title='$title', description='$description', content='$content', top='$top'
						   WHERE id='$id'");
	return $result;
}

function getPostPerPage() {
	return 15;
}

function showPage($page) {
	// fool-proof
	if($page < 0) return null;
	
	// page number must greater than 1
	$postPerPage = getPostPerPage();
	$minPost = ($page-1) * $postPerPage; 
	
	$db = new DB();
	$result = $db->query("	SELECT * 
							FROM post
							ORDER BY date DESC 
							LIMIT $minPost, $postPerPage");

	$list = array();
	while($re = $db->fetch_array()) array_push($list, $re);
	return $list;
}

function showTopPage() {
	$postPerPage = getPostPerPage();
	$db = new DB();
	$result = $db->query("	SELECT *
							FROM post
							WHERE top>0
							ORDER BY top DESC ,date DESC
							LIMIT $postPerPage");
	$list = array();
	while($re = $db->fetch_array()) array_push($list, $re);
	return $list;
}

function getTotalPageNumber() {
	$postPerPage = getPostPerPage();
	$db = new DB();
	$result = $db->query("	SELECT *
							FROM post");
	$number = ceil($result/$postPerPage);
	return $number==0? 1: $number;
}

function updateTop($id, $top) {
	$db = new DB();
	$result = $db->update("UPDATE post SET top='$top' WHERE id='$id'");
	return $result;
}

function showPost($id) {
	$db = new DB();
	$result = $db->query("	SELECT * FROM post WHERE id='$id'");
	return $db->fetch_array();
}

function hasPost($id) {
	$db = new DB();
	$result = $db->query("SELECT * FROM post WHERE id='$id'");
	return $result;
}

function getPreviousPage($currentPage) {
	if($currentPage == 1) return $currentPage;
	else return $currentPage - 1;
}

function getNextPage($currentPage) {
	$total = getTotalPageNumber();
	if($currentPage == $total) return $currentPage;
	else return $currentPage + 1;
}

function isTop($top) {
	if($top > 0) return "[重要公告] ";
	else return "";
}
?>
