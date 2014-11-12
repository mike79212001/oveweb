<?php
	require_once "HOS.php";
	
	echo getcwd();
	return;
	
	$method = $_POST['method'];
	
	if(strcmp($method, "LIST_HERO")==0) {
		echo $_POST['test'];
	}
	else {
		echo false;
	}
	
?>