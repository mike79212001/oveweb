<?php
	// functions of assistant vote
	require_once "Vote.php";
	
	// check which method
	$method = $_POST['method'];

	// when button id: [vote_publish] click
	// send title, question, options to database
	if(strcmp($_POST['method'], "CREATE_VOTE") == 0) {
		// get title, question
		$title 		= $_POST['title'];
		$question 	= $_POST['question'];

		// create vote, and get vote id
		$vote_id 	= addVote($title, $question, 0);
		
		// get q1, q2, ..., qX
		$option_size = count($_POST) - 4; // remove title, question, method
		for( $i=1; $i<=$option_size; $i++) addOption($vote_id, $_POST["q$i"], $i);
		
		addVoteBelong($vote_id, $_POST['uid']);
		
		// always return true, so far...
		echo $vote_id;
	}
	// when button id: [save_template] click
	// send title, question, options to database
	else if(strcmp($_POST['method'], "SAVE_VOTE") == 0) {
		// get title, question
		$title = $_POST['title'];
		$question = $_POST['question'];
		
		// create template, and get template id
		$template_id = addTemplate($title, $question);
		
		// get q1, q2, ..., qX
		$option_size = count($_POST) - 4; // remove title, question, method
		for( $i=1; $i<=$option_size; $i++) addTemplateOption($template_id, $_POST["q$i"], $i);
		
		addTemplateBelong($template_id, $_POST['uid']);
		
		echo $template_id;
	}
	// next function
	
	else {
		$array = array();
		foreach( $_POST as $key=>$value) {
			$array[$key] = $value;
		}
		echo json_encode($array);	
	}
?>