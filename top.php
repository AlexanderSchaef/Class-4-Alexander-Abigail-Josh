<?php
define('PATH_PARTS', array('filename'=> 'index'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SEE: https://moz.com/learn/seo/title-tag</title>
	<meta name="author" content="Aigail Wright">
	<meta name="description" content="SEE: https://moz.com/learn/seo/meta-description">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css"
		href="css/custom.css?version=<?php print time(); ?>">
	<link rel="stylesheet" type="text/css" media="(max-width:800px)"
		href="css/tablet.css?version=<?php print time(); ?>">
	<link rel="stylesheet" type="text/css" media="(max-width:600px)"
		href="css/phone.css?version=<?php print time(); ?>">
	<link rel="icon" href="images/abi.jpg">
</head>

<?php
print '<body>';
print PHP_EOL;
include 'header.php';
print PHP_EOL;
include 'nav.php';
print PHP_EOL;
?>
