<?php include 'header.php';
?>
<div class=postingcat>
	<div class="ads"><?php include('ads.php');?></div>
<?php

$txt = file("asset/home.txt");
for ($i = 0; $i< count($txt); $i++){
$linky = str_replace(array("-","\n","\r"), " ", $txt);
$link = str_replace("  ", "", $linky);
$url = str_replace(array("\n","\r"), "", $txt);
$url_fix = convert($url[$i]);
echo '<div class="related">
	<div class="related_infos">
		<a href="'.str_replace(' ', '-', $url_fix).'">'.$link[$i].'</a>
	</div>';?>

</div>
<?php } ?>
</div>
<?php include('sidebar.php');?>
<?php include('footer.php');?>