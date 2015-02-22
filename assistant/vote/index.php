<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
		<title>小助手</title>
  		<link rel="stylesheet" href="/assistant/vote/css/log_in.css">
	</head>
	 
	<body>
	
		<!-- header -->
		<div class="header">
			<form id="login_info">
				帳號
				<input id="login_account" name="account" />
				密碼
				<input id="login_password" name="password" type="password" />
				<input id="login" type="button" value="登入" />
			</form>
		</div>
		
		
		<div>
			<div class="navigation">
				我是navigation
			</div>
			<div class="content" id="signup_block">
				<form id="signup_info">
					姓名
					<input type="text" id="signup_name" name="name" placeholder="name" value="test"/>
					匿名
					<input type="text" id="signup_nickname" name="nickname" value="haha" /><br/><br/>
					e-mail
					<input type="text" id="signup_account" name="account" value="test" /><br/><br/>
					pass
					<input type="password" id="signup_password" name="password" value="123" /><br/><br/>
					pass_check
					<input type="password" id="signup_password_check" name="password_check" value="123" /><br/><br/>
					<input type="radio" name="gender" value="男" checked>男</input>
					<input type="radio" name="gender" value="女">女</input><br/><br/>
					<input id="signup" type="button" value="加入" />
				</form>
				<P >
					忘記密碼
				</P>
			</div>
		</div>
		
		<!-- footer -->
		<div class="footer">
			Copyright © 2014 傲飛娛樂有限公司 All Rights Reserved Welly Tung Mike Kao
		</div>
		
		<!-- javascript file -->
		<script type="text/javascript" src="/js/jquery-1.11.0.min.js"></script>
	    <script type="text/javascript" src="/js/jquery.cookie.js"></script>
	    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
	    <script language="javascript" type="text/javascript" src="/assistant/vote/js/login.js"></script>		
	</body>
</html>