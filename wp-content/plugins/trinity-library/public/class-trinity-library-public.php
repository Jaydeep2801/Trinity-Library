<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://wordpress.org
 * @since      1.0.0
 *
 * @package    Trinity_Library
 * @subpackage Trinity_Library/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Trinity_Library
 * @subpackage Trinity_Library/public
 * @author     Jaydeep Rajgor <jaydeep.rajgor5@gmail.com>
 */
class Trinity_Library_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/trinity-library-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/trinity-library-public.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Allows to register custom post type for book, user role of librarian and student.
	 * 
	 * @return void
	 * 
	 * @author Jaydeep Rajgor
	 * */
	public function setup_books_post_type(){
		global $wp_taxonomies;

		// Register books post type
		$labels = array(
	        'name'                  => _x( 'Books', 'Post type general name', 'trinity-library' ),
	        'singular_name'         => _x( 'Book', 'Post type singular name', 'trinity-library' ),
	        'menu_name'             => _x( 'Books', 'Admin Menu text', 'trinity-library' ),
	        'name_admin_bar'        => _x( 'Book', 'Add New on Toolbar', 'trinity-library' ),
	        'add_new'               => __( 'Add New', 'trinity-library' ),
	        'add_new_item'          => __( 'Add New Book', 'trinity-library' ),
	        'new_item'              => __( 'New Book', 'trinity-library' ),
	        'edit_item'             => __( 'Edit Book', 'trinity-library' ),
	        'view_item'             => __( 'View Book', 'trinity-library' ),
	        'all_items'             => __( 'All Books', 'trinity-library' ),
	        'search_items'          => __( 'Search Books', 'trinity-library' ),
	        'parent_item_colon'     => __( 'Parent Books:', 'trinity-library' ),
	        'not_found'             => __( 'No Books found.', 'trinity-library' ),
	        'not_found_in_trash'    => __( 'No Books found in Trash.', 'trinity-library' ),
	        'featured_image'        => _x( 'Book Cover Image', 'Overrides the “Featured Image” phrase for this post type.', 'trinity-library' ),
	        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type.', 'trinity-library' ),
	        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type.', 'trinity-library' ),
	        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type.', 'trinity-library' ),
	        'archives'              => _x( 'Book archives', 'The post type archive label used in nav menus.', 'trinity-library' ),
	        'insert_into_item'      => _x( 'Insert into Book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post).', 'trinity-library' ),
	        'uploaded_to_this_item' => _x( 'Uploaded to this Book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post).', 'trinity-library' ),
	        'filter_items_list'     => _x( 'Filter Books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”.', 'trinity-library' ),
	        'items_list_navigation' => _x( 'Books list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”.', 'trinity-library' ),
	        'items_list'            => _x( 'Books list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”.', 'trinity-library' ),
	    );     
	    $args = array(
	        'labels'             => $labels,
	        'description'        => 'Books.',
	        'public'             => true,
	        'publicly_queryable' => true,
	        'show_ui'            => true,
	        'show_in_menu'       => true,
	        'query_var'          => true,
	        'rewrite'            => array( 'slug' => 'books' ),
	        'capability_type'    => 'post',
	        'map_meta_cap'		 => true,
	        'has_archive'        => true,
	        'hierarchical'       => false,
	        'menu_position'      => 20,
	        'supports'           => array( 'title', 'thumbnail' ),
	        'show_in_rest'       => true
	    );	      
	    register_post_type( 'books', $args );

	    add_role('librarian', __('Librarian','trinity-library'), array('manage_options'
	  	) );

	  	add_role('student', __('Student','trinity-library'), array('read') );
	}

}
