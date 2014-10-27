<?php
require_once 'class/Frame.php';
require_once 'class/SqlProtecter.php';
require_once 'class/HOS.php';

if(isLogin()) {
	$id = $_POST['id'];
	$type = $_POST['type'];
	$description = $_POST['description'];
	$file = $_FILES['file'];
	
	$output = "";
	
	if(isset($id) && $id!=0 && $file['error']==0) {
		
		$path = "picture/".$file['name'];
		move_uploaded_file($file['tmp_name'], $path);
		
		addGraph($id, $type, $path, $description);
		header("Location:list_graph.php");
	}
	else {
		$frame = new Frame();
		$unused_list = getUnsetGraphHero();
		
		$output = $output.'	
				<h1>設定 英雄 圖片</h1>
				<div class="lead">
					<form method="post" action="" enctype="multipart/form-data">
						<input type="hidden" name="type" value="英雄">
						<div>
							<h3>選擇英雄：</h3>
							<select name="id">
								<option value=0>--請選擇--';
		foreach ($unused_list as $unused_hero) 
			$output = $output.'	<option value="'.$unused_hero['id'].'">'.$unused_hero['name'];
							
		$output = $output.'
							</select>
						</div>
						
						<div>
							<h3>類型：</h3>
							<div class="spacer"></div>
							<div class="float"><input type="radio" name="description" value="英雄頭像">英雄頭像<br></div>
							<div class="float"><input type="radio" name="description" value="英雄全身">英雄全身<br></div>
							<div class="float"><input type="radio" name="description" value="英雄背景">英雄背景<br></div>
							<div class="spacer"></div>
						</div>
				
						<div>
							<h3>上傳圖片：</h3>
							<input name="file" type="file" />
						</div>
				
						</br>	
						<button class="btn btn-primary" type="submit">設定</button>
						<a href="/admin/list_graph.php"><button class="btn btn-primary" type="button">取消</button></a>
					</form>
				</div>';
		$frame->get_main_frame($output);
	}
}
else {
	header("Location:/admin");
}

?>