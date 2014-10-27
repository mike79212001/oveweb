<?php
require_once 'class/Frame.php';
require_once 'class/User.php';
require_once 'class/HOS.php';

if(isLogin()) {
	$frame = new Frame();
	$abilityID = $_POST['id'];
	$output = "";
	
	$checked = $_POST['checked'];
	
	if(isset($checked)) {
		removeAbility($abilityID);
		removeHeroAbilityByAbility($abilityID);
		removeGraphByAbility($abilityID);
		header("Location:/admin");
	}
	else if(isset($abilityID)) {
		$output = '
				<form method="post" action="">
					<h3 class="text_red">確定要刪除技能/天賦:</h3>
					<input type="hidden" name="checked" value="1">
					<input type="hidden" name="id" value="'.$abilityID.'">
					<button class="btn btn-primary" type="submit">確認</button>
					<a href="/admin"><button class="btn btn-primary" type="button">取消</button></a>
				</form>';
		$frame->get_main_frame($output);
	}
	else {
		echo "error: modify ability <br/>";
		echo "error happened, please find baozi!";
	}
} 
else {
	header("Location:/admin");
}

?>
