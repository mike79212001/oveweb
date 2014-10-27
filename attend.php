<?php 
	require_once 'class/User.php';
	require_once 'class/activity.php';
	require_once 'class/present.php';
	ini_set("default_charset","utf-8");
	
	// ACT id
	$ACTid = $_POST['ACTid'];
	
	// flag
	$comfirm = $_POST['comfirm'];
	$remove = $_POST['remove'];
	
	// message
	$errormsg = "";
	
	// show flag
	$showcancel = false;
	$showcomfirm = false;
	
	if(islogin() == false) {
		$errormsg = "請先登入，才可以報名";
	}
	else if(isset($comfirm)) {
		joinACT($_COOKIE['id'], $ACTid);
		echo '	
			<script type="text/javascript">
				alert("報名成功！");
				location.href="/activity.php"
			</script>
			';
	}
	else if(isset($remove)) {
		leaveACT($_COOKIE['id'], $ACTid);
		echo '	
			<script type="text/javascript">
				alert("取消報名成功！");
				location.href="/activity.php"
			</script>
			';
	}
	else if(isJoinACT($_COOKIE['id'], $ACTid) ) {
		$errormsg = "您已經報名了喔";
		$showcancel = true;
	}
	else {
		$showcomfirm = true;
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
		<div class="attend_block">
		
		
<?php 
	$ACT = showACT($ACTid);
	echo '
			<div class="title"><h1>您想要參加</h1></div>
			<div class="content_block">
				<div class="lead class="msg_block">'.nl2br($ACT['description']).'</div>
				<div class="text-warning lead errormsg">'.$errormsg.'</div>
		';
	
	if($showcancel) {
		echo '
				<form method="post" action="attend.php">
					<input type="hidden" name="ACTid" value="'.$ACTid.'">
					<input type="hidden" name="remove" value="1">
					<button class="btn btn-primary" type="submit">取消報名</button>
				</form>
			';
	}
	if($showcomfirm) {
		echo '
	    		<table>
					<tr>
						<td>
	    					<div class="button">
	    						<form method="post" action="attend.php">
									<input type="hidden" name="ACTid" value="'.$ACTid.'">
									<input type="hidden" name="comfirm" value="1">
									<button class="btn btn-primary" type="submit">確認</button>
								</form>
	    					</div>
						</td>
						<td>
	    					<div class="button">
								<a href="/activity.php"><button class="btn btn-primary">取消</button></a>
	    					</div>
						</td>
					</tr>
				</table>
    		';
	}
	echo '
    		</div>		
		';
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
