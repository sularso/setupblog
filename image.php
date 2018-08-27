<?php include('header.php');
//$q1 = str_replace('-', ' ', $q1); ?>
<div class="wakwao">
<p class="qwerty">
  <span typeof="v:Breadcrumb"><a href="/">Home</a></span> » <span typeof="v:Breadcrumb"><?php echo $t;?></span></p>
  <h1><?php echo $t;?></h1>
<div class="ads">
  <?php include('ads.php');?>
</div>
<div class="jimg"><?php
for ($i=0; $i <1 ; $i++) { ?>
<img data-src=<?php echo $ou[$i] ?> src="<?php echo $tu[$i] ?>" onerror="this.onerror=null;this.src='<?php echo $tu[$i] ?>';" title='<?php echo ucwords($pt[$i]);?>' alt='<?php echo ucwords($pt[$i]);?>'>
<?php } ?>
  </div>
<div class="ads">
    <?php include('ads2.php');?>
</div>
<div class="pene"><?php echo auto('top');?>
<br>

<br>
<p>Thank you for visiting at this website. Listed below is a fantastic graphic for <?php echo $t;?>. We have been searching for this image through on-line and it came from trustworthy resource. If youre searching for any new fresh plan for your own home then the <?php echo $t;?> image needs to be on top of resource or you might use it for an alternative concept.</p><p>This picture has been published by admin tagged in category field. And we also trust it can be the most well liked vote in google vote or event in facebook share. Hopefully you like it as we do. If possible share this <?php echo $t;?> image to your mates, family through google plus, facebook, twitter, instagram or any other social media site.</p><p>You can also leave your suggestions,review or opinion why you love this picture. So that we are able to bring more beneficial information on next posts. We thank you for your visit to our website. Make sure you get the information you are looking for. Do not forget to share and love our reference to help further develop our website.</p></div><?php include 'share.php';?><div class="clear"></div><?php
for ($i=1; $i <count($oue) ; $i++) {?>
<div class="jpus">
  <div class="jgam">
    <a href=<?php echo "image/".$q1."/".$i ?>>
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
  if (strlen($pt[$i]) > 70){
     echo strtolower(substr($pt[$i], 0, 70)) . '..';
    }else{
      echo strtolower($pt[$i]);
    }?>
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