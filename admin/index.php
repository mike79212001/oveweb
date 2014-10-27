<?php 
require_once 'class/Frame.php';
require_once 'class/User.php';
require_once 'class/admin.php';

$frame = new Frame();

if(isLogin()) {
	$output = '	<img src="picture/O101.jpg" width="300">';
}
	


$frame->get_main_frame($output);

?>