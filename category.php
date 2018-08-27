<?php include 'header.php';
$qw = @$_GET['cat'];
$search = $qw;?>
    <div class="h1in">
      <h1>Category <?php echo $qw?></h1>
    </div>
    <div class=postingcat>
      <div class="ads"></div>
    	<?php 
$lines = file('sitemap/1.txt');
$found = false;
foreach($lines as $line){
	$jk = str_replace('-', ' ', $line);
  if(strpos($line, $search) !== false){
    $found = true;?>
    <div class="related">
<div class="related_infos">
	<a href=<?php echo $line?>><?php 
	if (strlen($jk) > 30)
     echo strtolower(substr($jk, 0, 30)) . '..';
    else
      echo strtolower($jk);?></a>
</div>
</div>
 <?php }
}if(!$found){
  echo 'No match found';
}?>

</div>
<?php include('sidebar.php');?>
<?php include('footer.php');?>
