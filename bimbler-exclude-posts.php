<?php 
    /*
    Plugin Name: Bimbler Exclude Posts
    Plugin URI: http://bimblers.com/plugins/
    Description: Plugin to exclude a range of posts from appearing on the front-page feed. The plugin exludes posts by category.
    Author: Paul Perkins
    Version: 0.1
    Author URI: http://bimblers.com
    */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
        die;
} // end if

require_once( plugin_dir_path( __FILE__ ) . 'class-bimbler-exclude-posts.php' );

Bimbler_Exclude_Posts::get_instance();
