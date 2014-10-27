<?php
require_once 'class/Frame.php';
require_once 'class/User.php';
require_once 'class/HOS.php';


if(isLogin()) {
	$frame = new Frame();
	
	$id = $_GET['id'];
	$type = $_GET['type'];
	
	$output = "";
	
	if(isset($id)) {
		$graph = "";
		if($type=='英雄') $graph = getHeroGraph($id);
		else $graph = getAbilityGraph($id);
		
		$output = '
			<div class="lead">
				<div>
					<h3>名稱：</h3>'.$graph['name'].'
				</div>
							
				<div>
					<h3>種類：</h3>'.$graph['type'].'
				</div>
		
				<div>
					<h3>圖片：</h3>
					<img width="300px" src="'.$graph['path'].'">
				</div>
		
				<div>
					<h3>說明：</h3>'.nl2br($graph['description']).'
				</div>
			</div>';
	}
	else {
		$list = getSetGraph();
		
		$output = '
			<h1>所有圖片設定</h1>
			<div class="lead">
				<table class="table hero_table">';
				
				foreach ($list as $graph) {
					$output = $output.'
					<tr>
						<td class="share"><a href="list_graph.php?id='.$graph['id'].'&type='.$graph['type'].'">'.$graph['name'].'</a></td>
						<td class="share">'.$graph['type'].'</td>
						<td class="share">'.$graph['description'].'</td>
						<td class="share"></td>
						<td>
							<form method="post" action="modify_graph.php">
								<input type="hidden" name="id" value="'.$graph['id'].'">
								<input type="hidden" name="type" value="'.$graph['type'].'">
								<input type="hidden" name="description" value="'.$graph['description'].'">
								<button class="btn btn-primary" type="submit">修改</button>
							</form>
						</td>
				
						<td>
							<form method="post" action="delete_graph.php">
								<input type="hidden" name="id" value="'.$graph['id'].'">
								<input type="hidden" name="type" value="'.$graph['type'].'">
								<input type="hidden" name="description" value="'.$graph['description'].'">
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
