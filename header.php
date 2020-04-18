<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7]>
<html class="lt-ie9 lt-ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]>
<html class="lt-ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9]>
<html class="ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 9]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="stylesheet" href="<?php echo THEME_URL; ?>/resources/app.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<title><?= get_option('sitename'); ?></title>
	<link rel="shortcut icon" href="<?php echo get_site_icon_url(); ?>" />
</head>

<body <?php body_class(); ?>>
	<header>
		<div class="header__section">
			<a href="/"><img src="<?php echo THEME_URL; ?>/resources/images/logo_color.svg" alt="" class="header__logo"></a>
		</div>
		<div class="header__section"></div>
		<div class="header__section">
			<ul class="header__menu">
				<a href="/" class="menu__link menu__link--active">
					<li class="menu__item">Home</li>
				</a>
				<a href="/subscriptions" class="menu__link">
					<li class="menu__item">Subscriptions</li>
				</a>
				<a href="/my-account?signin" class="menu__link">
					<li class="menu__item">Sign in</li>
				</a>
			</ul>
			<a href="/my-account?signup"><button class="wooks__button header_signup">Sign up</button></a>
			<a href="<?= wc_get_cart_url() ?>"><img class="menu__shoppingcart" src="<?php echo THEME_URL; ?>/resources/images/icons/shoppingcart_black.svg" alt="Shopping cart"></a>
		</div>
	</header>