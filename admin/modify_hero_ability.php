<?php
require_once 'class/Frame.php';
require_once 'class/User.php';
require_once 'class/HOS.php';


if(isLogin()) {
	
	$frame = new Frame();
	$output = "";
	$uid = $_POST['uid'];
	$id = $_POST['id'];
	
	$type = $_POST['type'];
	$button = $_POST['button'];
	$level = $_POST['level'];
		
	if(isset($type)) {
		$data = new HeroAbilityData();
		$data->uid_ = $uid;
		$data->id_ = $id;
		$data->type_ = $type;
		$data->button_ = $button;
		$data->level_ = $level;
		
		updateHeroAbility($uid, $id, $data);
		header("Location:list_hero_ability.php");
	}
	else if(isset($id)) {
		$heroAbility = getHeroAbility($uid, $id);
		$ability = getAbility($id);
		
		$output = '	<h1>修改 技能/天賦 設定</h1>
				<div class="lead">
					<form method="post" action="">
						<input type="hidden" name="uid" value="'.$uid.'">
						<input type="hidden" name="id" value="'.$id.'">
				
						<div>
							<h3>'.$ability['name'].'</h3>
						</div>
								
						<div>
							<h3>招式類型：</h3>
							<div class="spacer"></div>
							<div class="float"><input type="radio" name="type" value="技能" '.getHeroAbilityTypeCheck($uid, $id, "技能").'>技能<br></div>
							<div class="float"><input type="radio" name="type" value="特性" '.getHeroAbilityTypeCheck($uid, $id, "特性").'>特性<br></div>
							<div class="float"><input type="radio" name="type" value="天賦" '.getHeroAbilityTypeCheck($uid, $id, "天賦").'>天賦<br></div>
							<div class="spacer"></div>
						</div>
								
						<div>
							<h3>招式按鍵：</h3>
							<input type="text" name="button" value="'.$heroAbility['button'].'">
						</div>
						
						<div>
							<h3>天賦等級：</h3>
							<input type="text" name="level" value="'.$heroAbility['level'].'">
						</div>
						
						</br>
						<button class="btn btn-primary" type="submit">修改</button>
						<a href="/admin/list_hero_ability.php"><button class="btn btn-primary" type="button">取消</button></a>
					</form>
				</div>';
		
		$frame->get_main_frame($output);
	}
	else {
		echo "error: modify heroability <br/>";
		echo "error happened, please find baozi!";
	}
}
else {
	header("Location:/admin");
}

?>
