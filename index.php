<?php
$server = $_SERVER['SERVER_NAME'];
switch ($server) {
	case 'http://decoratingfree.com/':
	case 'http://www.decoratingfree.com/':
		include 'home.php';
		break;
	default:
		include 'home.php';
		break;
}
?>