<?php
require_once 'class/Frame.php';
require_once 'class/activity.php';
require_once 'class/User.php';
require_once 'class/ACTPage.php';
require_once 'class/present.php';

if(isLogin()) {
	$frame = new Frame();
	$ACTid = $_POST['id'];
	$output = "";
	
	$checked = $_POST['checked'];
	
	if(isset($checked)) {
// 		echo $ACTid;
		removeACT($ACTid);
// 		removeACTPage($ACTid);
// 		removeUserByACT($ACTid);
		header("Location:/admin/activity.php");
	}
	else if(isset($ACTid) && hasACT($ACTid)) {
		$ACT = showACT($ACTid);
		$output = '
				<form method="post" action="">
					<h3 class="text_red">確定要刪除活動:</h3>
					<div class="lead">'.nl2br($ACT['description']).'</div>
					<input type="hidden" name="checked" value="1">
					<input type="hidden" name="id" value="'.$ACTid.'">
					<button class="btn btn-primary" type="submit">確認</button>
					<a href="/admin/activity.php"><button class="btn btn-primary" type="button">取消</button></a>
				</form>';
		$frame->get_main_frame($output);
	}
	else {
		echo "error: modify activity <br/>";
		echo "error happened, please find baozi!";
	}
} 
else {
	header("Location:/admin");
}

?>
