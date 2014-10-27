<?php
require_once 'class/Frame.php';
require_once 'class/User.php';
require_once 'class/HOS.php';

if(isLogin()) {
	$frame = new Frame();
	
	$id = $_POST['id'];
	$type = $_POST['type'];
	$description = $_POST['description'];
	
	$output = "";
	
	$checked = $_POST['checked'];
	
	if(isset($checked)) {
		removeGraph($id, $type, $description);
		header("Location:/admin/list_graph.php");
	}
	else if(isset($id)) {
		$output = '
				<form method="post" action="">
					<h3 class="text_red">確定要刪除圖片設定:</h3>
					<input type="hidden" name="checked" value="1">
					<input type="hidden" name="id" value="'.$id.'">
					<input type="hidden" name="type" value="'.$type.'">
					<input type="hidden" name="description" value="'.$description.'">
					<button class="btn btn-primary" type="submit">確認</button>
					<a href="/admin/list_graph.php"><button class="btn btn-primary" type="button">取消</button></a>
				</form>';
		$frame->get_main_frame($output);
	}
	else {
		echo "error: modify graph <br/>";
		echo "error happened, please find baozi!";
	}
} 
else {
	header("Location:/admin");
}

?>
