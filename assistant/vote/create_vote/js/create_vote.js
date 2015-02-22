
// button id [create_vote] click
// reset create_vote_block
$("#create_vote").click(function() 
{
	// reset the create_vote block
	$(".create_vote_block").html('\
		<div class="title">\
			<input id="title" name="title" type="text" placeholder="title" autofocus tabindex="1"/>\
		</div>\
		<div class="question">\
			<textarea id="question" name="question" tabindex="2"></textarea>\
		</div>\
		<div class="option_block">\
			<div class="option1_block">\
				<div class="float">\
					option:<input id="option1" name="option1" type="text" placeholder="option" tabindex="3"/>\
					<input id="option1_remove" type="button" value="remove"/>\
				</div>\
				<div class="spacer"></div>\
			</div>\
			<div class="option2_block">\
				<div class="float">\
					option:<input id="option2" name="option2" type="text" placeholder="option" tabindex="4"/>\
					<input id="option2_remove" type="button" value="remove"/>\
				</div>\
				<div class="spacer"></div>\
			</div>\
		</div>\
		<input id="option_count" name="option_count" type="hidden" value="2">');
	
	// add button action
	$(".option_block input[type='button']").click(function() 
	{
		optionRemoveButton($(this));
	});
});

// button id: [vote] click
// redirect to create_vote page
$("#vote").click(function()
{
	window.location.replace("/assistant/vote/create_vote");
	//window.location.href = "http://localhost/assistant/vote/create_vote";
});

// function: optionRemoveButton
// param: obj [in]  the object of the button
// remove the [optionX_block] div
function optionRemoveButton(obj) 
{
	if($(".option_block input[type='text']").size() == 2) {
		alert("最少要有兩個選項");
		return;
	}
	obj.parent().parent().remove(); // remove the [optionX_block] div
}

// button id: [add_option] click
// add new option in option_block
$("#add_option").click(function() 
{
	var option_count = parseInt($("#option_count").val())+1;
	var tab_index = option_count + 2;
	$("#option_count").val(option_count);
	
	$(".option_block").append('\
		<div class="option'+option_count+'_block">\
			<div class="float">\
				option:<input id="option'+option_count+'" name="option'+option_count+'" type="text" placeholder="option" tabindex="'+tab_index+'"/>\
				<input id="option'+option_count+'_remove" type="button" value="remove"/>\
			</div>\
			<div class="spacer"></div>\
		</div>');
	
	$("#option"+option_count+"_remove").click(function() {
		optionRemoveButton($(this));
	});
});

// button id: [optionX_remove] click
// remove the option of the remove button
$(".option_block input[type='button']").click(function() 
{
	optionRemoveButton($(this));
});

// button id: [option_reset] click
// clear the input text of the option and title
$("#option_reset").click(function() 
{
	$("#title").val("");
	$("#question").val("");
	$(".option_block input[type='text']").val("");	
});

// button id: [vote_publish] click
// publish the vote, and record the vote data
$("#vote_publish").click(function() 
{
	// check input have value or not
	if(checkInputHaveValueForVote() == false) return;
		
	////
	//  all data have input
	////
	var sTitle = $("#title").val();
	var sQuestion = $("#question").val();
	var iUid = $.cookie("id");
	var iQuestionCount = 1;
	var sDataString = 'method=CREATE_VOTE&title='+sTitle+'&question='+sQuestion+'&uid='+iUid;
	$(".option_block input[type='text']").each(function() {
		sDataString = sDataString + '&q'+iQuestionCount+'='+$(this).val();
		iQuestionCount++;
	});

	$.ajax({
		url: "/assistant/vote/create_vote/ajax/create_vote.php",
		data: sDataString,
		type: "POST",
		success: function(result) {
			alert(result); // print vote id 
			
			// TODO: redirect page to create vote page!
			
			
		},
		error: function(result) {}
	});
});

// button id: [logout] click
// clear cookies and redirect to /assistant/vote
$("#logout").click(function() 
{
	$.removeCookie("id", 		{ path: '/' });
	$.removeCookie("email", 	{ path: '/' });
	$.removeCookie("name", 		{ path: '/' });
	$.removeCookie("nickname", 	{ path: '/' });
	$.removeCookie("phone", 	{ path: '/' });
	$.removeCookie("gender", 	{ path: '/' });
	
	window.location.replace("/assistant/vote");
});

// vote_history
$("#vote_history").click(function() 
{
});


// problem_report
$("#problem_report").click(function() 
{
	
});

// save_template
$("#save_template").click(function() 
{
	if(checkInputHaveValueForVote() == false) return;
	
	////
	//  all data have input
	////
	var sTitle = $("#title").val();
	var sQuestion = $("#question").val();
	var iUid = $.cookie("id");
	var iQuestionCount = 1;
	var sDataString = 'method=SAVE_VOTE&title='+sTitle+'&question='+sQuestion+'&uid='+iUid;
	$(".option_block input[type='text']").each(function() {
		sDataString = sDataString + '&q'+iQuestionCount+'='+$(this).val();
		iQuestionCount++;
	});

	$.ajax({
		url: "/assistant/vote/create_vote/ajax/create_vote.php",
		data: sDataString,
		type: "POST",
		success: function(result) {
			alert(result); // print vote id
			
			// add block in template block
			
			
		},
		error: function(result) {}
	});
	
});

function checkInputHaveValueForVote()
{
	if($("#title").val() == "") {
		alert("請輸入 標題");
		return false;
	}
	
	if($("#question").val() == "") {
		alert("請輸入 問題描述");
		return false;
	}
	
	var flag = false;
	$(".option_block input[type='text']").each(function() {
		if($(this).val() == "") {
			alert("選項 不可以是空白");
			flag = true;
			return false;	// break each
		}
		return true;
	});
	if(flag == true) return false; // if break each, return function
	else return true;
}