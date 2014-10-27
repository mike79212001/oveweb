<?php
require_once 'class/Frame.php';
require_once 'class/User.php';
include_once 'class/SqlProtecter.php';


if(isLogin()) {
	
	$frame = new Frame();
	$output = "";
	$id = $_COOKIE['aid'];
	
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$name = $_POST['name'];
	$nickname = $_POST['nickname'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	
	$errormsg = "";
	
	if(	hasIllegalChar($password) ||
		hasIllegalChar($password2) ||
		hasIllegalChar($name) ||
		hasIllegalChar($nickname) ||
		hasIllegalChar($phonen) ||
		hasIllegalChar($gender)) {
		$errormsg = "輸入的帳號或密碼，不能含有特殊字元[ ' \" | \\]";
		unset($password);
		unset($name);
	}
	
	if($password!="" && $password2!="") {
		if(comparePassword($password, $password2)) {
			updateProfile($id, $name, $nickname, $phone, $gender);
			updatePassword($id, $password);
			header("Location:/admin");
		}
		else {
			$errormsg = "兩次密碼不相同, 請再次確認";
			unset($name);
		}
	}
	
	if(isset($name)) {
		updateProfile($id, $name, $nickname, $phone, $gender);
		header("Location:/admin");
	}
	else if(isset($id)) {
		$user = showUser($id);
		
		$output = '	<h1>修改 帳號設定</h1>
				<div class="text-warning lead errormsg">'.$errormsg.'</div>
				<div class="lead block-sign">
					<form method="post" action="">
						
						<div>
							<h3>新密碼:</h3>
							<input class="form-control" type="password" name="password" placeholder="Password">
							<h3>請再輸入新密碼:</h3>
							<input class="form-control" type="password" name="password2" placeholder="Password">
						</div>
						
						<div>
							<h3>本名:</h3>
							<input class="form-control" type="text" name="name" placeholder="Name" value="'.$user['name'].'" required>
						</div>
						
						<div>
							<h3>暱稱:</h3>
							<input class="form-control" type="text" name="nickname" placeholder="Nick Name" value="'.$user['nickname'].'" required>			
						</div>
						
						<div>
							<h3>電話號碼: (Ex:0912111222)</h3>
							<input class="form-control" type="text" name="phone" placeholder="Phone Number" value="'.$user['phone'].'" required>			
						</div>
						
						<div>
							<h3>性別:</h3>
							<div class="spacer"></div>
							<div class="float"><input type="radio" name="gender" value="男" '.getUserGenderCheck($user['gender'], "男").'>男<br></div>
							<div class="float"><input type="radio" name="gender" value="女" '.getUserGenderCheck($user['gender'], "女").'>女<br></div>
							<div class="spacer"></div>
						</div>
									
						</br>
						<button class="btn btn-primary" type="submit">修改</button>
						<a href="/admin"><button class="btn btn-primary" type="button">取消</button></a>
					</form>
				</div>';
		
		$frame->get_main_frame($output);
	}
	else {
		echo "error: modify user <br/>";
		echo "error happened, please find baozi!";
	}
}
else {
	header("Location:/admin");
}

?>
