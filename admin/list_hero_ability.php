<?php
require_once 'class/Frame.php';
require_once 'class/User.php';
require_once 'class/HOS.php';


if(isLogin()) {
	
	$frame = new Frame();
	$heroID = $_POST['id'];
	if(isset($heroID) == false)
		$heroID = $_COOKIE['heroID'];
	setcookie('heroID', $heroID);
	
	$passiveAbilityList = getHeroPassiveAbility($heroID);
	$abilityList = getHeroSkills($heroID);
	$telentList = getHeroTelents($heroID);
	
	$output = '
			<h2>'.getHeroName($heroID).'</h2>
			</br>
			<div class="lead">
				<form action="add_hero_ability.php" method="post">
					<input type="hidden" name="uid" value="'.$heroID.'">
					<button class="btn btn-primary" type="submit">設定 技能/天賦</button>
				</form>
							
				<h3>擁有特性</h3>
				<table class="table hero_table">
					<thead>
						<tr>
						<th>名稱</th>
						<th>對應按鍵</th>
						<th>需求等級</th>
						<th>種類</th>
						</tr>
					</thead>';
					
	foreach($passiveAbilityList as $passiveAbility) {
		$output = $output.'
					<div>
						<tr>
							<td class="share">'.$passiveAbility['name'].'</td>
							<td class="share">'.$passiveAbility['button'].'</td>
							<td class="share">'.$passiveAbility['level'].'</td>
							<td class="share">'.$passiveAbility['type'].'</td>
							<td>
								<form method="post" action="modify_hero_ability.php">
									<input type="hidden" name="uid" value="'.$heroID.'">
									<input type="hidden" name="id" value="'.$passiveAbility['id'].'">
									<button class="btn btn-primary" type="submit">修改</button>
								</form>
							</td>
							<td>
								<form method="post" action="delete_hero_ability.php">
									<input type="hidden" name="uid" value="'.$heroID.'">
									<input type="hidden" name="id" value="'.$passiveAbility['id'].'">
									<button class="btn btn-primary" type="submit">刪除</button>
								</form>
							</td>
						</tr>	
					</div>';
	}					
					
	$output = $output.'
				</table>
				<h3>擁有技能</h3>
				<table class="table hero_table">
					<thead>
						<tr>
						<th>名稱</th>
						<th>對應按鍵</th>
						<th>需求等級</th>
						<th>種類</th>
						</tr>
					</thead>';

	foreach($abilityList as $ability) {
		$output = $output.'
					<div>
						<tr>
							<td class="share">'.$ability['name'].'</td>
							<td class="share">'.$ability['button'].'</td>
							<td class="share">'.$ability['level'].'</td>
							<td class="share">'.$ability['type'].'</td>
							<td>
								<form method="post" action="modify_hero_ability.php">
									<input type="hidden" name="uid" value="'.$heroID.'">
									<input type="hidden" name="id" value="'.$ability['id'].'">
									<button class="btn btn-primary" type="submit">修改</button>
								</form>
							</td>
							<td>
								<form method="post" action="delete_hero_ability.php">
									<input type="hidden" name="uid" value="'.$heroID.'">
									<input type="hidden" name="id" value="'.$ability['id'].'">
									<button class="btn btn-primary" type="submit">刪除</button>
								</form>
							</td>
						</tr>
					</div>';
	}
	$output = $output.
				'</table>
				<h3>擁有天賦</h3>
				<table class="table hero_table">
					<thead>
						<tr>
						<th>名稱</th>
						<th>對應按鍵</th>
						<th>需求等級</th>
						<th>種類</th>
						</tr>
					</thead>';
	foreach($telentList as $telent) {
		$output = $output.'
					<div>
						<tr>
							<td class="share">'.$telent['name'].'</td>
							<td class="share">'.$telent['button'].'</td>
							<td class="share">'.$telent['level'].'</td>
							<td class="share">'.$telent['type'].'</td>
							<td>
								<form method="post" action="modify_hero_ability.php">
									<input type="hidden" name="uid" value="'.$heroID.'">
									<input type="hidden" name="id" value="'.$telent['id'].'">
									<button class="btn btn-primary" type="submit">修改</button>
								</form>
							</td>
							<td>
								<form method="post" action="delete_hero_ability.php">
									<input type="hidden" name="uid" value="'.$heroID.'">
									<input type="hidden" name="id" value="'.$telent['id'].'">
									<button class="btn btn-primary" type="submit">刪除</button>
								</form>
							</td>
						</tr>
					</div>';
	}
	$output = $output.
				'</table>
			</div>';
	
	$frame->get_main_frame($output);
}
else {
	header("Location:/admin");
}

?>
