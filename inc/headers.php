<?php
/**
 * Adds additional security HTTP headers
 */
namespace PadillaSecurity\Inc;

add_filter('wp_headers', function ($headers, $wp) {

  // Cross-Site Scripting
  $headers['X-XSS-Protection'] = '1; mode=block';
  // Clickjacking
  $headers['X-Frame-Options'] = 'SAMEORIGIN';
  // Ensure content-types
  $headers['X-Content-Type-Options'] = 'nosniff';

  return $headers;
}, PHP_INT_MAX, 2);
