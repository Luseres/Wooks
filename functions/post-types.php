<?php

add_action('init', 'register_post_types');
function register_post_types()
{
    register_post_type('reasons', array(
        'labels'              => array(
            'name'          => __('Redenen', 'wooks'),
            'singular_name' => __('Reden', 'wooks'),
            'add_new'       => __('Reden Toevoegen', 'wooks')
        ),
        'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => true,
        'has_archive'         => true,
        'rewrite'             => array('slug' => 'reasons', 'with_front' => true),
        'supports'            => array('title', 'thumbnail', 'editor'),
        'can_export'          => true,
        'menu_icon'           => 'dashicons-welcome-view-site',
    ));
}
