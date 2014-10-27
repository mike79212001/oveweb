<?php
require_once 'class/Frame.php';
require_once 'class/User.php';
require_once 'class/HOS.php';

if(isLogin()) {
	$frame = new Frame();
	$output = "";
	$uid = $_POST['uid'];
	$id = $_POST['id'];
	
	$checked = $_POST['checked'];
	
	if(isset($checked)) {
		removeHeroAbility($uid, $id);
		header("Location:/admin/list_hero_ability.php");
	}
	else if(isset($uid)) {
		$output = '
				<form method="post" action="">
					<h3 class="text_red">確定要刪除 技能/天賦 設定:</h3>
					<input type="hidden" name="checked" value="1">
					<input type="hidden" name="uid" value="'.$uid.'">
					<input type="hidden" name="id" value="'.$id.'">
					<button class="btn btn-primary" type="submit">確認</button>
					<a href="/admin/list_hero_ability.php"><button class="btn btn-primary" type="button">取消</button></a>
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
