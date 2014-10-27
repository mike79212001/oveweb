<?php
require_once 'class/Frame.php';
require_once 'class/SqlProtecter.php';
require_once 'class/User.php';
require_once 'class/HOS.php';


if(isLogin()) {

	$frame = new Frame();
	$telentID = $_GET['id'];
	$output = "";
	
	if(isset($telentID)) {
		$telent = getAbility($telentID);
		
		$output = '
			<div class="lead">
				<div>
					<h3>種類：</h3>'.$telent['type'].'
				</div>
							
				<div>
					<h3>招式名稱：</h3>'.$telent['name'].'
				</div>
				
				<div>
					<h3>冷卻時間：</h3>'.$telent['cool_down'].'
				</div>
			
				<div>
					<h3>招式消耗：</h3>'.$telent['cost'].'
				</div>
			
				<div>
					<h3>招式消耗種類：</h3>'.$telent['cost_type'].'
				</div>
			
				<div>
					<h3>持續時間：</h3>'.$telent['time'].'
				</div>
			
				<div>
					<h3>招式射程：</h3>'.$telent['range'].'
				</div>
			
				<div>
					<h3>招式說明：</h3>'.nl2br($telent['description']).'
				</div>
			</div>';
	}
	else {
		$list = getAllAbility("天賦");
		
		$output = '
		<h1>所有天賦</h1>
		<div class="lead">
			<table class="table hero_table">';
		
		foreach ($list as $telent) {
			$output = $output.'
				<tr>
					<td class="title"><a href="skill.php?id='.$telent['id'].'">'.$telent['name'].'</a></td>
					
					<td>
						<form method="post" action="modify_ability.php">
							<input type="hidden" name="id" value="'.$telent['id'].'">
							<button class="btn btn-primary" type="submit">修改</button>
						</form>
					</td>
									
					<td>
						<form method="post" action="delete_ability.php">
							<input type="hidden" name="id" value="'.$telent['id'].'">
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
