<?php
function startwordpress_scripts() {
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/CSS/blog.css' );
	wp_enqueue_style( 'fonts', get_template_directory_uri() . '/CSS/fonts.css' );
	wp_enqueue_style( 'fonts', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );
//content-single

// Add Google Fonts
function startwordpress_google_fonts() {
		wp_enqueue_style( 'CaviarDreams',get_template_directory_uri() . '/CSS/caviar_dreams/CaviarDreams.ttf');
}

add_action('wp_print_styles', 'startwordpress_google_fonts');

function relative_value_array($array, $current_val = '', $offset = 1) {
$values = array_values($array);
$current_val_index = array_search($current_val, $values);

if( isset($values[$current_val_index + $offset]) ) {
return $values[$current_val_index + $offset];
}
return false;
};

add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 100,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );


// previous page link function
function dbdb_prev_page_link() {
global $post;

if ( isset($post->post_parent) && $post->post_parent > 1 ) {
$children = get_pages('&sort_column=post_date&sort_order=asc&child_of='.$post->post_parent.'&parent='.$post->post_parent);
};

// throw the children ids into an array
foreach( $children as $child ) { $child_id_array[] = $child->ID; }

$prev_page_id = relative_value_array($child_id_array, $post->ID, -1);

$output = '';
if( '' != $prev_page_id ) {
$output .= '<a href="' . get_page_link($prev_page_id) . '"> &laquo; '. get_the_title($prev_page_id) . '</a>';
}
return $output;
};

//next page link function
function dbdb_next_page_link() {
global $post;

if ( isset($post->post_parent) && $post->post_parent > 1 ) {
$children = get_pages('&sort_column=post_date&sort_order=asc&child_of='.$post->post_parent.'&parent='.$post->post_parent);
};

// throw the children ids into an array
foreach( $children as $child ) { $child_id_array[] = $child->ID; }

$next_page_id = relative_value_array($child_id_array, $post->ID, 1);

$output = '';
if( '' != $next_page_id ) {
$output .= '<a href="' . get_page_link($next_page_id) . '">'. get_the_title($next_page_id) . ' &raquo;</a>';
}
return $output;
};

add_theme_support( 'custom-header' );
$defaults = array(
	'default-image'          => '',
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );

function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'my-custom-menu' => __( 'My Custom Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );

wp_enqueue_script( 'wpb_slidepanel', get_template_directory_uri() . '/slidepanel.js', array('jquery'), '20160909', true );
