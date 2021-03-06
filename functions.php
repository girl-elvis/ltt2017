<?php

show_admin_bar( false );

/**

 * Sage includes

 *

 * The $sage_includes array determines the code library included in your theme.

 * Add or remove files to the array as needed. Supports child theme overrides.

 *

 * Please note that missing files will produce a fatal error.

 *

 * @link https://github.com/roots/sage/pull/1042

 */

$sage_includes = [

  'lib/assets.php',    // Scripts and stylesheets

  'lib/extras.php',    // Custom functions

  'lib/setup.php',     // Theme setup

  'lib/titles.php',    // Page titles

  'lib/wrapper.php',   // Theme wrapper class

  'lib/customizer.php', // Theme customizer

  'lib/uikit-menu-walker.php',   // Walker class for uikit

  //'lib/uikit-menu-walker-offcanvas.php'  // Walker class for uikit

];

foreach ($sage_includes as $file) {

  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }
  require_once $filepath;
}
unset($file, $filepath);

// End Sage stuff



// Filter Category/Taxonomy title

add_filter( 'get_the_archive_title', function ( $title ) {
    if( is_category() ) {
        $title = single_cat_title( '', false );
    } else if( is_tax()) {
      $title = single_term_title( '', false ) ;
    }
    return $title;

});




/**
 * Adds  string argument to embedded vimeo videos
 */
function iwc_sendargs_oembed( $provider, $url, $args ) {
    if (strpos($provider, 'vimeo')!==FALSE) {
        $provider = add_query_arg(array(
          'title' => 0,
          'portrait' => 0,
          'byline' => 0,
      ), $provider);
    }
    return $provider;
}
add_filter('oembed_fetch_url', 'iwc_sendargs_oembed', 10, 3);


add_post_type_support( 'page', 'excerpt' );
add_theme_support( 'custom-logo' );



