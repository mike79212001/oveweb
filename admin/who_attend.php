<?php
require_once 'class/Frame.php';
require_once 'class/activity.php';
require_once 'class/User.php';
require_once 'class/present.php';
require_once 'class/ACTPage.php';


if(isLogin()) {
	$frame = new Frame();
	$ACTid = $_POST['id'];
	$output = "";
	
	if(getPageName($ACTid) != "attend.php") {
		require_once 'class/'.getPageName($ACTid);
	}
	
	$list = showUserByACT($ACTid);
	$output = '
			<h1>參加者清單</h1>
			<div class="lead">
				<table class="table">
					<thead>
						<tr>
					      	<th>姓名</th>
					      	<th>暱稱</th>
					      	<th>手機</th>';
	if(getPageName($ACTid) != "attend.php") {
		$titleList = getTitleArray();
		foreach ($titleList as $title)
			$output = $output .
							'<th>'.$title.'</th>';
	}
	$output = $output .'</tr>
					</thead>
					<tbody>';
	
	foreach ($list as $userid) {
		$user = showUser($userid);
		$output = $output.'
						<tr>
							<td>
								'.$user['name'].'
							</td>
							<td>'.$user['nickname'].'</td>
							<td>'.$user['phone'].'</td>';
		if(getPageName($ACTid) != "attend.php") {
			$profile = getDataArray($userid);
			foreach ($profile as $data) {
				$output = $output.'
							<td>'.$data.'</td>';
			}			
		}
			$output = $output.'
						</tr>';
	}
	$output = $output.' 
					</tbody>
				</table>
			</div><br/>';
	
	$frame->get_main_frame($output);
}
else {
	header("Location:/admin");
}

?>
