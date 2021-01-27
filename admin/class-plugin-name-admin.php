<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin
 * @author     Your Name <email@example.com>
 */
class Plugin_Name_Admin {

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
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
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
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/plugin-name-admin.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'bootstrapcss', plugin_dir_url( __FILE__ ) . 'css/bootstrap.min.css', array(), $this->version, 'all' );

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
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/plugin-name-admin.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'bootstrapjs', plugin_dir_url( __FILE__ ) . 'js/bootstrap.min.js', array( 'jquery' ), $this->version, false );

	}
		///////////////////////////////////custome code by aric/////////////////////////////////////////////////////////
	/**
	 * Add custom top level menu that calls on myplugin_admin_page function, which returns a view
	 *
	 * @since    1.0.0
	 */

	public function my_admin_menu(){
		add_menu_page( 'simple plugin', 'Sticky Header ASAP', 'manage_options', 'plugin-name/mainsettings.php', array( $this , 'myplugin_admin_page'), 'dashicons-heading', 250 );
		add_submenu_page(
		'plugin-name/mainsettings.php',
		'simple plugin submenu settings',
		'How To Use This?',
		'manage_options',
		'plugin-name/importer.php',
		array( $this, 'myplugin_admin_sub_page' )
	);

	
}

public function myplugin_admin_page(){
	    //return views
	    require_once 'partials/plugin-name-admin-display.php';
	}
	
	public function myplugin_admin_sub_page(){
	    //return view
	    require_once 'partials/submenu-page.php';
	}
	
	
		/**
	 * register custom fields for plugin settings
	 *
	 * @since    1.0.0
	 */
    public function register_general_settings(){
        //register all settings for general settings page
        
        register_setting('wpcustomsettings', 'headerclass');
        register_setting('wpcustomsettings', 'masterswitch');
        register_setting('wpcustomsettings', 'padding');
        register_setting('wpcustomsettings', 'backgroundcolor');
        register_setting('wpcustomsettings', 'transparent');

    }
	
	
	
	
	
	
	
	
	

}
