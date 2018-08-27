<?php include('header.php');?>
<div id="contentmenu">
  <div class="ads">
    <?php include('ads.php');?></div>
<div id="xmap">
  <h1>Sitemap</h1>
<?php
$txt1 = file("sitemap/1.txt");
$txt2 = file("sitemap/2.txt");
$txt3 = file("sitemap/3.txt");
$txt4 = file("sitemap/4.txt");
?>
    <ul class="level_0">
      <h2>Wohndesign</h2>
        <ul class="level_1">
          <?php for ($i = 0; $i< 20; $i++){
          $lin1 = str_replace('-', ' ', $txt1);
          echo "<li><a href=$txt1[$i]>".convert($lin1[$i])."</a></li>";} ?>
        </ul>
      <h2>Haus möbel</h2>
        <ul class="level_1">
          <?php for ($i = 0; $i< 20; $i++){
          $lin2 = str_replace('-', ' ', $txt2);
          echo "<li><a href=$txt2[$i]>".convert($lin2[$i])."</a></li>";} ?>
        </ul>
      <h2>Minimalistisch</h2>
        <ul class="level_1">
          <?php for ($i = 0; $i< 20; $i++){
          $lin3 = str_replace('-', ' ', $txt3);
          echo "<li><a href=$txt3[$i]>".convert($lin3[$i])."</a></li>";} ?>
        </ul>
      <h2>Startseite Kleiner Raum</h2>
        <ul class="level_1">
          <?php for ($i = 0; $i< 20; $i++){
          $lin4 = str_replace('-', ' ', $txt4);
          echo "<li><a href=$txt4[$i]>".convert($lin4[$i])."</a></li>";} ?>
        </ul>
    </ul>
</div>
</div>
	<?php include('sidebar.php');?>
	<?php include('footer.php');?>