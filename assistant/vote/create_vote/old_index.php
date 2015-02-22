<html>
<head>
    <title>create vote test</title>
    <meta http-equiv="Content-Type" content="text/html" charset=UTF-8">
</head>
    
<body>

	<button id="vote">vote</button>
	
	<button id="create_vote">create_vote</button>
	
	<button id="add_option">add_option</button>
	
	<button id="option_reset">option_reset</button>
	
	<button id="save_template">save_template</button>
	
	<button id="vote_publish">vote_publish</button>
	
    <div id="create_vote_block">
		<div id="title">
			title: <input type="text">
		</div>
		<input id="option_count" type="hidden" value="2">
		
		<div id="option_block">
			<div id="option1_block">
				<div id="option1">option: <input type="text"></div>
				<div id="option1_remove"> <button>remove</button> </div>
			</div>
			
			<div id="option2_block">
				<div id="option2">option: <input type="text"></div>
				<div id="option2_remove"> <button>remove</button> </div>
			</div>
		</div>
		
    </div>
    
    
    
    <script type="text/javascript" src="/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="/js/jquery.cookie.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script language="javascript" type="text/javascript" src="/assistant/vote/create_vote/js/create_vote.js"></script>
</body>

</html>