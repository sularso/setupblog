<?php include('header.php');

$idd = @$_GET['idd'];
?>
<p class="qwerty">
  <span typeof="v:Breadcrumb"><a href="/">Home</a></span> » <span><?php echo $t;?></span>
</p>
<h1><?php echo $t;?></h1>
<div class="ads">
  <?php include('ads.php');?>
</div>
<?php
$set = '3';
$set2 = '2';
$tam = $idd+$set2;
$kur = $tam-$set;
$ii1 = '1';
$ii2 = $kur+$ii1;
$i1 = $idd+$ii1;

for ($i=$ii2; $i < $i1 ; $i++) { ?>
<div class="jimg">
  <a href=<?php echo "image/".$q2."/".$i1 ?>>
    <img onerror="this.onerror=null;this.src='<?php echo $tu[$i] ?>';" data-src=<?php echo $ou[$i] ?> src="<?php echo $tu[$i] ?>" title='<?php echo $pt[$i]?> <?php echo $tit?>' alt='<?php echo $pt[$i]?> <?php echo $tit?>'>
  </a>
</div>
<div class="ads">
  <?php include('ads2.php');?>
</div>

<div class="navi">
  <?php
  if ($idd<=1) { ?>
    <span class="prev">&larr; Prev Image</span>
  <?php } else { ?>
    <span class="prev"><a href=<?php echo "image/".$q2."/".$kur ?>>&larr; Prev Image</a></span>
  <?php } ?>
  <?php
  if ($idd>=99) { ?>
    <span class="next">Next Image &rarr;</span>
  <?php } else { ?>
    <span class="next"><a href=<?php echo "image/".$q2."/".$i1 ?>>Next Image &rarr;</a></span>
  <?php } ?>
</div>
<div class="clear"></div>
<?php } ?><div class=wakwao>
  <div class="pene">
    <?php echo auto('top');?>
    <p><?php echo $t.' '.$tik;?> is one of best design ideas of the years. The <?php echo $t.' '.$tik;?> has been created with briliant ideas, beautiful combined colors and follow trend of modern home architecture, so the <?php echo $t.' '.$tik;?> will give you the real of home designs and interior decorating characteristic.</p>
  </div><?php include 'share.php';?>
  <div class="clear"></div><?php
for ($i=1; $i <count($oue) ; $i++) {?>
<div class="jpus">
  <div class="jgam">
    <a href=<?php echo "image/".$q2."/".$i ?>>
      <img data-src=<?php echo $ou[$i] ?> src="<?php echo $tu[$i] ?>" onerror="this.onerror=null;this.src='<?php echo $tu[$i] ?>';" title="<?php
echo ucwords($pt[$i]);?>
 <?php
if (empty($pt[$i])) {
     echo ucwords($s[$i]);
}?>
 <?php
if (empty($pt[$i])) {
    echo ucwords($t);
}?>" alt="<?php echo ucwords($pt[$i]);?>
 <?php
if (empty($pt[$i])) {
     echo ucwords($s[$i]);
}?>
 <?php
if (empty($pt[$i])) {
    echo ucwords($t);
}?>">
      </a>
    </div>
      <div class="jtitle"><?php
  if (strlen($pt[$i]) > 70)
     echo strtolower(substr($pt[$i], 0, 70)) . '..';
    else
      echo strtolower($pt[$i]);?>
 <?php
if (empty($pt[$i])) {
  if (strlen($s[$i]) > 40){
     $wer = substr($s[$i], 0, 40) . '..';
     echo strtolower($wer);
    }else{
    echo strtolower($wer);
  }
}?>
 <?php
if (empty($pt[$i])) {
    echo strtolower($t);
}?>
      </div>
    </div><?php } ?>
    <?php include('related.php');?>

  <?php include('sidebar.php');?>
  <?php include('footer.php');?>