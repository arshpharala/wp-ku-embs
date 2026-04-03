<?php
/**
 * Theme functions and definitions
 *
 * @package embs
 */

if ( ! function_exists( 'embs_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function embs_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		) );

		// Register nav menus
		register_nav_menus( array(
			'slide_menu' => esc_html__( 'Slide Menu', 'embs' ),
		) );
	}
endif;
add_action( 'after_setup_theme', 'embs_setup' );


/**
 * Enqueue scripts and styles.
 */
function embs_scripts() {
	// Main stylesheet (style.css)
	wp_enqueue_style( 'embs-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	// 3rd party styles
	wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.0' );
	wp_enqueue_style( 'owl-carousel-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), '2.3.4' );
	wp_enqueue_style( 'owl-carousel-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css', array(), '2.3.4' );

	// Custom compiled styles
	wp_enqueue_style( 'embs-main-css', get_template_directory_uri() . '/assets/scss/main.css', array(), '1.0.0' );
	if ( ! is_front_page() && ! is_home() ) {
		wp_enqueue_style( 'embs-inside-css', get_template_directory_uri() . '/assets/scss/inside.css', array(), '1.0.0' );
	}
	wp_enqueue_style( 'embs-responsive-css', get_template_directory_uri() . '/assets/scss/base/responsive.css', array(), '1.0.0' );

	// Scripts — use bundled WP jQuery
	wp_enqueue_script( 'jquery' );

	// 3rd party scripts
	wp_enqueue_script( 'owl-carousel-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array( 'jquery' ), '2.3.4', true );
	wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true );
	wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.0', true );

	// Custom scripts
	wp_enqueue_script( 'embs-main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'embs_scripts' );


// =============================================================================
// CUSTOM POST TYPES
// =============================================================================

/**
 * Register CPT: Events
 */
function embs_register_cpt_events() {
	$labels = array(
		'name'               => _x( 'Events', 'post type general name', 'embs' ),
		'singular_name'      => _x( 'Event', 'post type singular name', 'embs' ),
		'add_new'            => __( 'Add New', 'embs' ),
		'add_new_item'       => __( 'Add New Event', 'embs' ),
		'edit_item'          => __( 'Edit Event', 'embs' ),
		'new_item'           => __( 'New Event', 'embs' ),
		'view_item'          => __( 'View Event', 'embs' ),
		'search_items'       => __( 'Search Events', 'embs' ),
		'not_found'          => __( 'No events found', 'embs' ),
		'not_found_in_trash' => __( 'No events found in Trash', 'embs' ),
		'menu_name'          => __( 'Events', 'embs' ),
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'show_in_rest'       => true,
		'has_archive'        => true,
		'rewrite'            => array( 'slug' => 'events' ),
		'menu_icon'          => 'dashicons-calendar-alt',
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
		'show_in_menu'       => true,
		'menu_position'      => 5,
	);
	register_post_type( 'embs_event', $args );
}
add_action( 'init', 'embs_register_cpt_events' );


/**
 * Register CPT: Speakers
 */
function embs_register_cpt_speakers() {
	$labels = array(
		'name'               => _x( 'Speakers', 'post type general name', 'embs' ),
		'singular_name'      => _x( 'Speaker', 'post type singular name', 'embs' ),
		'add_new'            => __( 'Add New', 'embs' ),
		'add_new_item'       => __( 'Add New Speaker', 'embs' ),
		'edit_item'          => __( 'Edit Speaker', 'embs' ),
		'new_item'           => __( 'New Speaker', 'embs' ),
		'view_item'          => __( 'View Speaker', 'embs' ),
		'search_items'       => __( 'Search Speakers', 'embs' ),
		'not_found'          => __( 'No speakers found', 'embs' ),
		'not_found_in_trash' => __( 'No speakers found in Trash', 'embs' ),
		'menu_name'          => __( 'Speakers', 'embs' ),
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'show_in_rest'       => true,
		'has_archive'        => false,
		'rewrite'            => array( 'slug' => 'speakers' ),
		'menu_icon'          => 'dashicons-businessman',
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
		'show_in_menu'       => true,
		'menu_position'      => 6,
	);
	register_post_type( 'embs_speaker', $args );
}
add_action( 'init', 'embs_register_cpt_speakers' );


/**
 * Register CPT: Team Members (Office Bearers)
 */
function embs_register_cpt_team() {
	$labels = array(
		'name'               => _x( 'Team Members', 'post type general name', 'embs' ),
		'singular_name'      => _x( 'Team Member', 'post type singular name', 'embs' ),
		'add_new'            => __( 'Add New', 'embs' ),
		'add_new_item'       => __( 'Add New Team Member', 'embs' ),
		'edit_item'          => __( 'Edit Team Member', 'embs' ),
		'new_item'           => __( 'New Team Member', 'embs' ),
		'view_item'          => __( 'View Team Member', 'embs' ),
		'search_items'       => __( 'Search Team Members', 'embs' ),
		'not_found'          => __( 'No team members found', 'embs' ),
		'not_found_in_trash' => __( 'No team members found in Trash', 'embs' ),
		'menu_name'          => __( 'Team Members', 'embs' ),
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'show_in_rest'       => true,
		'has_archive'        => false,
		'rewrite'            => array( 'slug' => 'team' ),
		'menu_icon'          => 'dashicons-groups',
		'supports'           => array( 'title', 'thumbnail', 'custom-fields' ),
		'show_in_menu'       => true,
		'menu_position'      => 7,
	);
	register_post_type( 'embs_team', $args );
}
add_action( 'init', 'embs_register_cpt_team' );


/**
 * Register CPT: Awards & Milestones
 */
function embs_register_cpt_awards() {
	$labels = array(
		'name'               => _x( 'Awards', 'post type general name', 'embs' ),
		'singular_name'      => _x( 'Award', 'post type singular name', 'embs' ),
		'add_new'            => __( 'Add New', 'embs' ),
		'add_new_item'       => __( 'Add New Award', 'embs' ),
		'edit_item'          => __( 'Edit Award', 'embs' ),
		'new_item'           => __( 'New Award', 'embs' ),
		'view_item'          => __( 'View Award', 'embs' ),
		'search_items'       => __( 'Search Awards', 'embs' ),
		'not_found'          => __( 'No awards found', 'embs' ),
		'not_found_in_trash' => __( 'No awards found in Trash', 'embs' ),
		'menu_name'          => __( 'Awards', 'embs' ),
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'show_in_rest'       => true,
		'has_archive'        => false,
		'rewrite'            => array( 'slug' => 'awards' ),
		'menu_icon'          => 'dashicons-awards',
		'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'show_in_menu'       => true,
		'menu_position'      => 8,
	);
	register_post_type( 'embs_award', $args );
}
add_action( 'init', 'embs_register_cpt_awards' );


/**
 * Register CPT: Alumni
 */
function embs_register_cpt_alumni() {
	$labels = array(
		'name'               => _x( 'Alumni', 'post type general name', 'embs' ),
		'singular_name'      => _x( 'Alumni', 'post type singular name', 'embs' ),
		'add_new'            => __( 'Add New', 'embs' ),
		'add_new_item'       => __( 'Add New Alumni', 'embs' ),
		'edit_item'          => __( 'Edit Alumni', 'embs' ),
		'new_item'           => __( 'New Alumni', 'embs' ),
		'view_item'          => __( 'View Alumni', 'embs' ),
		'search_items'       => __( 'Search Alumni', 'embs' ),
		'not_found'          => __( 'No alumni found', 'embs' ),
		'not_found_in_trash' => __( 'No alumni found in Trash', 'embs' ),
		'menu_name'          => __( 'Alumni', 'embs' ),
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'show_in_rest'       => true,
		'has_archive'        => false,
		'rewrite'            => array( 'slug' => 'alumni' ),
		'menu_icon'          => 'dashicons-networking',
		'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'show_in_menu'       => true,
		'menu_position'      => 9,
	);
	register_post_type( 'embs_alumni', $args );
}
add_action( 'init', 'embs_register_cpt_alumni' );
