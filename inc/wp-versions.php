<?php

/**
 * Prevents the WordPress version from leaking into the DOM
 */
namespace PadillaSecurity\Inc;


// Remove WordPress version number
add_filter('the_generator', '__return_null', PHP_INT_MAX);

// Pick out the version number from scripts and styles
function remove_version_from_style_js($src) {
  if (strpos($src, 'ver=' . get_bloginfo('version'))) {
    $src = remove_query_arg('ver', $src);
  }

  return $src;
}
add_filter('style_loader_src', 'PadillaSecurity\Inc\remove_version_from_style_js', PHP_INT_MAX);
add_filter('script_loader_src', 'PadillaSecurity\Inc\remove_version_from_style_js', PHP_INT_MAX);
