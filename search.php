<?php
$q3 = @$_GET['s'];
if($q3!=''){
$ganti = array('+',' '); //tanda plus dan spasi
$urlredirect = str_replace($ganti, '-' ,$_GET['s']); 
header("HTTP/1.1 301 Moved Permanently");
header( "Location: $urlredirect" );
}
?>