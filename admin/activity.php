<?php
require_once 'class/Frame.php';
require_once 'class/activity.php';
require_once 'class/SqlProtecter.php';
require_once 'class/User.php';
require_once 'class/present.php';
require_once 'class/ACTPage.php';


if(isLogin()) {

	$frame = new Frame();
	$ACTid = $_GET['id'];
	$output = "";
	
	echo $_POST['present'];
	
	if(hasIllegalChar($ACTid)) {
		header("Location:/activity.php");
	}
	else if(isset($ACTid) && hasACT($ACTid)) {
		$ACT = showACT($ACTid);
		$output = $output . '
					<table class="table">
						<tr>
							<td class="activity_title">
								<h1>'.$ACT['title'].'</h1>
							</td>
							<td class="activity_date">'.date("Y-m-d",strtotime($ACT['ACT_date'])).'	</td>
						</tr>
					</table>
					<div class="lead activity_detail">
						'.nl2br($ACT['content']).'
					</div>';
	}
	else {
		$list = showActiveACT();
		$output = '
			<h1>所有活動</h1>
			<div class="lead">
				<table class="table">';
		foreach ($list as $ACT) {
			$output = $output.'
					<tr>
						<td class="activity_title">
							<form method="get" action="activity.php" class="activity_form">
								<input type="hidden" name="id" value="'.$ACT['id'].'">
								<input type="submit" class="activity_linkButton" value="'.$ACT['title'].'">
							</form>
						</td>
						<td class="activity_date">'.date("Y-m-d",strtotime($ACT['ACT_date'])).'</td>
						<td>
							<form method="post" action="who_attend.php" class="announcement_form">
								<input type="hidden" name="id" value="'.$ACT['id'].'">
								<button class="btn btn-primary" type="submit">查看報名資訊</button>
							</form>
						</td>
						<td>
							<form method="post" action="modify_activity.php">
								<input type="hidden" name="id" value="'.$ACT['id'].'">
								<button class="btn btn-primary" type="submit">修改</button>
							</form>
						</td>
						<td>
							<form method="post" action="delete_activity.php" class="activity_form">
								<input type="hidden" name="id" value="'.$ACT['id'].'">
								<button class="btn btn-primary" type="submit">刪除</button>
							</form>
						</td>
					</tr>';
		}
		$output = $output.' </table>
			</div><br/>';
	}
	
	$frame->get_main_frame($output);
}
else {
	header("Location:/admin");
}


?>
