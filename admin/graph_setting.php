<?php
require_once dirname(__FILE__).'/class/Frame.php';
require_once dirname(__FILE__).'/class/SqlProtecter.php';
require_once dirname(__FILE__).'/class/HOS.php';

if(isLogin()) {
	$frame = new Frame();
	$output = '
		<h1>連接 圖片 路徑</h1>
		<div class="big_font">
			<div class="graph_setting_form">
				<form>
					<div class="float"><input id="hero_graph" type="radio" name="select_type" value="hero"/>英雄</div>
					<div class="float"><input id="ability_graph" type="radio" name="select_type" value="ability"/>天賦/技能</div>
					<div class="spacer"/>
				</form>
			</div>
			
			<div class="option_block"></div>
		</div>';	
	$frame->get_main_frame($output);
}

?>