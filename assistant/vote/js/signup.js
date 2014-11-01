
function signup_submit() 
{
    // get <input> data
    var account = $("#signup_info input[name=account]").val();
    var password = $("#signup_info input[name=password]").val();
    var password_check = $("#signup_info input[name=password_check]").val();
    var name = $("#signup_info input[name=name]").val();
    var nickname = $("#signup_info input[name=nickname]").val();
    var phone = $("#signup_info input[name=phone]").val();
    var gender = $("#signup_info input[name=gender]").val();
    
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
				else if(result = "NO MATCH") {
					alert("兩次密碼不一致");
				}
				else if(result == "FAIL"){
					alert("註冊錯誤，問題已回報給管理員");
					// 回報問題
//					$.ajax({
//						url: "";
//						
//					});
				}
				else {
					// 跳轉頁面
//					window.location.replace("hahad.php");
				}
			},
			error: function(result) {
				// Error
			}
        });
    }
    
}