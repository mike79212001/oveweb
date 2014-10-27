<?php
require_once 'class/Frame.php';
require_once 'class/User.php';
require_once 'class/HOS.php';


if(isLogin()) {
	
	$frame = new Frame();
	$output = "";
	$heroID = $_POST['id'];
	
	$name = $_POST['name'];
	$come_from = $_POST['come_from'];
	$major = $_POST['major'];
	$story = $_POST['story'];
	$suggest = $_POST['suggest'];
	$health = $_POST['health'];
	$health_per_level = $_POST['health_per_level'];
	$health_regain = $_POST['health_regain'];
	$health_regain_per_level = $_POST['health_regain_per_level'];
	$mana = $_POST['mana'];
	$mana_per_level = $_POST['mana_per_level'];
	$mana_regain = $_POST['mana_regain'];
	$mana_regain_per_level = $_POST['mana_regain_per_level'];
	$attack = $_POST['attack'];
	$attack_per_level = $_POST['attack_per_level'];
	$attack_speed = $_POST['attack_speed'];
	$attack_speed_per_level = $_POST['attack_speed_per_level'];
	
	if(isset($name)) {
		$data = new HeroData();
		$data->name_ = $name;
		$data->come_from_ = $come_from;
		$data->major_ = $major;
		$data->second_major_ = "";
		$data->story_ = $story;
		
		$data->suggest_ = $suggest;
		$data->health_ = $health;
		$data->health_regain_ = $health_regain;
		$data->mana_ = $mana;
		$data->mana_regain_ = $mana_regain;
		$data->attack_ = $attack;
		$data->attack_speed_ = $attack_speed;
		
		$data->health_per_level_ = $health_per_level;
		$data->health_regain_per_level_ = $health_regain_per_level;
		$data->mana_per_level_ = $mana_per_level;
		$data->mana_regain_per_level_ = $mana_regain_per_level;
		$data->attack_per_level_ = $attack_per_level;
		$data->attack_speed_per_level_ = $attack_speed_per_level;
		
		updateHero($heroID, $data);
		header("Location:/admin/hero.php");
	}
	else if(isset($heroID)) {
		$hero = getHero($heroID);
		
		$output = '	<h1>修改英雄</h1>
				<div class="lead">
					<form method="post" action="">
						<input type="hidden" name="id" value="'.$heroID.'">
						<div>
							<h3>英雄名稱：</h3>
							<input type="text" name="name" value="'.$hero['name'].'">
						</div>
						
						<div>
							<h3>源自：</h3>
							<div class="spacer"></div>
							<div class="float"><input type="radio" name="come_from" value="魔獸" '.getComefromCheck($heroID, "魔獸").'>魔獸<br></div>
							<div class="float"><input type="radio" name="come_from" value="暗黑" '.getComefromCheck($heroID, "暗黑").'>暗黑<br></div>
							<div class="float"><input type="radio" name="come_from" value="星海" '.getComefromCheck($heroID, "星海").'>星海<br></div>
							<div class="spacer"></div>
						</div>
						
						<div>
							<h3>角色：</h3>
							<div class="spacer"></div>
							<div class="float"><input type="radio" name="major" value="刺客" '.getMajorCheck($heroID, "刺客").'>刺客<br></div>
							<div class="float"><input type="radio" name="major" value="專家" '.getMajorCheck($heroID, "專家").'>專家<br></div>
							<div class="float"><input type="radio" name="major" value="戰士" '.getMajorCheck($heroID, "戰士").'>戰士<br></div>
							<div class="float"><input type="radio" name="major" value="輔助" '.getMajorCheck($heroID, "輔助").'>輔助<br></div>
							<div class="spacer"></div>
						</div>
					
						<div>
							<h3>英雄介紹：</h3>
							<textarea rows="10" cols="80%" name="story">'.nl2br($hero['story']).'</textarea>
						</div>
					
						<div>
							<h3>英雄小知識：</h3>
							<textarea rows="10" cols="80%" name="suggest">'.nl2br($hero['suggest']).'</textarea>
						</div>
					
						<div>
							<table class="ability">
								<tr> 
									<td></td>
									<td><h3>等級一：</h3></td>
									<td><h3>每級提昇：</h3></td>
								</tr>
								<tr> 
									<td><h3>生命：</h3></td>
									<td><input type="text" name="health" value="'.$hero['health'].'"></td>
									<td><input type="text" name="health_per_level" value="'.$hero['health_per_level'].'"></td>
								</tr>
								<tr> 
									<td><h3>生命恢復：</h3></td>
									<td><input type="text" name="health_regain" value="'.$hero['health_regain'].'"></td>
									<td><input type="text" name="health_regain_per_level" value="'.$hero['health_regain_per_level'].'"></td>
								</tr>
								<tr> 
									<td><h3>魔力：</h3></td>
									<td><input type="text" name="mana" value="'.$hero['mana'].'"></td>
									<td><input type="text" name="mana_per_level" value="'.$hero['mana_per_level'].'"></td>
								</tr>
								<tr> 
									<td><h3>魔力恢復：</h3></td>
									<td><input type="text" name="mana_regain" value="'.$hero['mana_regain'].'"></td>
									<td><input type="text" name="mana_regain_per_level" value="'.$hero['mana_regain_per_level'].'"></td>
								</tr>
								<tr> 
									<td><h3>攻擊力：</h3></td>
									<td><input type="text" name="attack" value="'.$hero['attack'].'"></td>
									<td><input type="text" name="attack_per_level" value="'.$hero['attack_per_level'].'"></td>
								</tr>
								<tr> 
									<td><h3>攻速：</h3></td>
									<td><input type="text" name="attack_speed" value="'.$hero['attack_speed'].'"></td>
									<td><input type="text" name="attack_speed_per_level" value="'.$hero['attack_speed_per_level'].'"></td>
								</tr>
							</table>
						</div>
						
						</br>
						<button class="btn btn-primary" type="submit">修改</button>
						<a href="/admin/hero.php"><button class="btn btn-primary" type="button">取消</button></a>
					</form>
				</div>';
		
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
