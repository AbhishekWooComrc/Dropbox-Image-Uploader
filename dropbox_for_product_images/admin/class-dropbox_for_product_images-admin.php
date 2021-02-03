<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       www.cedcommerce.com
 * @since      1.0.0
 *
 * @package    Dropbox_for_product_images
 * @subpackage Dropbox_for_product_images/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Dropbox_for_product_images
 * @subpackage Dropbox_for_product_images/admin
 * @author     Cedcoss <cedcommerce@cedcoss.com>
 */
class Dropbox_for_product_images_Admin {

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
		 * defined in Dropbox_for_product_images_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dropbox_for_product_images_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/dropbox_for_product_images-admin.css', array(), $this->version, 'all' );

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
		 * defined in Dropbox_for_product_images_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dropbox_for_product_images_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( 'ced_javascript', plugin_dir_url( __FILE__ ) . 'js/dropbox_for_product_images-admin.js', array( 'jquery' ), $this->version, false );
		wp_localize_script( 'ced_javascript', 'ajax', array(
			'url' => admin_url( 'admin-ajax.php' )
		) );
	}
	// App key
	// jta4iq7j9iohab3
	// App secret
	// mmxgspoa859zkku


	// D5nh4fhYFTkAAAAAAAAADG4Wr798BkawlE86ljLsk_M
	public function ced_create_admnmenu_dropbox_image() {
		add_menu_page( 'image_dropbox' , 'Image Dropbox', 'manage_options', 'dropbox_images', array($this,'ced_dropbox_image_content'), 'dashicons-admin-users', 4 );

	}
	public function ced_dropbox_image_content() {
		require_once WOO_PRODUCT_IMPORTER_PLUGIN_PATH . 'admin/partials/dropbox_for_product_images-admin-display.php';
	}
	public function ced_metabox_image_dropbox_uploader() {
		add_meta_box(
			'image_dropbox_uploader',
			'IMAGE DROPBOX UPLOADER',
			 array($this, 'ced_content_image_dropbox_uploader'),
			'product',
			'advanced', 
			'high'
		);
	}
	public function ced_content_image_dropbox_uploader($post) {
		
		require_once WOO_PRODUCT_IMPORTER_PLUGIN_PATH . 'admin/partials/dropbox_for_product_images-admin-metabox-display.php';
		
	}
	public function ced_insert_intodb_image_dropbox_uploader() {
		$api_key = isset($_POST['api_key'])?$_POST['api_key']:'';
		$secret_key = isset($_POST['api_seceret'])?$_POST['api_seceret']:'';
		$api_setting = array('api_key'=>$api_key, '$secret_key'=>$secret_key);
		$data = update_option( 'api_setting_key_data', $api_setting);
		if($data) {
			echo "1";
		}
		wp_die();
	}
}
