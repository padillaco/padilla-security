<?php
/**
 * Disables XMLPRC
 * @see https://kinsta.com/blog/xmlrpc-php/
 */
namespace PadillaSecurity\Inc;

// Disable /xmlrpc.php
add_filter('xmlrpc_enabled', '__return_false', PHP_INT_MAX);

// Disable xmlrpc methods
add_filter('xmlrpc_methods', function () {
  return [];
}, PHP_INT_MAX);
