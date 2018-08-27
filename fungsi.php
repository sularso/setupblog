<?php
function auto($get){

$q = @$_GET['images'];
$t = str_replace('-', ' ', $q);

$sifat=array("fascinating","inspiring","oustanding", "appealing", "terrific", "surprising", "awesome");
$sifat_random=array_rand($sifat,2);

$gambar=array("image","photo","digital imagery", "pic", "wallpaper", "photograph", "digital photography");
$gambar_random=array_rand($gambar,2);

$bagiandari=array("is part of","is segment of","is other parts of", "is section of");
$bagiandari_random=array_rand($bagiandari,2);

$bagiantag=array("sorted ","grouped","arranged", "listed", "classed");
$bagiantag_random=array_rand($bagiantag,2);

$diposkan=array("posted ","published");
$diposkan_random=array_rand($diposkan,2);

$resolusi=array("high a size","high resolution", "high definition");
$resolusi_random=array_rand($resolusi,2);

$tarik=array("interested","fascinated", "extracted");
$tarik_random=array_rand($tarik,2);

    if ($get == 'top'){

        $autodesc = '<p>The '.$sifat[$sifat_random[0]].'&nbsp;' .$gambar[$gambar_random[0]].'&nbsp;' .$bagiandari[$bagiandari_random[0]]. ' which is '.$bagiantag[$bagiantag_random[0]].' within category and '.$diposkan[$diposkan_random[0]].' by admin. If you feel '.$tarik[$tarik_random[0]].' and want to download images. Please select an image you like and then after that, please save it to your device. The '.$sifat[$sifat_random[1]].'&nbsp;'.$gambar[$gambar_random[1]].'&nbsp;'.$bagiandari[$bagiandari_random[1]].' '.$t.' & has '.$resolusi[$resolusi_random[0]].' ';

      }
    return $autodesc;
  }

  ?>