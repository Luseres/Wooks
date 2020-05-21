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
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<script src="<?php echo THEME_URL; ?>/resources/js/animations.js"></script>
	<title><?= bloginfo('name'); ?> • Books for everyone</title>
	<link rel="shortcut icon" href="<?php echo get_site_icon_url(); ?>" />
</head>

<body <?php body_class(); ?>>
	<header class="header">
		<a href="/" class="header__logo">
			<img src="<?php echo THEME_URL; ?>/resources/images/logo_color.svg" alt="">
		</a>

		<div class="desktop-menu">
			<a href="/" class="menu__link menu__link--active">
				Home
			</a>

			<a href="/subscriptions" class="menu__link">
				Subscriptions
			</a>

			<a href="/my-account?signin" class="menu__link">
				Sign in
			</a>

			<a href="/my-account?signup">
				<button class="wooks__button header__signup">Sign up</button>
			</a>

			<a href="<?= wc_get_cart_url() ?>">
				<img class="menu__shoppingcart" src="<?php echo THEME_URL; ?>/resources/images/icons/shoppingcart_black.svg" alt="Shopping cart">
			</a>
		</div>

		<div class="mobile-menu">
			<input type="checkbox" id="nav-checkbox" style="display: none">
			<label for="nav-checkbox" class="hamburger-menu">
				<div></div>
				<div></div>
				<div></div>
			</label>

			<nav class="mobile-menu__nav">
				<a href="/" class="menu__link menu__link--active">
					Home
				</a>

				<a href="/subscriptions" class="menu__link">
					Subscriptions
				</a>

				<a href="/my-account?signin" class="menu__link">
					Sign in
				</a>

				<a href="/my-account?signup">
					<button class="wooks__button header__signup">Sign up</button>
				</a>

				<a href="<?= wc_get_cart_url() ?>">
					<img class="menu__shoppingcart" src="<?php echo THEME_URL; ?>/resources/images/icons/shoppingcart_black.svg" alt="Shopping cart">
				</a>
			</nav>
		</div>
	</header>