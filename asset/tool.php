<?php
$q1 = @$_GET['images'];
$q2 = @$_GET['key'];
$q3 = @$_GET['s'];
//langsung ubah juga url di sitemap-image biar gak ketinggalan........
if ($q1) {
	$url = "$_SERVER[SERVER_NAME]"."/file/?submit=submit&qw=".str_replace('-', '+', $q1);
	//$url = "www.nofollow.ga/file/?submit=submit&qw=".str_replace('-', '+', $q1);
} elseif ($q2) {
	$url = "$_SERVER[SERVER_NAME]"."/file/?submit=submit&qw=".str_replace('-', '+', $q2);
	//$url = "www.nofollow.ga/file/?submit=submit&qw=".str_replace('-', '+', $q2);
} elseif ($q3) {
	$url = "$_SERVER[SERVER_NAME]"."/file/?submit=submit&qw=".str_replace('-', '+', $q3);
	//$url = "www.nofollow.ga/file/?submit=submit&qw=".str_replace('-', '+', $q3);
} else {
	$url = "$_SERVER[SERVER_NAME]"."/file/?submit=submit&qw=".str_replace('-', '+', $q1);
	//$url = "www.nofollow.ga/file/?submit=submit&qw=".str_replace('-', '+', $q1);
}
function get ( $url ){
	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$output = curl_exec($curl);
	curl_close($curl);
	return $output;
}
$output = get($url);
//echo $output;
preg_match_all('!"ou":"(.*?)"!',$output, $ous);
preg_match_all('!"tu":"(.*?)"!',$output, $title);
preg_match_all('!"s":"(.*?)"!',$output, $se);
preg_match_all('!"pt":"(.*?)"!',$output, $pe);
$oue = array_values(array_unique($ous[0]));
$tit = array_values(array_unique($title[0]));
$ses = array_values(array_unique($se[0]));
$pp = array_values(array_unique($pe[0]));

$d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+','_','®','™','u0026','u003e','u0027','u2014','u2013','"pt":','"s":','http');
$ou=str_replace(array('"ou":','   '), '', $oue);
$tu=str_replace(array('"tu":','"'), '', $tit);
$s0s=str_replace('"s":', '', $ses);
$p0t=str_replace('"pt":', '', $pp);
$s=str_replace($d, '', $s0s);
$pt=str_replace($d, '', $p0t);


 $key=array(
	"sitemap/1.txt",
	"sitemap/2.txt",
	"sitemap/3.txt",
	"sitemap/4.txt",
	"sitemap/5.txt",
	"sitemap/6.txt"
);
?>