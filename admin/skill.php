<?php
require_once 'class/Frame.php';
require_once 'class/SqlProtecter.php';
require_once 'class/User.php';
require_once 'class/HOS.php';


if(isLogin()) {

	$frame = new Frame();
	$skillID = $_GET['id'];
	$output = "";
	
	if(isset($skillID)) {
		$skill = getAbility($skillID);
		
		$output = '
			<div class="lead">
				<div>
					<h3>種類：</h3>'.$skill['type'].'
				</div>
							
				<div>
					<h3>招式名稱：</h3>'.$skill['name'].'
				</div>
				
				<div>
					<h3>冷卻時間：</h3>'.$skill['cool_down'].'
				</div>
			
				<div>
					<h3>招式消耗：</h3>'.$skill['cost'].'
				</div>
			
				<div>
					<h3>招式消耗種類：</h3>'.$skill['cost_type'].'
				</div>
			
				<div>
					<h3>持續時間：</h3>'.$skill['time'].'
				</div>
			
				<div>
					<h3>招式射程：</h3>'.$skill['range'].'
				</div>
			
				<div>
					<h3>招式說明：</h3>'.nl2br($skill['description']).'
				</div>
			</div>';
	}
	else {
		$list = getAllAbility("技能");
		
		$output = '
		<h1>所有技能</h1>
		<div class="lead">
			<table class="table hero_table">';
		
		foreach ($list as $skill) {
			$output = $output.'
				<tr>
					<td class="title"><a href="skill.php?id='.$skill['id'].'">'.$skill['name'].'</a></td>
					
					<td>
						<form method="post" action="modify_ability.php">
							<input type="hidden" name="id" value="'.$skill['id'].'">
							<button class="btn btn-primary" type="submit">修改</button>
						</form>
					</td>
									
					<td>
						<form method="post" action="delete_ability.php">
							<input type="hidden" name="id" value="'.$skill['id'].'">
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
