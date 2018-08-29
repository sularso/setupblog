<?php
$kw = @$_GET['images'];
$ke = @$_GET['key'];
$t = str_replace('-', ' ', $kw);
$tt = str_replace('-', '+', $kw);
$toti = str_replace('-', ' ', $ke);
$tot = str_replace('-', '+', $ke);?>

<div class="clear"></div><?php
if ($kw) {
    $paload='https://suggestqueries.google.com/complete/search?client=firefox&q='.$tt;
} elseif ($ke) {
   $paload='https://suggestqueries.google.com/complete/search?client=firefox&q='.$tot;
} else {
    $paload='https://suggestqueries.google.com/complete/search?client=firefox&q=home+decorating+ideas';
}
	$tags2 = @file_get_contents($paload);
    $tagsArray = explode(',', $tags2);
    $tagsLinksArray = array();
    foreach($tagsArray as $tag) {
        $tagk = trim($tag);
        $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+','_','®');
        $tagName = str_replace($d, '', $tagk);
        $take = str_replace(' ', '-', $tagName);
        $tagsLinksArray[] = '<a href='.$take.'>'.$tagName.'</a>';}
    $tagsLinks = implode(', ', $tagsLinksArray);		
echo '<div class=take><b></b></div>';?>
<div class="other">
    <h2>Other Post to <?php echo $t.$toti; ?></h2>
    <ul><?php
$awas=array_rand($key,2);
$filename = $key[$awas[0]];
$txt = file($filename);
for ($i = 0; $i< 10; $i++){
$linky = str_replace(array("-","\n","\r"), " ", $txt);
$link = str_replace("  ", "", $linky);
$url = str_replace(array("\n","\r"), "", $txt);
  echo "<li><a href=".convert($url[$i]).">".$link[$i]."</a></li>"; }?>
      
    </ul>
  </div>
</div><!--aw-->