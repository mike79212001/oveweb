

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
	<!-- jquery and bootstrap -->
	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script>
	<script type="text/javascript" src="js/ajax.js"></script>
    
    <script>
        $.cookie('test', 1);  
    </script>
    
    <?php 
        $test = $_COOKIE['test'];
        if(isset($test)) echo YES;
        else echo NO;
    ?>
    
    <form id="sign_in" class="noEnterKey" action="haha.php" method="GET">
        <h3>account:</h3>
        <input type="text" name="account"/>
        <h3>password:</h3>
        <input type="text" name="password"/>
        <br/><br/>
        <input type="button" value="click" onclick="send()">
    </form>
    
	<div class="message"><h1></h1></div>
	
	
	
</body>
</html>
