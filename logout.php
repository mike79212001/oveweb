<?php
require_once 'class/User.php';

logout();

ini_set("default_charset","utf-8");
echo '
	<script type="text/javascript">
		alert("( ^ω^) 登出成功");
		location.href="/"
	</script>';
?>