
//$(".noEnterKey").bind("keypress", false);
$(".noEnterKey").keypress( function(e){
    //if(e.which == 13) return false;
    if(e.which == 13) {
        send();
        return false;
        e.preventDefault();
    }
});

function send()
{
	$.ajax({
        url: "receive.php",
        //data: $('#sign_in').serialize(),
        //type:"POST",
        //dataType:'text',
        success: function(msg){
            //alert(msg);
            //var json_object = $.parseJSON(msg);
            var jqobj = eval(msg);
            
            for(var elem in jqobj) {
                if(jqobj[elem] == "mike") alert("loves");
            }
        },

         error:function(xhr, ajaxOptions, thrownError){
            alert(xhr.status); 
            alert(thrownError); 
         }
    });
}