<?php
require_once 'class/Frame.php';
require_once 'class/HOS.php';


$list = getHeroPassiveAbility(2);

foreach ($list as $ability) {
	echo $ability['name']."</br>";
}

?>
