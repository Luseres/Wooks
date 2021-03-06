<?php
global $woocommerce;
global $wp;
$items = $woocommerce->cart->get_cart();
$routes = explode('/', $_SERVER['REQUEST_URI']);
$current_route = (end($routes) != '') ? end($routes) : $routes[count($routes) - 2];
?>
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
		<div class="desktop-menu">
			<a href="<?= get_site_url() ?>" class="logo">
				<img src="<?php echo THEME_URL; ?>/resources/images/logo_color.svg" alt="">
			</a>

			<a href="<?= get_site_url() ?>" class="menu__link <?php if (is_front_page()) echo "route--active"; ?>">
				Home
			</a>

			<a href="<?= get_site_url() ?>/subscriptions" class="menu__link <?php if ($current_route == 'subscriptions') echo "route--active"; ?>">
				Subscriptions
			</a>

			<?php if (is_user_logged_in()) : ?>
				<a href="<?= get_site_url() ?>/genre-finder" class="menu__link">
					Find your genre
				</a>
				<a href="<?= get_site_url() ?>/my-account" class="menu__link">
					My Account
				</a>
				<a href="<?= wp_logout_url('/my-account/?signin') ?>" class="menu__link">
					Logout
				</a>
			<?php else : ?>
				<a href="<?= get_site_url() ?>/my-account?signin" class="menu__link <?php if ($current_route == '?signin') echo "route--active"; ?>">
					Sign in
				</a>
				<a href="<?= get_site_url() ?>/my-account?signup" class="no-decoration <?php if ($current_route == '?signup') echo "route--active"; ?>">
					<button class="button button--secondary header__signup">
						<span>Sign up</span>
					</button>
				</a>
			<?php endif; ?>


			<a href="<?= wc_get_cart_url() ?>" class="header__shoppingcart <?php if ($current_route == 'cart') echo "route--active"; ?>">
				<img class="header__shoppingcart__image" src="<?php echo THEME_URL; ?>/resources/images/icons/shoppingcart_black.svg" alt="Shopping cart">
				<span class="header__shoppingcart__number"><?= $woocommerce->cart->cart_contents_count ?></span>
			</a>
		</div>

		<div class="mobile-menu">
			<a href="<?= get_site_url() ?>" class="logo">
				<img src="<?php echo THEME_URL; ?>/resources/images/logo_color.svg" alt="">
			</a>

			<input type="checkbox" id="nav-checkbox" style="display: none">
			<label for="nav-checkbox" class="hamburger-menu">
				<div></div>
				<div></div>
				<div></div>
			</label>

			<nav class="mobile-menu__nav">
				<a href="/" class="menu__link <?php if (is_front_page()) echo "route--active"; ?>">
					Home
				</a>

				<a href="/subscriptions" class="menu__link <?php if ($current_route == 'subscriptions') echo "route--active"; ?>">
					Subscriptions
				</a>


				<?php if (is_user_logged_in()) : ?>
					<a href="<?= get_site_url() ?>/genre-finder" class="menu__link">
						Genre Finder
					</a>
					<a href="<?= get_site_url() ?>/my-account" class="menu__link">
						My Account
					</a>
					<a href="<?= wp_logout_url('/my-account/?signin') ?>" class="menu__link">
						Logout
					</a>
				<?php else : ?>
					<a href="<?= get_site_url() ?>/my-account?signin" class="menu__link <?php if ($current_route == '?signin') echo "route--active"; ?>">
						Sign in
					</a>
					<a href="<?= get_site_url() ?>/my-account?signup" class="no-decoration <?php if ($current_route == '?signup') echo "route--active"; ?>">
						<button class="button button--secondary header__signup">
							<span>Sign up</span>
						</button>
					</a>
				<?php endif; ?>

				<a href="<?= wc_get_cart_url() ?>" class="shoppingcart-link <?php if ($current_route == 'cart') echo "route--active"; ?>">
					<span>Shoppingcart</span>
					<img src="<?php echo THEME_URL; ?>/resources/images/icons/shoppingcart_black.svg" alt="Shopping cart">
				</a>
			</nav>
		</div>
	</header>