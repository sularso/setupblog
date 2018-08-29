<?php
include 'function.php';
if (@$_GET['images']) { 
$tt = str_replace('-', ' ', @$_GET['images']);
$t = ucwords($tt); ?>
<title><?php echo $t ?> <?php for ($i = 0; $i< 1; $i++){
$asa= $pt[$i];
$ass = $asa;
$as = str_replace('  ', ' ', $ass);
echo $as;}?></title>
<meta name="googlebot" content="index,follow,imageindex">
<meta name="robots" content="index,follow">
<meta name="googlebot-Image" content="all,index,follow">
<meta name="description" itemprop="description" content="<?php echo $t ?>,<?php echo $as ?>, isi deskripsi disini">
<?php
    $pay='https://suggestqueries.google.com/complete/search?client=firefox&q='.str_replace('-', '+', @$_GET['images']); 
    $meta = @file_get_contents($pay);
    $met = explode(',', $meta);
    $arr = array();
    foreach($met as $mem) {
        $kla = trim($mem);
        $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+','_','®','u0026','u003e','u0027');
        $keyne = str_replace($d, '', $kla);
        $res = str_replace(' ', '-', $keyne);
        $arr[] = $keyne;}
    $hasil = implode(', ', $arr);?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:locale" content="en_GB">
<meta property="og:locale:alternate" content="it_IT">
<meta property="og:locale:alternate" content="de_DE">
<meta property="og:locale:alternate" content="fr_FR">
<meta property="og:locale:alternate" content="cz_CZ">
<meta property="og:type" content="article" />
<meta property="og:title" content="<?php echo $t ?>" />
<link rel="canonical" href="<?php echo @$_GET['images']?>" />
<meta property="og:description" content="isi deskripsi disini" />
<meta property="og:site_name" content="<?php echo $_SERVER['SERVER_NAME'] ?>" />

<?php 
} elseif (@$_GET['key']) { 
$tt = str_replace('-', ' ', @$_GET['key']);
$t = ucwords($tt); ?>
<title><?php echo $t ?> <?php for ($i = 0; $i< 2; $i++){
$asa=$pt[$i];
$ass = $asa;
$as = str_replace('  ', ' ', $ass);
echo $as;}?></title>
<meta name="googlebot" content="index,follow,imageindex">
<meta name="robots" content="index,follow">
<meta name="googlebot-Image" content="all,index,follow">
<meta name="description" itemprop="description" content="<?php echo $t ?>,<?php echo $as ?> isi deskripsi disini">
<?php
    $pay='https://suggestqueries.google.com/complete/search?client=firefox&q='.str_replace('-', '+', @$_GET['key']); 
    $meta = @file_get_contents($pay);
    $met = explode(',', $meta);
    $arr = array();
    foreach($met as $mem) {
        $kla = trim($mem);
        $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+','_','®','u0026','u003e','u0027');
        $keyne = str_replace($d, '', $kla);
        $res = str_replace(' ', '-', $keyne);
        $arr[] = $keyne;}
    $hasil = implode(', ', $arr);?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:locale" content="en_GB">
<meta property="og:locale:alternate" content="it_IT">
<meta property="og:locale:alternate" content="de_DE">
<meta property="og:locale:alternate" content="fr_FR">
<meta property="og:locale:alternate" content="cz_CZ">
<meta property="og:type" content="article" />
<meta property="og:title" content="<?php echo $t ?>" />
<link rel="canonical" href="<?php echo $_SERVER['REQUEST_URI'] ?>" />
<meta property="og:description" content="isi deskripsi disini" />
<meta property="og:site_name" content="<?php echo $_SERVER['SERVER_NAME'] ?>" />

<?php } else { ?>
<?php 
    $halarr = array('-','.aspx','/');
    $halarr2 = array(' ','','');
    $servertitle = $_SERVER['REQUEST_URI'];
    $titlehal = ucwords(str_replace($halarr,$halarr2,$servertitle));

?>
<meta content="general" name="rating"/>
<meta content="global" name="distribution"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name='robots' content='all,index,follow' />
<link rel="canonical" href="<?php echo $_SERVER['REQUEST_URI'] ?>" />
<title><?php echo (!empty($titlehal))? $titlehal:'Home' ?> | Decoratingfree</title>
<meta name="description" itemprop="description" content="<?php echo ucwords($titlehal) ?>, isi deskripsi disini">
<?php } ?>