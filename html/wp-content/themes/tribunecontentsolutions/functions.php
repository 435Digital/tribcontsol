<?php

// Enqueue Styles and Scripts
function load_styles_and_scripts() {
    // Load styles
    wp_enqueue_style('Divi-styles', get_template_directory_uri() . '/style.css');
	
	// Load scripts
}

add_action( 'wp_enqueue_scripts', 'load_styles_and_scripts' );


// Allow svg files
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


// Display svg images on media uploader and feature images
function custom_admin_head() {
  $css = '';

  $css = 'td.media-icon img[src$=".svg"] { width: 100% !important; height: auto !important; }';

  echo '<style type="text/css">'.$css.'</style>';
}
add_action('admin_head', 'custom_admin_head');

?>