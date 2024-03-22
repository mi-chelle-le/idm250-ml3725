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

/**
 * Get menu items as a flat array to use for custom markup
 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
 * @param string $menu_name - Name of the registered menu id
 * @return array $menu_items - Array of WP_Post objects.
 */
function get_theme_menu($menu_name)
{
    // Get menu items as a flat array
    $locations = get_nav_menu_locations();
    // If menu doesn't exist, let's just return an empty array
    if (!isset($locations[$menu_name])) {
        return [];
    }
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id, ['order' => 'DESC']);
    
    // Update each menu item to include a string of classes
    foreach ($menu_items as &$item) {
        if (!empty($item->classes) && is_array($item->classes)) {
            // Concatenate all class names into a single string
            $item->classes = implode(' ', $item->classes);
        } else {
            // Ensure classes is always a string, even if empty
            $item->classes = '';
        }
    }
    unset($item); // Break the reference with the last element

    return $menu_items;
}


// Enable featured images
add_theme_support('post-thumbnails');

// Enable excerpt
add_post_type_support('page', 'excerpt');

// Create custom post type called jewelry
function register_custom_post_types()
{
    // Register Jewelry post type
    $jewelry_args = [
        'labels' => [
            'name' => 'Jewelry',
            'singular_name' => 'Jewelry',
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'jewelry'],
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'menu_position' => 5,
        'show_in_rest' => true,
    ];
    $jewelry_post_type_name = 'jewelry';

    register_post_type($jewelry_post_type_name, $jewelry_args);

    // Register Reviews post type
    $review_args = [
        'labels' => [
            'name' => 'Reviews',
            'singular_name' => 'Review',
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'reviews'],
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'menu_position' => 5,
        'show_in_rest' => true,
    ];
    $review_post_type_name = 'review';

    register_post_type($review_post_type_name, $review_args);
}

add_action('init', 'register_custom_post_types');