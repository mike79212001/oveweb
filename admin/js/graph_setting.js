


$(".graph_setting_form #hero_graph").click(function() {
	$(".option_block").html("");
});

$(".graph_setting_form #ability_graph").click(function() {
	
	$(".option_block").html("<div>選擇英雄</div>");
	$(".option_block").append("<select id='hero_id' name='hero_id'></select>");
	$(".option_block").append("<div class='choose_ability_block'></div>");
	$(".option_block").append("<div class='graph_block'></div>");

	// list all hero in select
	$(".option_block #hero_id").append("<option value=0>--請選擇--");
	$.ajax({
		url: "/admin/ajax/graph_setting.php",
		data: {'method':'LIST_HERO'},
		type: "POST",
		dataType: "text",
		success: function(result) {
			var parseJson = JSON.parse(result);
			var return_obj = eval(parseJson);
            for(var item in return_obj) {
                $(".option_block #hero_id").append("<option value="+item+">"+return_obj[item]);
            }
		},
		error: function(result) {}
	});
	
	// when select, find hero ability
	$(".option_block #hero_id").change(function() {
		var uid = $(".option_block #hero_id option:selected").val();
		var name = $(".option_block #hero_id option:selected").text();
		
		$(".graph_block").html("");

		if(uid==0) {
			$(".choose_ability_block").html("");
			return;
		}

		$(".choose_ability_block").html("<div>選擇技能</div>");
		$(".choose_ability_block").append("<select id='ability_id' name='ability_id'></select>");
		
		// list all hero ability
		$(".choose_ability_block #ability_id").append("<option value=0>--請選擇--");
		$.ajax({
			url: "/admin/ajax/graph_setting.php",
			data: {'method':'LIST_HERO_ABILITY', 'uid':uid},
			type: "POST",
			dataType: "text",
			success: function(ability_result) {
				var parseJson = JSON.parse(ability_result);
				var return_obj = eval(parseJson);
	            for(var item in return_obj) {
	                $(".option_block #ability_id").append("<option value="+item+">"+return_obj[item]);
	            }
			},
			error: function(result) {}
		});
		
		// when select hero ability, list all picture
		$(".choose_ability_block #ability_id").change(function() {
			var aid = $(".choose_ability_block #ability_id option:selected").val();
			var atype = $(".choose_ability_block #ability_id option:selected").text().split('-');
			// get aid type
//			alert(uid+" "+aid+" "+atype[1]);
			if(aid==0) {
				$(".graph_block").html("");
				return;
			}
			
			// get all picture 
			$(".graph_block").html("<form class='choose_method'></form>");
			$(".graph_block .choose_method").append("<div class='float'><input type='radio' name='picture_method' value='select' />選擇圖片</div>");
			$(".graph_block .choose_method").append("<div class='float'><input type='radio' name='picture_method' value='upload' />上傳圖片</div>");
			$(".graph_block .choose_method").append("<div class='spacer'/>");
			$(".graph_block").append("<div class='choose_graph_block'></div>");
			
			$(".graph_block .choose_method input").change(function() {
				var picture_method = $(".graph_block .choose_method input:checked").val();
				if(picture_method=="select") {
					$(".choose_graph_block").html("<div>選擇圖片</div>");
					$(".choose_graph_block").append("<select id='graph_path' name='graph_path'></select>");
					$(".choose_graph_block #graph_path").append("<option value=0>--請選擇--");
					$(".choose_graph_block").append("<div class='show_graph'></div>");
					
					$.ajax({
						url: "/admin/ajax/graph_setting.php",
						data: {'method':'LIST_GRAPH'},
						type: "POST",
						dataType: "text",
						success: function(graph_result) {
							//alert(graph_result);
//							var parseJson = JSON.parse(graph_result);
							var return_obj = eval(graph_result);
				            for(var item in return_obj) {
				                $(".choose_graph_block #graph_path").append("<option value="+item+">"+return_obj[item]);
				            }
						},
						error: function(result) {}
					});
					
					$(".choose_graph_block #graph_path").change(function() {
						var token = $(".choose_graph_block #graph_path option:selected").text();
						if(token==0) {
							$(".show_graph").html("");						
							return;
						}
						var path = token.substring(26);
						$(".show_graph").html("<img src='"+path+"' height='100px width='100px'>");
						$(".show_graph").append("<br/><button id='graph_submit'>submit</button>");
						$(".show_graph #graph_submit").click(function() {
							
							$.ajax({
								url: "/admin/ajax/graph_setting.php",
								data: {'method':'UPDATE_ABILITY_GRAPH', 'id':aid, 'type':atype[1], 'path':path},
								type: "POST",
								dataType: "text",
								success: function(update_ability_graph_result) {
									alert(update_ability_graph_result);
									
								},
								error: function(result) {}
							});
							
							
						});
					});
				}
				else {
					//upload
					$(".choose_graph_block").html("");
				}
			});
		});
	});
});

