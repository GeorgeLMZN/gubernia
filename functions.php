<?php

add_filter('show_admin_bar', '__return_false');

remove_action('wp_head',             'print_emoji_detection_script', 7 );
remove_action('admin_print_scripts', 'print_emoji_detection_script' );
remove_action('wp_print_styles',     'print_emoji_styles' );
remove_action('admin_print_styles',  'print_emoji_styles' );
remove_action('wp_head', 'wp_resource_hints', 2 ); //remove dns-prefetch
remove_action('wp_head', 'wp_generator'); //remove meta name="generator"
remove_action('wp_head', 'wlwmanifest_link'); //remove wlwmanifest
remove_action('wp_head', 'rsd_link'); // remove EditURI
remove_action('wp_head', 'rest_output_link_wp_head');// remove 'https://api.w.org/
remove_action('wp_head', 'rel_canonical'); //remove canonical
remove_action('wp_head', 'wp_shortlink_wp_head', 10); //remove shortlink
remove_action('wp_head', 'wp_oembed_add_discovery_links'); //remove alternate
add_action('wp_enqueue_scripts', 'site_scripts');

function site_scripts () {
    $version = '0.0.0';
    wp_dequeue_style('wp-block-library');
    wp_deregister_script('wp-embed');
  
    wp_enqueue_style("normalize",  get_template_directory_uri() . "/assets/styles/normalize.css" , [], $version);
    wp_enqueue_style("main-style",  get_template_directory_uri() . "/assets/styles/main.css", [], $version);
    wp_enqueue_style("adopt-style",  get_template_directory_uri() . "/assets/styles/adopt.css", [], $version);

    wp_enqueue_script("main-js", get_template_directory_uri() . "/assets/js/script.js", [], $version, true);
}

add_action( 'after_setup_theme', 'crb_load' );

add_action( 'after_setup_theme', 'theme_support' );

function theme_support () {
    add_theme_support('post-thumbnails');
    add_image_size('city', 'full');
} 

function crb_load() {
    require_once('includes/carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}


add_action('carbon_fields_register_fields', 'register_carbon_fields');

function register_carbon_fields () {
    require_once('includes/carbon-fields-options/theme-options.php' );
}
add_action( 'init', 'register_post_types' );
function register_post_types() {
  register_post_type('city', [
    'labels' => [
      'name'               => 'Города', // основное название для типа записи
      'singular_name'      => 'Город', // название для одной записи этого типа
      'add_new'            => 'Добавить город', // для добавления новой записи
      'add_new_item'       => 'Добавление города', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование города', // для редактирования типа записи
      'new_item'           => 'Новый город', // текст новой записи
      'view_item'          => 'Смотреть город', // для просмотра записи этого типа.
      'search_items'       => 'Искать город', // для поиска по этим типам записи
      'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
      'menu_name'          => 'Города', // название меню
    ],
    'menu_icon'          => 'dashicons-building',
    'public'             => true,
    'menu_position'      => 5,
    'supports'           => ['title'],
    'has_archive'        => true,
    'rewrite'            => ['slug' => 'products']
   ] );
}