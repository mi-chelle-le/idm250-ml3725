<?php

function theme_scripts_and_styles()
{
    // Enqueue a custom script
    // wp_enqueue_script('idm-tailwind-script', 'https://cdn.tailwindcss.com');
    wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/50102ff172.js', array(), null, false );
    wp_enqueue_script('idm-main-script', get_template_directory_uri() . '/dist/scripts/main.js', [], false, ['in_footer' => true]);

    // Enqueue a custom style
    // wp_enqueue_style('idm-normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css');
    wp_enqueue_style('idm-main-style', get_template_directory_uri() . '/dist/styles/style.css');
}

add_action('wp_enqueue_scripts', 'theme_scripts_and_styles');

function register_theme_menus()
{
    register_nav_menus([
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu',
        '404-menu' => '404 Menu'
    ]);
}
add_action('init', 'register_theme_menus');

add_filter('wp_nav_menu_items', 'wrap_menu_item_in_button', 10, 2);

function wrap_menu_item_in_button($items, $args) {
    if (in_array($args->theme_location, array('primary', 'footer'))) {
        $find = '<li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20">';
        $replace = '<button><li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20">';
        $items = str_replace($find, $replace, $items);
        $find = '</li>';
        $replace = '</button></li>';
        $items = str_replace($find, $replace, $items);
        $find = '<li id="menu-item-27" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27">';
        $replace = '<button><li id="menu-item-27" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27">';
        $items = str_replace($find, $replace, $items);
        $find = '</li>';
        $replace = '</button></li>';
        $items = str_replace($find, $replace, $items);
    }
    return $items;
}