<?php
error_reporting(0); 
include ('asset/tool.php');?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<base href="/" />
<meta charset='utf-8'/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include ('meta.php'); ?><?php include ('fungsi.php'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
<link rel="stylesheet" type="text/css" href="asset/style.css">
<link rel="apple-touch-icon" href="upload/favicon.png" />
<link rel="shortcut icon" href="upload/favicon.png" />
<link rel="apple-touch-icon" sizes="192x192" href="upload/favicon-192x192.png" />
<link rel="apple-touch-icon" sizes="144x144" href="upload/favicon-144x144.png" />
<link rel="apple-touch-icon" sizes="114x114" href="upload/favicon-114x114.png" />
<link rel="apple-touch-icon" sizes="72x72" href="upload/favicon-72x72.png" />
<link rel="apple-touch-icon" sizes="32x32" href="upload/favicon-32x32.png" />
<link rel="apple-touch-icon-precomposed" href="upload/favicon-180x180.png" />
<meta name="msapplication-TileImage" content="<?php echo $_SERVER['SERVER_NAME'] ?>/upload/favicon-270x270.png" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
function init() {
	var imgDefer = document.getElementsByTagName('img');
	for (var i=0; i<imgDefer.length; i++) {
	if(imgDefer[i].getAttribute('data-src')) {
	imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));} } }
window.onload = init;
</script>
<script type="text/javascript">
window.onscroll = function() {
	scrollFunction()};
function scrollFunction() {
	if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
		document.getElementById("gotop").style.display = "block";
	} else {
		document.getElementById("gotop").style.display = "none";}}
function topFunction(){$('html, body').animate({scrollTop : 0},500);}
</script>
<script type="text/javascript">
jQuery(document).ready(function($){
$(document).keydown(function(event) { 
        var pressedKey = String.fromCharCode(event.keyCode).toLowerCase();
        if (event.ctrlKey && (pressedKey == "i" || pressedKey == "u" || pressedKey == "j")) {
            //alert('Sorry, This Functionality Has Been Disabled!'); 
            //disable key press porcessing
            return false; }});});
</script>
<script type='text/javascript'>
//<![CDATA[
$(document).ready(function() {
    var stickyNavTop = $('#gerak').offset().top;
    var stickyNav = function(){
        var scrollTop = $(window).scrollTop();
        if (scrollTop > stickyNavTop) {
            $('#gerak').css({ 'position': 'fixed', 'top':0, 'z-index':9999 });
        } else {
            $('#gerak').css({ 'position': 'relative' });
        }
    };
    stickyNav();
    $(window).scroll(function() {
        stickyNav();
    });
});
//]]>
</script>

</head>
<body >
<div id="pusat">
<?php if (@$_GET['images']) { ?>
	<div class="headphoto">
		<a href="/" title="Home" rel="home"><?php echo "Decoratingfree" ?></a>
	</div>
<?php } elseif (@$_GET['cat']) { ?>
	<div class="headphoto">
		<a href="/" title="Home" rel="home"><?php echo "Decoratingfree" ?></a>
	</div>
<?php } elseif (@$_GET['key']) { ?>
	<div class="headphoto">
		<a href="/" title="Home" rel="home"><?php echo "Decoratingfree" ?></a>
	</div>
<?php } else { ?>
	<div class="headphoto">
		<h1><a href="/" title="Home" rel="home"><?php echo "Decoratingfree" ?></a></h1>
	</div>
<?php } ?>
	<div class="clear">
		<p class="taglinene">Home Design Inspiration</p>
	</div>
<div class="naveresi">
	<div class="navebro">
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="contact.aspx" rel="nofollow">Contact Us</a></li>
			<li><a href="privacy-policy.aspx" rel="nofollow">Privacy Policy</a></li>
			<li><a href="disclaimer.aspx" rel="nofollow">Disclaimer</a></li>
			<li><a href="dmca.aspx" rel="nofollow">DMCA</a></li>
			<li><a href="sitemap.aspx">Sitemap</a></li>
		</ul>
		<div class="turun"><button class="dropbtn">Menu</button>
			<div class="medun-isi"><a href="/">Home</a>
				<a href="contact.aspx" rel="nofollow">Contact Us</a>
				<a href="privacy-policy.aspx" rel="nofollow">Privacy Policy</a>
				<a href="disclaimer.aspx" rel="nofollow">Disclaimer</a>
				<a href="dmca.aspx" rel="nofollow">DMCA</a>
				<a href="sitemap.aspx">Sitemap</a>
			</div>
		</div>
	</div>
</div>
