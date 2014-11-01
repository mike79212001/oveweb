
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
                    window.location.replace("hahad.php");
                }
            },
            error: function(message) {
                // error
            }
        });
    }
}