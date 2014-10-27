<?php
require_once 'class/Frame.php';
require_once 'class/SqlProtecter.php';
require_once 'class/User.php';
require_once 'class/HOS.php';


if(isLogin()) {

	$frame = new Frame();
	$heroID = $_GET['id'];
	$output = "";
	
	if(isset($heroID)) {
		$hero = getHero($heroID);
		
		$output = '
		<div class="lead">
			<div>
			<h3>英雄名稱：</h3>'.$hero['name'].'
			</div>
				
			<div>
			<h3>源自：</h3>'.$hero['come_from'].'
			</div>
				
			<div>
			<h3>角色：</h3>'.$hero['major'].'
			</div>
			
			<div>
			<h3>英雄介紹：</h3>
			'.nl2br($hero['story']).'
			</div>
			
			<div>
			<h3>英雄小知識：</h3>
			'.nl2br($hero['suggest']).'
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
			<td>'.$hero['health'].'</td>
			<td>'.$hero['health_per_level'].'</td>
			</tr>
			<tr>
			<td><h3>生命恢復：</h3></td>
			<td>'.$hero['health_regain'].'</td>
			<td>'.$hero['health_regain_per_level'].'</td>
			</tr>
			<tr>
			<td><h3>魔力：</h3></td>
			<td>'.$hero['mana'].'</td>
			<td>'.$hero['mana_per_level'].'</td>
			</tr>
			<tr>
			<td><h3>魔力恢復：</h3></td>
			<td>'.$hero['mana_regain'].'</td>
			<td>'.$hero['mana_regain_per_level'].'</td>
			</tr>
			<tr>
			<td><h3>攻擊力：</h3></td>
			<td>'.$hero['attack'].'</td>
			<td>'.$hero['attack_per_level'].'</td>
			</tr>
			<tr>
			<td><h3>攻速：</h3></td>
			<td>'.$hero['attack_speed'].'</td>
			<td>'.$hero['attack_speed_per_level'].'</td>
			</tr>
			</table>
			</div>
		</div>';
		
	}
	else {
		$list = getAllHero();
		$output = '
		<h1>所有英雄</h1>
		<div class="lead">
			<table class="table hero_table">';
		
		foreach ($list as $hero) {
			$output = $output.'
				<tr>
					<td class="title"><a href="hero.php?id='.$hero['id'].'">'.$hero['name'].'</a></td>
					
					<td>
						<form method="post" action="modify_hero.php">
							<input type="hidden" name="id" value="'.$hero['id'].'">
							<button class="btn btn-primary" type="submit">修改</button>
						</form>
					</td>
									
					<td>
						<form method="post" action="delete_hero.php">
							<input type="hidden" name="id" value="'.$hero['id'].'">
							<button class="btn btn-primary" type="submit">刪除</button>
						</form>
					</td>
				</tr>';
		}
		$output = $output.'
			</table>
		</div>';
	}
	
	$frame->get_main_frame($output);
}
else {
	header("Location:/admin");
}

?>
