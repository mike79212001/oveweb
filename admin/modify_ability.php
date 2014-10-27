<?php
require_once 'class/Frame.php';
require_once 'class/User.php';
require_once 'class/HOS.php';


if(isLogin()) {
	
	$frame = new Frame();
	$output = "";
	$abilityID = $_POST['id'];
	
	$name = $_POST['name'];
	$type = $_POST['type'];
	$cool_down = $_POST['cool_down'];
	$cost = $_POST['cost'];
	$cost_type = $_POST['cost_type'];
	$time = $_POST['time'];
	$range = $_POST['range'];
	$description = $_POST['description'];
	
	if(isset($name)) {
		$data = new AbilityData();
		$data->name_ = $name;
		$data->type_ = $type;
		$data->cool_down_ = $cool_down;
		$data->cost_ = $cost;
		$data->cost_type_ = $cost_type;
		$data->time_ = $time;
		$data->range_ = $range;
		$data->description_ = $description;
		
		updateAbility($abilityID, $data);
		if($type == "技能")
			header("Location:skill.php");
		else
			header("Location:telent.php");
	}
	else if(isset($abilityID)) {
		$skill = getAbility($abilityID);
		
		$output = '	<h1>修改技能/天賦</h1>
				<div class="lead">
					<form method="post" action="">
						<input type="hidden" name="id" value="'.$abilityID.'">
						
						<div>
							<h3>種類：</h3>
							<div class="spacer"></div>
							<div class="float"><input type="radio" name="type" value="技能" '.getTypeCheck($abilityID, "技能").'>技能<br></div>
							<div class="float"><input type="radio" name="type" value="天賦" '.getTypeCheck($abilityID, "天賦").'>天賦<br></div>
							<div class="spacer"></div>
						</div>
					
						<div>
							<h3>招式名稱：</h3>
							<input type="text" name="name" value="'.$skill['name'].'">
						</div>
						
						<div>
							<h3>冷卻時間：</h3>
							<input type="text" name="cool_down" value="'.$skill['cool_down'].'">
						</div>
					
						<div>
							<h3>招式消耗：</h3>
							<input type="text" name="cost" value="'.$skill['cost'].'">
						</div>
					
						<div>
							<h3>招式消耗種類：</h3>
							<div class="spacer"></div>
							<div class="float"><input type="radio" name="cost_type" value="魔力" '.getCostTypeCheck($skill['cost_type'], "魔力").'>魔力<br></div>
							<div class="float"><input type="radio" name="cost_type" value="怒氣" '.getCostTypeCheck($skill['cost_type'], "怒氣").'>怒氣<br></div>
							<div class="spacer"></div>
						</div>
					
						<div>
							<h3>持續時間：</h3>
							<input type="text" name="time" value="'.$skill['time'].'">
						</div>
					
						<div>
							<h3>招式射程：</h3>
							<input type="text" name="range" value="'.$skill['range'].'">
						</div>
					
						<div>
							<h3>招式說明：</h3>
							<textarea rows="10" cols="80%" name="description">'.nl2br($skill['description']).'</textarea>
						</div>
						
						</br>
						<button class="btn btn-primary" type="submit">修改</button>
						<a href="/admin"><button class="btn btn-primary" type="button">取消</button></a>
					</form>
				</div>';
		
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
