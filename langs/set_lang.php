<?php
switch ($_SESSION['language']) {
case 'English':
	include_once $path."langs/english.php";
	break;
default:
	$_SESSION['language'] = "English";
	include_once $path."langs/english.php";
	break;
}
?>
