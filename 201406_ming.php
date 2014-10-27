<?php 
	require_once 'class/User.php';
	require_once 'class/activity.php';
	require_once 'class/present.php';
	require_once 'class/201406_ming.php';
	ini_set("default_charset","utf-8");
	
	// ACT id
	$ACTid = $_POST['ACTid'];
	
	// flag
	$remove = $_POST['remove'];
	$comfirm = $_POST['comfirm'];
	$update = $_POST['update'];
	
	// data
	$notebook = $_POST['notebook'];
	$focusming = $_POST['focusming'];
	$comment = $_POST['comment'];
	
	// message
	$errormsg = "";
	$guidemsg = "";
	
	// show flag
	$showcancel = false;
	$showcomfirm = false;
	
	if(isLogin() == false) {
		$errormsg = "請先登入，才可以報名";
	}
	else if(isset($update)) {
		if(hasJoinProfile($_COOKIE['id']))
			update201406_ming($_COOKIE['id'], $notebook, $focusming, $comment);
		else
			join201406_ming($_COOKIE['id'], $notebook, $focusming, $comment);
		
		echo '	
			<script type="text/javascript">
				alert("修改成功！");
				location.href="/activity.php"
			</script>
			';
	}
	else if(isset($comfirm)) {
		joinACT($_COOKIE['id'], $ACTid);
		join201406_ming($_COOKIE['id'], $notebook, $focusming, $comment);
		echo '	
			<script type="text/javascript">
				alert("報名成功！");
				location.href="/activity.php"
			</script>
			';
	}
	else if(isset($remove)) {
		leaveACT($_COOKIE['id'], $ACTid);
		leave201406_ming($_COOKIE['id']);
		echo '
			<script type="text/javascript">
				alert("取消報名成功！");
				location.href="/activity.php"
			</script>
			';
	}
	else if(isJoinACT($_COOKIE['id'], $ACTid)) {
		$errormsg = "您已經報名了喔";
		$guidemsg = "可以修改以下資訊";
		$showcancel = true;
	}
	else {
		$guidemsg = "請填寫以下資訊";
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
		<div class="ming_201406_block">
<?php 
	$ACT = showACT($ACTid);
	
	echo '
		<div class="title"><h1>您想要參加</h1></div>
			<div class="content_block">
				<div class="lead class="msg_block">'.nl2br($ACT['description']).'</div>
				<div class="text-warning lead errormsg">'.$errormsg.'</div>
				<div class="lead guidemsg">'.$guidemsg.'</div>
		';
	if($showcancel || $showcomfirm) {
		echo '
				<form method="post" action="201406_ming.php">
						<h3>活動當天, 是否會自行攜帶筆電？</h3>
						<div class="radio">
							<label><input type="radio" name="notebook" value="是" '.getNotebookChecked($_COOKIE['id'], true).'>是</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="notebook" value="否" '.getNotebookChecked($_COOKIE['id'], false).'>否</label>
						</div>
						<h3>在twitch上, 是否有訂閱小銘的台？</h3>
						<div class="radio">
							<label><input type="radio" name="focusming" value="有" '.getFocusChecked($_COOKIE['id'], true).'>有</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="focusming" value="沒有" '.getFocusChecked($_COOKIE['id'], false).'>沒有</label>
						</div>
						<h3>有甚麼悄悄話想對小銘說：</h3>
						<textarea rows="10" cols="90%" name="comment" placeholder="例如：我愛小銘, 我愛小銘, 還有我愛小銘 之類的">'.getComment($_COOKIE['id']).'</textarea>
						<br/><br/>
						<table>
							<tr>
	    						<td>
			';
		if($showcancel) {
			echo '
				    				<div class="button">
					    				<input type="hidden" name="ACTid" value="'.$ACTid.'">
										<input type="hidden" name="update" value="1">
										<button class="btn btn-primary" type="submit">修改</button>
				    				</div>
	    						</td>
	    		';
		}
		else if($showcomfirm) {
			echo '
				    				<div class="button">
										<input type="hidden" name="ACTid" value="'.$ACTid.'">
										<input type="hidden" name="comfirm" value="1">
										<button class="btn btn-primary" type="submit">確認</button>
				    				</div>
		    					</td>
	    		';
		}
		echo '
	    			</form>	
  								<td>
			';			
		if($showcancel) {
			echo '
					    			<div class="button">
						    			<form method="post" action="201406_ming.php">
											<input type="hidden" name="ACTid" value="'.$ACTid.'">
											<input type="hidden" name="remove" value="1">
											<button class="btn btn-primary" type="submit">取消報名</button>
										</form>
									</div>
				        		</td>
	    		';
		}
		else if($showcomfirm) {
			echo '
					        		<div class="button">
      									<form method="post" action="activity.php">
											<button class="btn btn-primary" type="submit">取消</button>
										</form>
					    			</div>	
				                </td>
	        	';
		}
		echo '
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
