<?php
require_once 'class/Frame.php';
require_once 'class/activity.php';
require_once 'class/User.php';


if(isLogin()) {

	$title 			= $_POST['title'];
	$description 	= $_POST['description'];
	$content 		= $_POST['content'];
	$ACT_date 		= $_POST['ACT_date'];

	if(isset($title)) {
		addACT($title, $description, $content, $ACT_date);
		header("Location:/admin");
	}
	else {
		$frame = new Frame();
		$output = '	<h1>新增活動</h1>
				<form method="post" action="">
					<h3>主旨：</h3>
					<input type="text" size="90%" name="title">
					<h3>活動日期：</h3>
					<input type="date" name="ACT_date">
					<h3>摘要：</h3>
					<textarea rows="10" cols="90%" name="description"></textarea>
					<h3>內容：</h3>
					<textarea rows="10" cols="90%" name="content"></textarea>
					<br/><br/>
					<button class="btn btn-primary" type="submit">新增</button>
					<a href="/admin"><button class="btn btn-primary" type="button">取消</button></a>
				</form>';
		$frame->get_main_frame($output);
	}
}
else {
	header("Location:/admin");
}

?>
