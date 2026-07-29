<?php

function yuumi_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menus([
        'primary' => 'メインメニュー',
        'footer'  => 'フッターメニュー',
    ]);
}
add_action('after_setup_theme', 'yuumi_setup');

function yuumi_enqueue_assets() {
    wp_enqueue_style('yuumi-style', get_stylesheet_uri(), [], '2.0.0');
}
add_action('wp_enqueue_scripts', 'yuumi_enqueue_assets');
