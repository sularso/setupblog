<!DOCTYPE html>
<html>
<head>
	<meta name="robots" content="noindex,nofollow" />
	<meta name="googlebot-Image" content="noindex,nofollow" />
	<meta name="description" content="" />
	<title><?php echo $_SERVER['SERVER_NAME'];?></title>
</head>
<body>
	<form action="" method='GET'>
                <input type="text" name="qw" placeholder="keyword ..." />
                <button name='submit' value="submit">Search</button>
        </form>
<?php
$q = @$_GET['qw'];
if ($q) {
    include 'kom.php';
} else {
    echo "";
}?>
</body>
</html>