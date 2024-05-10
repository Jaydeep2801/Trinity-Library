<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://wordpress.org
 * @since      1.0.0
 *
 * @package    Trinity_Library
 * @subpackage Trinity_Library/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Trinity_Library
 * @subpackage Trinity_Library/admin
 * @author     Jaydeep Rajgor <jaydeep.rajgor5@gmail.com>
 */
class Trinity_Library_Admin {

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
		 * defined in Trinity_Library_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Trinity_Library_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/trinity-library-admin.css', array(), $this->version, 'all' );

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
		 * defined in Trinity_Library_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Trinity_Library_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/trinity-library-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Registers the acf fields
	 * 
	 * @return void
	 * 
	 * @author Jaydeep Rajgor
	 * */
	public function register_acf_fields(){
		if ( ! function_exists( 'acf_add_local_field_group' ) ) {
			return;
		}

		acf_add_local_field_group( array(
			'key' => 'group_663e4c7c32fe7',
			'title' => 'Book Custom Data',
			'fields' => array(
				array(
					'key' => 'field_663e4c8b30f87',
					'label' => 'Student',
					'name' => 'student',
					'aria-label' => '',
					'type' => 'user',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'role' => array(
						0 => 'student',
					),
					'return_format' => 'array',
					'multiple' => 0,
					'allow_null' => 0,
				),
				array(
					'key' => 'field_663e4ccd30f88',
					'label' => 'Taken On',
					'name' => 'taken_on',
					'aria-label' => '',
					'type' => 'date_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'display_format' => 'd/m/Y',
					'return_format' => 'Y-m-d',
					'first_day' => 1,
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'post',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => true,
			'description' => '',
			'show_in_rest' => 0,
		) );
	}

	/**
	 * Saves the book taker information on database
	 * 
	 * @return void
	 * 
	 * @author Jaydeep Rajgor
	 * */
	public function save_book_taker_information( $post_id ){
		// if( isset( $_REQUEST['student'] ) ){

		// }
	}
}
