<!-- check login or not!!! -->
<?php 
if( isset($_COOKIE['id']) && isset($_COOKIE['name']) ) {
	
}
else {
	//header("location: /assistant/vote");
	echo "
	<script>
		alert('請先登入!');
		window.location.replace('/assistant/vote');
	</script>
	";
}

?>


<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
		<title>小助手</title>
  		<link rel="stylesheet" href="css/create_vote.css">
	</head>
	 
	<body class="back">
		
		<!-- header -->
		<div class="header">
			<form id="login_info">
				<input type="button" value="管理" />
				<input type="button" id="vote" value="投票小助手"/>
				<input type="button" id="logout" value="登出"/>
			</form>
		</div>
		
		<!-- main_block -->
		<div class="main_block">
		
			<!-- left_center -->
			<div class="left_center">
				<div class="personal_picture">
					我是大頭照<br/>
				</div>
				<div class="button_list">
					<input type="button" id="create_vote" value="創立投票" /><br/>
					<input type="button" id="vote_history"  value="歷史投票" /><br/>
					<input type="button" id="problem_report" value="問題回報" />
				</div>
			</div>
			
			<!-- signup_block -->
			<div class="center signup_block">
			
				<!-- create_vote_block -->
				<div class="create_vote_block">
					
					<!-- title -->
					<div class="title">
						<input id="title" name="title" type="text" placeholder="title" autofocus tabindex="1"/>
					</div>
					
					<!-- question -->
					<div class="question">
						<textarea id="question" name="question" tabindex="2"></textarea>
					</div>
					
					<!-- option_block -->
					<div class="option_block">
						<div class="option1_block">
							<div class="float">
								option:<input id="option1" name="option1" type="text" placeholder="option" tabindex="3"/>
								<input id="option1_remove" type="button" value="remove"/>
							</div>	
							<div class="spacer"></div>
						</div>
						<div class="option2_block">
							<div class="float">
								option:<input id="option2" name="option2" type="text" placeholder="option" tabindex="4"/>
								<input id="option2_remove" type="button" value="remove"/>
							</div>	
							<div class="spacer"></div>
						</div>
					</div>
					
					<!-- option_count data -->
					<input id="option_count" name="option_count" type="hidden" value="2">
				</div>
				
				<!-- button_list -->
				<div class="button_list">
					<input type="button" id="add_option" value="add">
					<br/><br/>
					<div class="float">
						<input type="button" id="option_reset" value="reset">
						<input type="button" id="save_template" value="save">
						<input type="button" id="vote_publish" value="submit">
					</div>
					<div class="spacer"></div>
				</div>
			</div>
			
			<!-- right_center -->
			<div class="right_center">
				
				<!-- create_template_block -->
				<div class="create_template_block">
				
					<!-- title -->
					<div class="title">
						我的範本<br/>
					</div>
					
					<!-- template_block -->
					<div class="template_block">
					
						<div class="template1_block">
							<div id="template1" class="float"> 範本1 </div>
							<input id="template1_remove" type="button" value="remove">
							<div class="spacer"></div>
						</div>
						<div class="template2_block">
							<div id="template2" class="float"> 範本2 </div>
							<input id="template2_remove" type="button" value="remove">
							<div class="spacer"></div>
						</div>		
					</div>
				</div>
				
			</div>
		</div>
		
		<!-- footer -->
		<div class="footer">
			Copyright © 2014 傲飛娛樂有限公司 All Rights Reserved Welly Tung Mike Kao a版
		</div>
		
		<!-- javascript file -->
		<script type="text/javascript" src="/js/jquery-1.11.0.min.js"></script>
	    <script type="text/javascript" src="/js/jquery.cookie.js"></script>
	    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
	    <script language="javascript" type="text/javascript" src="/assistant/vote/create_vote/js/create_vote.js"></script>
	</body>
</html>