<?php
$server = $_SERVER['SERVER_NAME'];
switch ($server) {
	case 'http://namadomainanda.com/':
	case 'http://www.namadomainanda.com/':
		include 'home.php';
		break;
	default:
		include 'home.php';
		break;
}
?>