<?php
require_once 'class/Frame.php';
require_once 'class/Post.php';
require_once 'class/User.php';
require_once 'class/admin.php';




if(isLogin()) {
	
	$title 			= $_POST['title'];
	$description 	= $_POST['description'];
	$content 		= $_POST['content'];
	$top 			= $_POST['top'];
	
	if(isset($title)) {
		addPost($title, $description, $content, $top);
		header("Location:/admin");
	}
	else {
		$frame = new Frame();
		$output = '	<h1>新增公告</h1>
				<form method="post" action="">
					<h3>主旨：</h3>
					<input type="text" size="90%" name="title">
					<br/><br/>
					<input type="radio" name="top" value="1">置頂公告
					<input type="radio" name="top" value="0" checked>一般公告
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
