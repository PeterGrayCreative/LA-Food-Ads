<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://bpmmarketing.com
 * @since      1.0.0
 *
 * @package    LA_FOOD_Marketing
 * @subpackage LA_FOOD_Marketing/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    La Foods Marketing
 * @author     Peter Gray <peter@bpmmarketing.com>
 */
class LA_FOOD_Marketing_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $LA_FOOD_Marketing    The ID of this plugin.
	 */
	private $LA_FOOD_Marketing;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $LA_FOOD_Marketing       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $LA_FOOD_Marketing, $version ) {

		$this->LA_FOOD_Marketing = $LA_FOOD_Marketing;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in LA_FOOD_Marketing_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The LA_FOOD_Marketing_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->LA_FOOD_Marketing, plugin_dir_url( __FILE__ ) . 'css/plugin-name-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in LA_FOOD_Marketing_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The LA_FOOD_Marketing_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->LA_FOOD_Marketing, plugin_dir_url( __FILE__ ) . 'js/plugin-name-admin.js', array( 'jquery' ), $this->version, false );

	}

}
