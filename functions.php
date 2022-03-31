<?php

// ładowanie styli [tailwind 2.2.19 + wymagany przez WP style.css]
function stylesheets() {
wp_register_style( 'style', get_template_directory_uri() . '/style.css', array(), false, 'all' );
 wp_enqueue_style( 'style' );

 wp_register_style( 'tailwind', get_template_directory_uri() . '/public/styles.css', array(), false, 'all' );
 wp_enqueue_style( 'tailwind' );
}
add_action( 'wp_enqueue_scripts', 'stylesheets' );



// osobny rodzaj wpisów dla galerii produktów
function add_custom_post_type() {
 $candy = array(
  'labels' => array(
   'name' => _x('Słodka Galeria', 'Słodka Galeria'),
   'singular_name' => _x('Słodka Galeria', 'Słodka Galeria'),
   'add_new' => __('Dodaj produkt'),
   'add_new_item' => __('Dodaj produkt'),
   'edit_item' => __('Edytuj'),
   'new_item' => __('Nowy'),
   'all_items' => __('Wszystkie produkty'),
   'view_items' => __('Zobacz produkty'),
   'search_items' => __('Szukaj'),
   'not_found' => __('Brak produktu'),
   'not_found_in_trash' => __('Brak szukanego produktu w koszu'),
   'parent_item_colo' => '',
   'menu_name' => 'Słodka Galeria'
  ),
  'description' => 'Słodka Galeria',
  'public' => true,
  'menu_position' => 3,
  'menu_icon' => 'dashicons-portfolio',
  'show_in_nav_menus' => 'Słodka Galeria',
  'supports' => array('title', 'editor', 'thumbnail', 'comments', 'author', 'categories', 'custom-fields', 'revisions'),
  'has_archive' => true,
  'rewrite' => array(
   'slug' => 'slodka-galeria',
   'with_front' => true,
   'pages' => true
  ),
  'taxonomies' => array( 'post_tag', 'category' ),
  'hierarchical' => true
 );
 
flush_rewrite_rules();
register_post_type('Słodka Galeria', $candy);
};
add_action( 'after_setup_theme', 'add_custom_post_type' );



/**
* First, let's set the maximum content width based on the theme's design and stylesheet.
* This will limit the width of all uploaded images and embeds.
*/
if ( ! isset( $content_width ) )
$content_width = 800; /* pixels */

if ( ! function_exists( 'theme_setup' ) ) :

function theme_setup() {

add_theme_support( 'post-thumbnails' );

register_nav_menus( array(
'primary' => __( 'Primary Menu', 'pive-theme' )
) );

add_theme_support( 'custom-logo', array(
    'height' => 120,
    'width'  => 300,
) );

add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
endif; // theme_setup
add_action( 'after_setup_theme', 'theme_setup' );