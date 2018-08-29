<?php
error_reporting(0);
include "asset/tool.php";
include "function.php";
header("Content-type: text/xml");

$awas=array_rand($key,2);
$lines = file($key[$awas[0]]);

echo '<?xml version="1.0" encoding="UTF-8" ?>';

$kiwode = $lines[array_rand($lines)];
$kiwody = str_replace(array("\n", "-","\r"), '+', $kiwode);
$kiwod = str_replace("++", "",$kiwody);
$url2 = "$_SERVER[SERVER_NAME]"."/file/?submit=submit&qw=".$kiwod;
$output = get($url2);

preg_match_all('!"ou":"(.*?)"!',$output, $url_matches);
preg_match_all('!"pt":"(.*?)"!',$output, $url);
preg_match_all('!"s":"(.*?)"!',$output, $urle);
$images = array_values(array_unique($url_matches[0]));
$judul = array_values(array_unique($url[0]));
$g = array_values(array_unique($urle[0]));
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
<?php
for ($y = 0; $y <count($images); $y++){
  $link = str_replace(array("\n","\r"), '', $lines);
?>
<url>
  <loc>http://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $link[$y];?></loc>
  <lastmod>2017-10-27T05:12:18Z</lastmod>
  <changefreq>always</changefreq>
  <priority>1.0</priority>
<?php
for ($x=0;$x<count($images);$x++){ 
$asq=str_replace('"ou":', '', $images[$x]);
$as=str_replace('"', '', $asq);
$h=str_replace('"s":', '', $g[$x]);
$t=str_replace('"s":', '', $h);
$asa=str_replace('"pt":', '', $judul[$x]);   

$d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+','_','®');
$caption = str_replace($d, '', $h);
$title = str_replace($d, '', $asa);
?>
  <image:image>
    <image:loc><?php echo $as;?></image:loc>
    <image:caption><?php
  if (strlen($title) > 700)
     echo substr($title, 0, 700) . '..';
    else
      echo $title;?>
 <?php
if (empty($title)) {
  if (strlen($t) > 400){
    $ty = str_replace($d, '', $t);
     $wer = substr($ty, 0, 400) . '..';
     echo $wer;
    }else{
    echo $wer;
  }
}?>
 <?php
if (empty($title)) {
    echo $link[$x];
}?></image:caption>
    <image:title> <?php
  if (strlen($title) > 700)
     echo substr($title, 0, 700) . '..';
    else
      echo $title;?>
 <?php
if (empty($title)) {
  if (strlen($t) > 400){
    $ty = str_replace($d, '', $t);
     $wer = substr($ty, 0, 400) . '..';
     echo $wer;
    }else{
    echo $wer;
  }
}?>
 <?php
if (empty($title)) {
    echo $link[$x];
}?></image:title>
    <image:geo_location>German</image:geo_location>
    <image:license>http://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo convert($link[$x]);?></image:license>
  </image:image>

<?php } ?>
</url>
<?php } ?>
</urlset>