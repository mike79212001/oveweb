
// when press enter in password field
// the act is the same as click login button
$("#login_password").keypress(function(e) 
{
	var key = e.which;
	if(key == 13) {
		$("#login").click();
		return false;
	}
});


// button id: [login] click
// check account and password, set cookies
$("#login").click(function() 
{
    // get account and password
    var account  = $("#login_account").val();
    var password = $("#login_password").val();
    
    if(account == "")         alert("請輸入帳號!!");
    else if(password == "")   alert("請輸入密碼!!");
    else {
        $.ajax({
            url: "/ajax/login_submit.php",
            data: $("#login_info").serialize(),
            type: "POST",
            success: function(result) {
                if(result == false) alert("帳號、密碼不正確");
                else {  
                    // login
                    var decode = $.parseJSON(result);
                    var user = eval(decode);
                    var user_name;
                    for(var index in user) {
                    	if( index == "name") user_name = user[index];
                    	$.cookie(index, user[index], { path: '/' });
                    }
                    alert("歡迎回來 "+user_name);
                    
                    // header to second page
                    window.location.replace("/assistant/vote/create_vote");
                }
            },
            error: function(message) {}
        });
    }	
});

// button id: [signup] click
// register new user

$("#signup").click(function() 
{
	// get <input> data
    var account 		= $("#signup_account").val();
    var password 		= $("#signup_password").val();
    var password_check 	= $("#signup_password_check").val();
    var name 			= $("#signup_name").val();
    var nickname 		= $("#signup_nickname").val();
    var gender = $("#signup_info input[name='gender']:checked").val();
//    alert(account+" "+password+" "+password_check+" "+name+" "+nickname+" "+gender);
    
    if(account == "")                 	alert("請輸入 帳號!!");
    else if(password == "")           	alert("請輸入 密碼!!");
    else if(password_check == "")		alert("請再次輸入 密碼!!");
    else if(name == "") 				alert("請輸入 名字!!");
    else if(nickname == "") 			alert("請輸入 暱稱!!");
    else if(gender == "") 				alert("請輸入 性別!!");
    else {
    	
    	if(password != password_check) {
			alert("兩次密碼不一致");
			return false;
		}
    	
        $.ajax({
        	url: "/ajax/signup_submit.php",
        	data: $("#signup_info").serialize(),
        	type: "POST",
        	success: function(result) {
				if(result == "ACCOUNT EXIST") {
					alert("此帳號已被使用，請換一個");
				}
				else if(result == "FAIL"){
					alert("註冊錯誤，問題已回報給管理員");
					// 回報問題
				}
				// if no other problems, return user id
				else {
					// 跳轉頁面
					alert("歡迎 "+name+" "+result);
					
					$.cookie("id", 			result, 	{ path: '/' });
					$.cookie("email", 		account, 	{ path: '/' });
					$.cookie("name", 		name, 		{ path: '/' });
					$.cookie("nickname", 	nickname, 	{ path: '/' });
					$.cookie("phone", 		"", 		{ path: '/' });
					$.cookie("gender", 		gender, 	{ path: '/' });
					
					
					// header to second page
                    window.location.replace("/assistant/vote/create_vote");
				}
			},
			error: function(result) {}
        });
    }
});
