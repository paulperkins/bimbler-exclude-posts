<?php
/**
 * Bimbler Exclude Posts
 *
 * @package   Bimbler_Exclude_Posts
 * @author    Paul Perkins <paul@paulperkins.net>
 * @license   GPL-2.0+
 * @link      http://bimblers.com/plugins/
 * @copyright 2015 Paul Perkins
 */

/**
 * Include dependencies necessary... (none at present)
 *
 */

/**
 * Bimbler Exclude Posts
 *
 * @package Bimbler_Exclude_Posts
 * @author  Paul Perkins <paul@paulperkins.net>
 */
class Bimbler_Exclude_Posts {

        /*--------------------------------------------*
         * Constructor
         *--------------------------------------------*/

        /**
         * Instance of this class.
         *
         * @since    1.0.0
         *
         * @var      object
         */
        protected static $instance = null;

        /**
         * Return an instance of this class.
         *
         * @since     1.0.0
         *
         * @return    object    A single instance of this class.
         */
        public static function get_instance() {

			// If the single instance hasn't been set, set it now.
			if ( null == self::$instance ) {
				self::$instance = new self;
			} // end if

			return self::$instance;

        } // end get_instance

	/**
	 * Initializes the plugin by setting localization, admin styles, and content filters.
	 */
	private function __construct() {

		add_action( 'pre_get_posts', array ($this, 'exclude_category'));
        	         	
	} // End constructor.
	
	/*
	 * Exclude certain post categories from main loop.
	 *
	 */
	function exclude_category( $query ) {

		// Only exclude posts on the home page.
		if ( $query->is_home() && $query->is_main_query() ) {
			// EDIT THIS to suit the list of categories you'd like to exlude.
			$query->set( 'cat', '-50,-49,-75,-79' ); // Don't show ride posts or internal posts. Exclude plugin posts.
		}
	}	
		
} // End class
