
function login_submit()
{
    // get account and password
    var account = $("#login_info input[name=account]").val();
    var password = $("#login_info input[name=password]").val();
    
    if(account == "") {
        alert("請輸入帳號!!");
        // $(".message").html("請輸入帳號!!");
    }
    else if(password == "") {
        alert("請輸入密碼!!");
        // $(".message").html("請輸入密碼!!");
    }
    else {
        // $(".message").html("");
        
        $.ajax({
            url: "../../../ajax/login_submit.php",
            data: $("#login_info").serialize(),
            type: "POST",
            success: function(message) {
                
                var jqobj = eval(message);
                
                for(var elem in jqobj) {
                    alert(jqobj[elem]);
                }
                
                // alert(message);
            },
            error: function(message) {
                
            }
            
            
        });
    }
    
    
}