<?php
require_once 'class/Frame.php';
require_once 'class/SqlProtecter.php';
require_once 'class/User.php';
require_once 'class/HOS.php';


if(isLogin()) {

	$frame = new Frame();
	$heroID = $_GET['id'];
	$output = "";
	
	$list = getAllHero();
	$output = '
	<h1>所有英雄</h1>
	<div class="lead">
		<table class="table hero_table">';
	
	foreach ($list as $hero) {
		$output = $output.'
			<tr>
				<td class="title">'.$hero['name'].'</td>
				
				<td>
					<form method="post" action="list_hero_ability.php">
						<input type="hidden" name="id" value="'.$hero['id'].'">
						<button class="btn btn-primary" type="submit">設定 技能/天賦</button>
					</form>
				</td>
			</tr>';
	}
	$output = $output.'
		</table>
	</div>';
	
	$frame->get_main_frame($output);
}
else {
	header("Location:/admin");
}

?>
