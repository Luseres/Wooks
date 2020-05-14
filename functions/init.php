<?php

define('THEME_URL',  get_template_directory_uri());
add_theme_support('menus');
add_theme_support('automatic-feed-links');
add_theme_support('post-formats', array('quote', 'image', 'gallery', 'video'));
add_theme_support('get_avatar');
add_theme_support('wp_list_comments');
add_theme_support('post-thumbnails');
add_theme_support('woocommerce');
add_image_size('custom-thumbnail-image-size', 570, 380, true);
add_filter('loop_shop_per_page', 'wooks_loop_shop_per_page', 6);

function wooks_loop_shop_per_page()
{
    return 6;
}

require_once get_parent_theme_file_path('functions/post-types.php');
require_once get_parent_theme_file_path('functions/menus.php');
