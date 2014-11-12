<?php
	require_once $_SERVER['DOCUMENT_ROOT']."/admin/class/HOS.php";
	
	$method = $_POST['method'];
	
	if(strcmp($method, "LIST_HERO")==0) {
		
		$allHero = getAllHero();
		$array = array();
		foreach($allHero as $hero) {
			$array[$hero['id']] = $hero['name'];
		}
		echo json_encode($array);
	}
	else if(strcmp($method, "LIST_HERO_ABILITY")==0) {
		$uid = $_POST['uid'];
		$allAbility = getHeroAllAbility($uid);
		$array = array();
		foreach($allAbility as $ability) {
			$array[$ability['id']] = $ability['name']."-".$ability['type'];
		}
		echo json_encode($array);
	}
	else if(strcmp($method, "LIST_GRAPH")==0) {
		$list = dirToArray($_SERVER['DOCUMENT_ROOT']."/picture");
		echo json_encode($list);
	}
	else if(strcmp($method, "UPDATE_ABILITY_GRAPH")==0) {
		$result = getAbilityGraph($_POST['id']);
		if($result == false) {
			// add graph
			$rc = addGraph($_POST['id'], $_POST['type'], $_POST['path'], "");
			if($rc != false) echo "add successful!";
			else "add false";
		}
		else {
			// update graph
			$rc = updateGraph($_POST['id'], $_POST['type'], $_POST['path'], "");
			if($rc != false) echo "update successful";
			else echo "update false";
		}
	}
	else {
		echo false;
	}


	function dirToArray($dir) { 
	   $result = array(); 
	   $cdir = scandir($dir); 
	   foreach ($cdir as $key => $value) 
	   { 
	      if (!in_array($value,array(".",".."))) 
	      { 
	         if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
	         { 
	            $list = dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
	            foreach($list as $value2) {
					$result[] = $value2;
				}
	         } 
	         else 
	         { 
	            $result[] = $dir.DIRECTORY_SEPARATOR.$value; 
	         } 
	      } 
	   } 
	   return $result; 
	} 

?>