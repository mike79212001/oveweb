<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
		<title>小助手</title>
  		<link rel="stylesheet" href="css/log_in.css">
  		<script type="text/javascript" src="../../js/jquery-1.11.0.min.js"></script>
	    <script type="text/javascript" src="../../js/jquery.cookie.js"></script>
	    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	    <script language="javascript" type="text/javascript" src="js/login.js"></script>
	</head>
	 
	<body>
		<div class="header">
			<form id="login_info">
				帳號
				<input name="account" />
				密碼
				<input name="password" />
				<input type="button" onclick="login_submit()" value="登入" />
			</form>
		</div>
		<div>
			<div class="navigation">
				我是navigation
			</div>
			<div class="content" id="signup_block">
				<form id="signup_info">
					姓名
					<input type="text" name="name" placeholder="name" value="test"/>
					匿名
					<input type="text" name="nickname" value="haha" /><br/><br/>
					e-mail
					<input type="text" name="account" value="test" /><br/><br/>
					pass
					<input type="text" name="password" value="123" /><br/><br/>
					pass_check
					<input type="text"name="password_check" value="123" /><br/><br/>
					<input type="radio" name="gender" value="男">男</input>
					<input type="radio" name="gender" value="女">女</input><br/><br/>
					<input type="button" onclick="signup_submit()" value="加入" />
				</form>
				<P >
					忘記密碼
				</P>
			</div>
		</div>
		<div class="footer">
			Copyright © 2014 傲飛娛樂有限公司 All Rights Reserved Welly Tung Mike Kao
		</div>
	</body>
</html>