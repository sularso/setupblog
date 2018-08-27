<?php
header("Content-type: text/xml");
include 'asset/tool.php';
include 'function.php';

$awas=array_rand($key,2);
$filename = $key[$awas[0]];
$linky = file($filename);
$urls = str_replace(array("\n","\r"), " ", $linky);
$filectime = filectime($filename);
$urls = array_map('trim',$urls);
$sitemap = array();
foreach($urls as $url) {
	if ($url != '') {
		$priority = '1.0';
		$sitemap[] = array(
			'loc' => convert($url),
			'lastmod' => date('Y-m-d',$filectime),
			'changefreq' => 'always',
			'priority' => $priority,
		);
	}
} echo '<?xml version="1.0" encoding="UTF-8"?>';?>
<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/siteindex.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<url>
<loc>http://<?php echo $_SERVER['SERVER_NAME'];?></loc>
	<lastmod>2017-10-27</lastmod>
</url>
<url>
<loc>http://<?php echo $_SERVER['SERVER_NAME'];?>/sitemap-image.xml</loc>
	<lastmod>2017-10-27</lastmod>
</url>
<?php
	foreach ($sitemap as $link) {?>

<url>
<loc>http://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo htmlentities($link['loc']);?></loc>
	<lastmod><?php echo "{$link['lastmod']}";?></lastmod>
</url>
<?php } ?>
</urlset>