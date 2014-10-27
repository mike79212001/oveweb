<?php 
require_once 'class/User.php';


class Frame {
	
	function get_main_frame($main_text) {
		echo '	<html lang="zh-TW">';
		$this->print_head_tag();
		echo '	<body>';
		$this->print_header();
	
		$this->print_mainpage($main_text);
	
		$this->print_javascript_config();
		echo '	</body>
				</html>';
	}
	
	function print_mainpage($main_text) {
		echo '	<!-- main page -->
				<div class="wrapper">
					<div class="container">
						<div class="main-page text-left">';
		echo 			$main_text;
		echo '			</div>
					</div>
					<!-- /.container -->
			
					<!-- page tail -->
					<div class="footer small text-center">
						<ul class="list-inline">
							<li>Copyright &copy; 2014 OVE Entertainment All Rights Reserved</li>
							<li>|</li>		  
							<li>Mike Kao</li>
						</ul>
					</div>
				</div>';
	}
	
	function print_head_tag() {
		echo '	<head>
					<meta http-equiv="Content-Language" content="zh-tw" charset="utf-8">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<meta name="author" content="MikeKao">
					<title>OVE</title>
					<link href="module/bootstrap/css/bootstrap.min.css" rel="stylesheet">
					<link href="css/OVE.css" rel="stylesheet">
				</head>';
	}
	
	function print_header() {
		echo '	<!-- page head -->
				<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand  header_title_font" href="/">OVE</a>
						</div>
						<div class="collapse navbar-collapse header_content_font">
							<ul class="nav navbar-nav">
								<li><a href="activity.php">活動</a></li>
								<li><a href="announcement.php">公告</a></li>
								<li><a href="about_us.php">關於傲飛</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">';
		if(isLogin()) {
						echo '	<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">'.$_COOKIE['name'].'<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="log_out.php">登出</a></li>
									</ul>
								</li>';
		}
		else {
			echo '				<li><a href="sign_in.php">登入</a></li>
								<li><a href="register.php">註冊</a></li>';
		}
		echo '				</ul>
						</div>
						<!--/.nav-collapse -->
					</div>
				</div>';
	}
	
	function print_javascript_config() {
		echo '	<!-- Placed at the end of the document so the pages load faster -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
				<script src="module/bootstrap/js/bootstrap.min.js"></script>';
	}
}

/* should like this
  
<html lang="zh-TW">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Language" content="zh-tw">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="MikeKao">
<title>OAZ Virtual Entertainment - OVE</title>
<link href="module/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="module/OVE.css" rel="stylesheet">
</head>

<body>
	<!-- page head -->
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand  header_title_font" href="/OVE">傲飛虛擬娛樂公司</a>
			</div>
			<div class="collapse navbar-collapse header_content_font">
				<ul class="nav navbar-nav">
					<li><a href="2014_HKES.php">2014_HKES</a></li>
					<li><a href="announcement.php">公告</a></li>
					<li><a href="contact_us.php">聯絡我們</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php 
						if(isset($_COOKIE['user_name'])) {
							echo '
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">'.$_COOKIE['real_name'].'<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="log_out.php">Log Out</a></li>
									</ul>
								</li>';
						} 
						else {
							echo '<li><a href="sign_in.php">登入</a></li>';		
						}
					?>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>

	<!-- main page -->
	<div class="wrapper"> 
		<div class="container">
			<div class="main-page text-left">
		        <?php
		        	$announcement->getPost($post_id);
		        ?>
			</div>
		</div>
		<!-- /.container -->
		
		<!-- page tail -->
		<div class="footer small text-center">
			<ul class="list-inline">
			  <li>&copy;</li>
			  <li>Mike Kao</li>
			  <li>傲飛虛擬娛樂公司</li>
			</ul> 
		</div>
	</div>
	
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="module/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
*/

?>