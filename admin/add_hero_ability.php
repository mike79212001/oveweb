<?php
require_once 'class/Frame.php';
require_once 'class/SqlProtecter.php';
require_once 'class/HOS.php';

if(isLogin()) {
	
	$uid = $_POST['uid'];
	$id = $_POST['id'];
	$unused_id = $_POST['unused_id'];
	$type = $_POST['type'];
	$button = $_POST['button'];
	$level = $_POST['level'];

	$output = "";
	
	if((isset($id) && $id!=0) || (isset($unused_id) && $unused_id!=0)) {
		$data = new HeroAbilityData();
		$data->uid_ = $uid;
		if($unused_id != 0) $data->id_ = $unused_id; 
		else 				$data->id_ = $id;
		$data->type_ = $type;
		$data->button_ = $button;
		$data->level_ = $level;
		
		addHeroAbility($data);
		header("Location:list_hero_ability.php");
	}
	else {
		$frame = new Frame();
		$heroname = getHeroName($uid);
		$skill_list = getAllAbility("技能");
		$telent_list = getAllAbility("天賦");
		$unused_list = getUnusedAbility();
		
		$output = $output.'	
				<h1>新增 '.$heroname.' 技能/天賦</h1>
				<div class="lead">
					<form method="post" action="">
						<input type="hidden" name="uid" value="'.$uid.'">
						
						<div>
							<h3>選擇招式：</h3>
							未使用技能：
							<select name="unused_id">
								<option value=0>--請選擇--';
		foreach ($unused_list as $unused_ability) 
			$output = $output.'	<option value="'.$unused_ability['id'].'">'.$unused_ability['name'].' ('.$unused_ability['type'].')';
		$output = $output.'
							</select>
							<br/><br/>
							已使用技能：
							<select name="id">
								<option value=0>--請選擇--';
		foreach ($skill_list as $skill) 
			$output = $output.'	<option value="'.$skill['id'].'">'.$skill['name'].' ('.$skill['type'].')';
		foreach ($telent_list as $telent) 
			$output = $output.'	<option value="'.$telent['id'].'">'.$telent['name'].' ('.$telent['type'].')';
							
		$output = $output.'
							</select>
						</div>	
						
						<div>
							<h3>招式類型：</h3>
							<div class="spacer"></div>
							<div class="float"><input type="radio" name="type" value="技能">技能<br></div>
							<div class="float"><input type="radio" name="type" value="特性">特性<br></div>
							<div class="float"><input type="radio" name="type" value="天賦">天賦<br></div>
							<div class="spacer"></div>
						</div>
								
						<div>
							<h3>招式按鍵：</h3>
							<input type="text" name="button">
						</div>
						
						<div>
							<h3>天賦等級：</h3>
							<input type="text" name="level">
						</div>
								
						<br/>
						<button class="btn btn-primary" type="submit">新增</button>
						<a href="/admin/list_hero_ability.php"><button class="btn btn-primary" type="button">取消</button></a>
					</form>
				</div>';
		$frame->get_main_frame($output);
	}
}
else {
	header("Location:/admin");
}

?>