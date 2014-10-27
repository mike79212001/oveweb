<?php
require_once 'class/Frame.php';
require_once 'class/User.php';
require_once 'class/HOS.php';

if(isLogin()) {
	$frame = new Frame();
	$heroID = $_POST['id'];
	$output = "";
	
	$checked = $_POST['checked'];
	
	if(isset($checked)) {
		removeHero($heroID);
		removeHeroAbilityByHero($heroID);
		removeGraphByHero($heroID);
		header("Location:/admin/hero.php");
	}
	else if(isset($heroID)) {
		$output = '
				<form method="post" action="">
					<h3 class="text_red">確定要刪除英雄:</h3>
					<input type="hidden" name="checked" value="1">
					<input type="hidden" name="id" value="'.$heroID.'">
					<button class="btn btn-primary" type="submit">確認</button>
					<a href="/admin/hero.php"><button class="btn btn-primary" type="button">取消</button></a>
				</form>';
		$frame->get_main_frame($output);
	}
	else {
		echo "error: modify hero <br/>";
		echo "error happened, please find baozi!";
	}
} 
else {
	header("Location:/admin");
}

?>
