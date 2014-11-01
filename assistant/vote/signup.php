<html>
<head>
    <title>signup test</title>
    <meta http-equiv="Content-Type" content="text/html" charset=UTF-8">
</head>
    
<body>
    <div id="signup_block">
        <form id="signup_info">
            account:<input type="text" name="account" value="test"/>
            <br /><br />
            password:<input type="text" name="password" value="123"/>
            <br /><br />
            password_check:<input type="text" name="password_check" value="123"/>
            <br /><br />
            name:<input type="text" name="name" value="haha"/>
            <br /><br />
            nickname:<input type="text" name="nickname" value="hhhaaa"/>
            <br /><br />
            phone:<input type="text" name="phone" value="0916"/>
            <br /><br />
            gender:<input type="text" name="gender" value="男"/>
            <br /><br />
            <input type="button" value="click!" onclick="signup_submit()"/>
        </form>
    </div>
    
    <script type="text/javascript" src="../../js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.cookie.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/signup.js"></script>
</body>

</html>