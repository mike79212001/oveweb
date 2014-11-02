
function login_submit()
{
    // get account and password
    var account = $("#login_info input[name=account]").val();
    var password = $("#login_info input[name=password]").val();
    
    if(account == "")         alert("請輸入帳號!!");
    else if(password == "")   alert("請輸入密碼!!");
    else {
        $.ajax({
            url: "../../../ajax/login_submit.php",
            data: $("#login_info").serialize(),
            type: "POST",
            success: function(result) {
                if(result == false) alert("帳號、密碼不正確");
                else {  
                    // login
                    var decode = $.parseJSON(result);
                    var user = eval(decode);
                    for(var index in user) $.cookie(index, user[index]);
                    //window.location.replace("hahad.php");
                    // header to second page
                }
            },
            error: function(message) {
                // error
            }
        });
    }
}


function signup_submit() 
{
    // get <input> data
    var account = $("#signup_info input[name=account]").val();
    var password = $("#signup_info input[name=password]").val();
    var password_check = $("#signup_info input[name=password_check]").val();
    var name = $("#signup_info input[name=name]").val();
    var nickname = $("#signup_info input[name=nickname]").val();
    alert(name);
    //var gender = $("#signup_info input[name='gender']:checked").val();
    var gender = $("#signup_info input[name='gender']:checked").val();
    alert(gender);
    
    if(account == "")                 	alert("請輸入帳號!!");
    else if(password == "")           	alert("請輸入密碼!!");
    else if(password_check == "")		alert("請再次輸入密碼!!");
    else if(name == "") 				alert("請輸入名字!!");
    else if(nickname == "") 			alert("請輸入暱稱!!");
    else if(phone == "") 				alert("請輸入電話!!");
    else if(gender == "") 				alert("請輸入性別!!");
    else {
        $.ajax({
        	url: "../../../ajax/signup_submit.php",
        	data: $("#signup_info").serialize(),
        	type: "POST",
        	success: function(result) {
        		
				if(result == "ACCOUNT EXIST") {
					alert("此帳號已被使用，請換一個");
				}
				else if(result == "NO MATCH") {
					alert("兩次密碼不一致");
				}
				else if(result == "FAIL"){
					alert("註冊錯誤，問題已回報給管理員");
					// 回報問題
				}
				else {
					// 跳轉頁面
//					window.location.replace("hahad.php");
					alert("註冊成功");
				}
			},
			error: function(result) {
				// Error
			}
        });
    }
    
}