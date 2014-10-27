<?php
require_once 'class/Frame.php';
require_once 'class/activity.php';
require_once 'class/User.php';


if(isLogin()) {
	
	$frame = new Frame();
	$ACTid = $_POST['id'];
	$output = "";
	
	$title 			= $_POST['title'];
	$description 	= $_POST['description'];
	$content 		= $_POST['content'];
	$ACT_date 		= $_POST['ACT_date'];
	
	if(isset($title)) {
		$result = updateACT($ACTid, $title, $description, $content, $ACT_date);
		header("Location:/admin/activity.php");
	}
	else if(isset($ACTid) && hasACT($ACTid)) {
		$ACT = showACT($ACTid);
		
		$output = '	<h1>修改活動</h1>
				<form method="post" action="">
					<input type="hidden" name="id" value="'.$ACTid.'">
					<h3>主旨：</h3>
					<input type="text" size="90%" name="title" value="'.$ACT['title'].'">
					<h3>活動日期：</h3>
					<input type="date" name="ACT_date" value="'.date("Y-m-d",strtotime($ACT['ACT_date'])).'">
					<h3>摘要：</h3>
					<textarea rows="10" cols="90%" name="description">'.$ACT['description'].'</textarea>
					<h3>內容：</h3>
					<textarea rows="10" cols="90%" name="content">'.$ACT['content'].'</textarea>
					<br/><br/>
					<button class="btn btn-primary" type="submit">修改</button>
					<a href="/admin/activity.php"><button class="btn btn-primary" type="button">取消</button></a>
				</form>';
		
		$frame->get_main_frame($output);
	}
	else {
		echo "error: modify activity <br/>";
		echo "error happened, please find baozi!";
	}
}
else {
	header("Location:/admin");
}

?>
