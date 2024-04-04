<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://edlution.com.sg
 * @since      1.0.0
 *
 * @package    Weaveform_Admin
 * @subpackage Weaveform_Admin/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Weaveform_Admin
 * @subpackage Weaveform_Admin/admin
 * @author     Edlution <edlution@edlution.com.sg>
 */
class Weaveform_Admin_Admin
{

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version)
	{

		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles($hook)
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Weaveform_Admin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Weaveform_Admin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		$src_string = $hook;
		$search_string = "weaveform";

		if (strpos($src_string, $search_string) !== false) {

			wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/weaveform-admin-admin.css', array(), $this->version, 'all');
		}
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts($hook)
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Weaveform_Admin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Weaveform_Admin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		// wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/weaveform-admin-admin.js', array( 'jquery' ), $this->version, false );


		$src_string = $hook;
		$search_string = "weaveform";

		if (strpos($src_string, $search_string) !== false) {

			wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . '../dist/admin.bundle.js', array('jquery'), $this->version, false);
		}
	}


	public function weaveform_admin_menu()
	{
		add_menu_page(
			"Weaveform Admin Page",
			"Weaveform Admin",
			"manage_options",
			"weaveform_admin_menu",
			array($this, 'show_admin_page'),
			"dashicons-admin-home",
			21
		);

		add_submenu_page(
			"weaveform_admin_menu",
			"Dashboard",
			"Dashboard",
			"manage_options",
			"weaveform_admin_menu",
			array($this, 'show_admin_page')
		);

		add_submenu_page(
			"weaveform_admin_menu",
			"Test",
			"Test",
			"manage_options",
			"test_page",
			array($this, 'show_sub_page')
		);
	}

	public function show_admin_page()
	{
		require_once(plugin_dir_path(__FILE__) . 'partials/weaveform-admin-admin-display.php');
		// echo '<h1>This is the Partials !</h1>';
	}
	public function show_sub_page()
	{
		// require_once( plugin_dir_path(__FILE__) . 'partials/weaveform-admin-admin-display.php');
		echo '<h1>This is the Partials !</h1>';
	}
}
