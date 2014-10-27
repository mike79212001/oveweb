<?php 
	include_once 'class/User.php';
	include_once 'class/SqlProtecter.php';
	ini_set("default_charset","utf-8");
	
	$id = $_COOKIE['id'];
	
	$password 	= $_POST['password'];
	$password2 	= $_POST['password2'];
	$name 		= $_POST['name'];
	$nickname 	= $_POST['nickname'];
	$phone 		= $_POST['phone'];
	$gender 	= $_POST['gender'];
	
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
			header("Location:/");
		}
		else {
			$errormsg = "兩次密碼不相同, 請再次確認";
			unset($name);
		}
	}
	
	if(isset($name)) {
		updateProfile($id, $name, $nickname, $phone, $gender);
		header("Location:/");
	}
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Welly tung">
    <link rel="shortcut icon" href="picture/OVE.LOGO.png">

    <title>傲飛娛樂</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body class="star_background">

    <!--上排按鈕-->
    <div class="navbar-wrapper  btn-group-justified ">
      <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
               </button>          
              <a class="navbar-brand" href="/">傲飛</a>
            </div>
            <div class="navbar-collapse collapse ">
              <ul class="nav navbar-nav ">
                <li><a href="activity.php">活動</a></li>
                <li><a href="announcement.php">公告</a></li>
                <li><a href="about_us.php">關於傲飛</a></li>
                <li><a href="hero.php">暴雪英霸情報</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
<?php 
	include_once 'class/User.php';
	if(isLogin()) 
		echo '	
    			<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">'.$_COOKIE['name'].'<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="modify_user.php">修改帳號設定</a></li>
						<li><a href="logout.php">登出</a></li>
					</ul>
				</li>
    		';
	else {
		echo '	
    			<li><a href="login.php">登入</a></li>
                <li><a href="register.php">註冊</a></li>
    		';
	} 	
?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--上排按鈕結束-->
	
	<div class="block"></div>

	<!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
		<div class="register_block">
<?php 
	$user = showUser($id);

	echo '	<h1>修改 帳號設定</h1>
			<div class="text-warning lead errormsg">'.$errormsg.'</div>
			<div class="lead sign_block">
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
					<a href="/"><button class="btn btn-primary" type="button">取消</button></a>
				</form>
			</div>';
?>
		</div>
    </div><!-- /.container -->

    <div class="block"></div>
    
	<!-- page tail -->
<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
  <div class="container">
		<div class="footer small text-center">
			<ul class="list-inline">
			  <li>Copyright &copy;</li>
			  <li>2014 傲飛娛樂有限公司 All Rights Reserved</li>
			  <li>Welly Tung</li>
			  <li>Mike Kao</li>
			</ul> 
		</div>
  </div>
</nav>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<!--     <script src="js/jquery-1.11.1.js"></script> -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<!--     <script src="js/bootstrap.js"></script> -->
<!--     <script src="js/docs.min.js"></script> -->
  </body>
</html>
