<?php
/*
 * Plugin Name: Remove Disqus Ads
 * Version: 1.0.1
 * Plugin URI: https://github.com/mowshon/remove-disqus-ads
 * Description: Remove annoying ads from Disqus Comments.
 * Author: Mowshon
 * Author URI: https://github.com/mowshon
 * Requires at least: 4.0
 * Tested up to: 5.1
 *
 * @package WordPress
 * @author Mowshon
 * @since 1.0.1
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-remove-disqus-ads.php' );

/**
 * Returns the main instance of Remove_Disqus_Ads to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Remove_Disqus_Ads
 */
function Remove_Disqus_Ads () {
	$instance = Remove_Disqus_Ads::instance( __FILE__, '1.0.0' );
	return $instance;
}

Remove_Disqus_Ads();