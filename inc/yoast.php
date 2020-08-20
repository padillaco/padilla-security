<?php
/**
 * Removes Yoast SEO Comments Function that outputs an HTML comment similar to:
 * <!--
 *   This site is optimized with the Yoast SEO plugin v14.3 - https://yoast.com/wordpress/plugins/seo/
 * -->
 */

add_filter('wpseo_debug_markers', '__return_false', PHP_INT_MAX);
