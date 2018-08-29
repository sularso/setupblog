<?php
include "simple_html_dom.php";
$q = @$_GET['qw'];
$url = "http://www.google.com/search?tbm=isch&safe=active&q=".str_replace(' ', '+', $q);
$opts = array(
  'http'=>array(
    'header'=>"User-Agent:Mozilla/5.0 (Windows 8) AppleWebKit/534.30 (KHTML, like Gecko) Chrome/12.0.742.112 Safari/534.30\r\n"
  )
);
 
$context = stream_context_create($opts);
$html = file_get_html($url, false, $context);

foreach($html->find('div[@class="rg_meta notranslate"]') as $element) 
       echo $element;
?>