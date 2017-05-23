<?php
// ADDING NAVIGATION
add_action( 'after_setup_theme', 'wpt_setup' );
if ( ! function_exists( 'wpt_setup' ) ):
    function wpt_setup() {
        register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
    } endif;

require_once('wp_bootstrap_navwalker.php');

// ADDING FEATURED IMAGE
add_theme_support( 'post-thumbnails' );

// ADDING SIDEBAR
if(function_exists('register_sidebars'))
    register_sidebar(array(
        'name' => 'Right Sidebar',
        'description' => "Right Sidebar",
        'before_widget' => '<div id="" class="">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="">',
        'after_title' => '</h2>',
    ));

// THE EXCERPT: WORD LIMIT

function excerpt_productinfo($limit) {
  $excerpt_productinfo = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt_productinfo)>=$limit) {
    array_pop($excerpt_productinfo);
    $excerpt_productinfo = implode(" ",$excerpt_productinfo). '...';
  } else {
    $excerpt_productinfo = implode(" ",$excerpt_productinfo);
  }
  $excerpt_productinfo = preg_replace('`[[^]]*]`','',$excerpt_productinfo);
  return $excerpt_productinfo;
}
?>
