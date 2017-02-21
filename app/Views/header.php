<?php

if (isset($_GET['page'])) {
	$title = ucfirst($_GET['page']);
} else {
	$title = 'Perpustakaan';
}

?>

<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?></title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>