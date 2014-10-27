<?php 
	require_once 'class/Frame.php';
	require_once 'class/User.php';
	require_once 'class/admin.php';
	require_once 'class/SqlProtecter.php';
	ini_set("default_charset","utf-8");
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	if(isLogin()) {
	//如果已經登入,就直接轉回首頁...
		header("Location:/admin");
	} 
	else if(isset($email)) {
	//輸入完帳密,作判斷的地方...
		if( hasIllegalChar($email) || hasIllegalChar($password)) {
			header("Location:/admin/sign_in.php");
		}
		else {
			$result = login($email, $password);
			if($result == true) {
				if(isAdmin($_COOKIE['aid'])) {
					echo '	
						<script type="text/javascript">
							alert("歡迎光臨, '.$_COOKIE['name'].'");
							location.href="/admin"
						</script>';
				}
				else {
					logout();
					header("Location:/admin");
				}
			}
			else /*if($result == false)*/ {
				$frame = new Frame();
				$text = '
			<h1>登入</h1>
			<div class="text-warning lead"><br/>輸入的 帳號 或 密碼 不正確, 請再次確認<br/></div>
			<div class="block-sign">
				<form method="post" action="sign_in.php">
					<h3>信箱帳號:</h3>
					<input class="form-control" type="text" name="email" autofocus="autofocus" placeholder="Email" required value='."$email".'>
					<h3>密碼:</h3>
					<input class="form-control" type="password" name="password" placeholder="Password" required>
					<br/>
					<ul class="list-inline">
					<li><button class="btn btn-primary" type="submit">登入</button></li>
					<li><a href="register.php" >註冊</a></li>
					</ul>
				</form>
			</div>';
				$frame->get_main_frame($text);
			}
		}
	} 
	else {
	//直接按登入所進入的地方...
		$frame = new Frame();
		$text = '
			<h1>登入</h1>
			<div class="text-warning lead" id="msg_area"></div>
			<div class="block-sign">
				<form method="post" action="sign_in.php">
					<h3>信箱帳號:</h3>
					<input class="form-control" type="text" name="email" autofocus="autofocus" placeholder="Email" required>
					<h3>密碼:</h3>
					<input class="form-control" type="password" name="password" placeholder="Password" required>
					<br/>
					<ul class="list-inline">
					<li><button class="btn btn-primary" type="submit">登入</button></li>
					<li><a href="register.php" >註冊</a></li>
					</ul>
				</form>
			</div>';
		$frame->get_main_frame($text);
	}
	
?>
