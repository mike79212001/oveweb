<?php
require_once 'class/Frame.php';
require_once 'class/User.php';
require_once 'class/HOS.php';


if(isLogin()) {
	
	$frame = new Frame();
	$output = "";
	
	$id = $_POST['id'];
	$type = $_POST['type'];
	$description = $_POST['description'];
	$file = $_FILES['file'];
	
	if(isset($file) && $file['error']==0) {
		
		$path = "picture/".$file['name'];
		move_uploaded_file($file['tmp_name'], $path);
		
		updateGraph($id, $type, $path, $description);
		header("Location:/admin/list_graph.php");
	}
	else if(isset($type) && $type=='英雄') {
		$hero = getHeroGraph($id);
		
		$output = '	
				<h1>修改 '.$hero['name'].' 圖片</h1>
				<div class="lead">
					<form method="post" action="" enctype="multipart/form-data">
						<input type="hidden" name="id" value="'.$id.'">
						<input type="hidden" name="type" value="'.$type.'">
						
						<div>
							<h3>類型：</h3>
							<div class="spacer"></div>
							<div class="float"><input type="radio" name="description" value="英雄頭像" '.getHeroGraphDescriptionCheck($description, "英雄頭像").'>英雄頭像<br></div>
							<div class="float"><input type="radio" name="description" value="英雄全身" '.getHeroGraphDescriptionCheck($description, "英雄全身").'>英雄全身<br></div>
							<div class="float"><input type="radio" name="description" value="英雄背景" '.getHeroGraphDescriptionCheck($description, "英雄背景").'>英雄背景<br></div>
							<div class="spacer"></div>
						</div>
				
						<div>
							<h3>上傳圖片：</h3>
							<input name="file" type="file" />
						</div>
						
						</br>
						<button class="btn btn-primary" type="submit">修改</button>
						<a href="/admin/list_graph.php"><button class="btn btn-primary" type="button">取消</button></a>
					</form>
				</div>';
		$frame->get_main_frame($output);
	}
	else if(isset($type) && $type!='英雄') {
		$ability = getAbilityGraph($id);
		
		$output = '
				<h1>修改 '.$ability['name'].' 圖片</h1>
				<div class="lead">
					<form method="post" action="" enctype="multipart/form-data">
						<input type="hidden" name="id" value="'.$id.'">
						<input type="hidden" name="description" value="'.$description.'">
		
						<div>
							<h3>招式類型：</h3>
							<div class="spacer"></div>
							<div class="float"><input type="radio" name="type" value="技能" '.getAbilityGraphTypeCheck($type, "技能").'>技能<br></div>
							<div class="float"><input type="radio" name="type" value="特性" '.getAbilityGraphTypeCheck($type, "特性").'>特性<br></div>
							<div class="float"><input type="radio" name="type" value="天賦" '.getAbilityGraphTypeCheck($type, "天賦").'>天賦<br></div>
							<div class="spacer"></div>
						</div>
		
						<div>
							<h3>上傳圖片：</h3>
							<input name="file" type="file" />
						</div>
		
						</br>
						<button class="btn btn-primary" type="submit">修改</button>
						<a href="/admin/list_graph.php"><button class="btn btn-primary" type="button">取消</button></a>
					</form>
				</div>';
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
