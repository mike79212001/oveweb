<?php
require_once 'class/Frame.php';
require_once 'class/SqlProtecter.php';
require_once 'class/HOS.php';

if(isLogin()) {
	$id = $_POST['id'];
	$type = $_POST['type'];
	$file = $_FILES['file'];
	
	$output = "";
	
	if(isset($id) && $id!=0 && $file['error']==0) {
		
		$path = "picture/".$file['name'];
		move_uploaded_file($file['tmp_name'], $path);
		
		addGraph($id, $type, $path, "");
		header("Location:list_graph.php");
	}
	else {
		$frame = new Frame();
		$unused_list = getUnsetGraphAbility();
		
		$output = $output.'	
				<h1>設定 技能/天賦 圖片</h1>
				<div class="lead">
					<form method="post" action="" enctype="multipart/form-data">
						<div>
							<h3>選擇招式：</h3>
							<select name="id">
								<option value=0>--請選擇--';
		foreach ($unused_list as $unused_ability) 
			$output = $output.'	<option value="'.$unused_ability['id'].'">'.$unused_ability['name'].' ('.$unused_ability['type'].')';
							
		$output = $output.'
							</select>
						</div>
				
						<div>
							<h3>招式類型：</h3>
							<div class="spacer"></div>
							<div class="float"><input type="radio" name="type" value="技能">技能<br></div>
							<div class="float"><input type="radio" name="type" value="特性">特性<br></div>
							<div class="float"><input type="radio" name="type" value="天賦">天賦<br></div>
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