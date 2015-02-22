<?php

// include DB_VA.php
$path = $_SERVER['DOCUMENT_ROOT'];
require_once "$path/assistant/vote/ajax/DB_VA.php";

///////////
// vote 
///////////
function addVote($title, $question, $tid) 
{
	$db = new DB();
	$result = $db->insert("	INSERT INTO vote_structure (`title`, `question`, `tid`)
						   	VALUES ('$title', '$question', '$tid')");
	// return vote id
	$id = mysql_insert_id();
	return $id;
}

function removeVote($vote_id) 
{
	$db = new DB();
	$result = $db->delete("DELETE FROM vote_structure WHERE id='$vote_id'");
	return $result;
}

function updateVote($vote_id, $title, $question) 
{
	$db = new DB();
	$result = $db->update("	UPDATE vote_structure SET title='$title', question='$question'
							WHERE id='$vote_id'");
	return $result;
}

///////////
// option
///////////
function addOption($vote_id, $answer, $index_order) 
{
	$db = new DB();
	// the new option, the count must be zero
	// fix bug: must add `` to the name of the column in mysql, or can not insert data
	$result = $db->insert("	INSERT INTO  option_structure (`id`, `answer`, `count`, `order`)
							VALUES ('$vote_id', '$answer', '0', '$index_order')");
	return $result;
}

function removeOptionByVote($vote_id) 
{
	$db = new DB();
	$result = $db->delete("DELETE FROM option_structure WHERE id='$vote_id'");
	return $result;
}

/////////////////
// vote belongs
/////////////////

function addVoteBelong($vote_id, $user_id)
{
	$db = new DB();
	$result = $db->insert("	INSERT INTO vote_belongs (`vid`, `uid`)
							VALUES ('$vote_id', '$user_id')");
	return $result;
}

function removeVoteBelong($vote_id)
{
	$db = new DB();
	$result = $db->delete("DELETE FROM vote_belongs WHERE vid='$vote_id'");
	return $result;
}

///////////////////
// vote template
///////////////////

function addTemplate($title, $question)
{
	$db = new DB();
	$result = $db->insert("	INSERT INTO template_structure (`title`, `question`)
							VALUES ('$title', '$question')");
							
	if($result == true) {
		return mysql_insert_id();	
	}
	else {
		return 0;
	}
}

function removeTemplate($tid)
{
	$db = new DB();
	$result = $db->delete(" DELETE FROM template_structure WHERE id='$tid'");
	return $result;
}

/////////////////////////
// vote template option
/////////////////////////

function addTemplateOption($tid, $answer, $index_order)
{
	$db = new DB();
	// the new option, the count must be zero
	$result = $db->insert("	INSERT INTO  template_option_structure (`id`, `answer`, `count`, `order`)
							VALUES ('$tid', '$answer', '0', '$index_order')");
	return $result;
}

function removeTemplateOptionByTid($tid)
{
	$db = new DB();
	$result = $db->delete(" DELETE FROM template_option_structure WHERE id='$tid'");
	return $result;
}

///////////////////////
// template belongs
///////////////////////

function addTemplateBelong($template_id, $user_id)
{
	$db = new DB();
	$result = $db->insert(" INSERT INTO template_belongs (`tid`, `uid`)
							VALUES ('$template_id', '$user_id')");
	return $result;
}

function removeTemplateBelong($template_id)
{
	$db = new DB();
	$result = $db->delete("DELETE FROM template_belongs WHERE tid='$template_id'");
	return $result;
}

?>