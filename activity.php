<?php 
	include_once 'class/activity.php';
	include_once 'class/ACTPage.php';
	include_once 'class/present.php';
	
	$ACTid = $_GET['id'];
	// TODO: page and id are not number, return announcement.php
	// header to announcement.php
	
	$showPage = false;
	$showACT = false;
	if(isset($ACTid)) {
		if(hasACT($ACTid)) $showACT = true;
		else header("Location:/announcement.php");
	}
	else {
		$showpage = true;
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
    	<div class="activity_block">
<?php 
	if($showpage == true) {
		echo '
		<h1>近期活動</h1>
			';
		
		$ACTlist = showActiveACT();
		
		foreach($ACTlist as $ACT) {
			echo '
		<div class="list-group">
			<a href="activity.php?id='.$ACT['id'].'" class="list-group-item ">
				<h4 class="list-group-item-heading">'. 
					$ACT['title'].'
				</h4>
				<p class="list-group-item-text color_red">'.date("Y-m-d",strtotime($ACT['date'])).'</p>
				<p class="list-group-item-text">'.mb_substr($ACT['content'], 0, 50, "UTF-8").'...</p>
			</a>
		</div>
			';
		}

	}
	else if($showACT == true) {
		$ACT = showACT($ACTid);		
		echo '
		<table class="table">
			<tr>
				<td>
					<div class="title">'.$ACT['title'].'</div>
				</td>
				<td><div class="date">'.date("Y-m-d",strtotime($ACT['date'])).'</div></td>
			</tr>
		</table>
	    <div class="lead content">
			'.nl2br($ACT['content']).'
			<table>
				<tr>
					<td width="100px">
						<form method="post" action="'.getPageName($ACTid).'">
							<input type="hidden" name="ACTid" value="'.$ACTid.'">
							<button class="btn btn-primary" type="submit">我要報名</button>
						</form>
					</td>
					<td>
						<div class="text-warning lead">目前報名人數： '.sizeof(showUserByACT($ACTid)).'</div>
					</td>
				</tr>
			</table>
		</div>
    		';
	}
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
