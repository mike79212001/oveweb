<?php

function hasIllegalChar($input) {
	//$input
	//$input = sprint("%s", $input);
	
	//$hasDot 		= strpos($input, ".");
	$hasSpace 		= strpos($input, " ");
	$hasApostrophe 	= strpos($input, "'");
	$hasSlash 		= strpos($input, "\\");
	$hasPercent 	= strpos($input, "%");
	$hasPipe 		= strpos($input, "|");
	$hasQuotation	= strpos($input, "\"");
	
	if(	$hasSpace 		!== false ||
		$hasApostrophe 	!== false ||
		$hasSlash 		!== false ||
		$hasPercent 	!== false ||
		$hasPipe 		!== false ||
		$hasQuotation	!== false)
		return true;
	else
		return false;
}

?>
