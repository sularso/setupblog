
<div id="sidebar">
	<div class="sidkot">
		<h3 class="jenengsidebar">Category</h3>
			<div class="ads">
				<?php include('ads3.php');?>
			</div>
<?php

$txtcat = file("asset/cat.txt");
for ($i = 0; $i< count($txtcat); $i++){
$li = str_replace(array("-","\n","\r"), " ", $txtcat);
$ul = str_replace("  ", "", $li);
$ol = str_replace(array("\n","\r"), "", $txtcat);
$con = convert($ol[$i]);
$url_cat = str_replace(' ', '-', $con);?>

		<div class="pop">
			<a href=<?php echo '"category/'.strtolower($url_cat).'/"';?>><p></p><?php echo $ul[$i];?></a>
		</div>
<?php } ?>
	</div>
	<div class="sidkot">
		<h3 class="jenengsidebar">Popular Post</h3>
<?php
$txt = file("asset/home.txt");
for ($i = 10; $i< 35; $i++){
$linky = str_replace(array("-","\n","\r"), " ", $txt);
$link = str_replace("  ", "", $linky);
$url = str_replace(array("\n","\r"), "", $txt);
$url_fix = convert($url[$i]);

?>
		<div class="pop">
			<a href=<?php echo '"'.str_replace(' ', '-', $url_fix).'"';?>><p></p><?php echo $link[$i];?></a>
		</div>
<?php } ?>
	</div>
</div>
