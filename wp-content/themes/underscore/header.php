<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscore
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700i" rel="stylesheet">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/vidage.min.css">

<?php wp_head(); ?>
</head>

<body class="Vidage--allow" <?php body_class(); ?>>

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'underscore' ); ?></a>

	<div class="navbar main-navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img class="inline-block" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo2.png"></a>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#development">Development</a></li>
					<li><a href="#digital-marketing">Marketing</a></li>
					<li><a href="#branding">Branding</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="<?php bloginfo('url'); ?>/about-us">About Us</a></li>
					<li><a href="<?php bloginfo('url'); ?>/our-work">Our Work</a></li>
					<li><a href="<?php bloginfo('url'); ?>/contact-us">Contact Us</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>


