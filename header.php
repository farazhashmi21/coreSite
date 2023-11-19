<!DOCTYPE html>
<!--
	WordPress Official Website: https://wordpress.org/
	WordPress Developer Tutorials: https://developer.wordpress.org/
	WordPress block editor: https://wordpress.org/documentation/article/wordpress-block-editor/
	Wordpress Documentation: https://wordpress.org/documentation/
	Vs Code Official WebSite: https://code.visualstudio.com/
	Vs Code Documentation: https://code.visualstudio.com/docs/
	Vs Code Extensions: https://marketplace.visualstudio.com/VSCode
-->

<html lang="en-US">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Core Site</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style-grid.css"/>
</head>
<body onLoad = "displ();">
	<!-- Header Start -->
<div class="grid-header">
	<div class="grid-items-header">
		<p id="logoElement">cS</p>
	</div>
	<div class="grid-items-header" id="logo-grid-span">
		<h1>Core Site</h1>
		<p>Clogan</p>
	</div>
</div>
<!-- Header End -->
<!-- Navigation File Add Start -->
<?php
  require('main-nav-links.php');
?>
<!-- Navigation File Add End -->
<!-- Hero Section Start -->
<div class="hero-section">
	<h2>Core Site</h2>
</div>
<!-- Hero Section End -->
