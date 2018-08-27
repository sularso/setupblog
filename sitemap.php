<?php
header("Content-type: text/xml");
echo '<?xml version="1.0" encoding="UTF-8"?>';?>
<sitemapindex xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/siteindex.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<sitemap>
<loc>http://<?php echo $_SERVER['SERVER_NAME'];?>/sitemap-image.xml</loc>
	<lastmod>2018-10-27</lastmod>
</sitemap>
<?php  
 $bil = 0;
 while($bil<=20){?>
 <?php
  $bil++;
  echo "
<sitemap>
<loc>http://".$_SERVER['SERVER_NAME']."/sitemap-".$bil.".xml</loc>
	<lastmod>2017-10-27</lastmod>
</sitemap>";
   
 }
?>
</sitemapindex>