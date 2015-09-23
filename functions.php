<?php
/**
 * Perthel Homes functions and definitions
 *
 * @package Perthel Homes
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'perthel_homes_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function perthel_homes_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Perthel Homes, use a find and replace
	 * to change 'perthel_homes' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'perthel_homes', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'perthel_homes' ),
		// 'footer' => __( 'Footer Menu', 'perthel_homes' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( '_s_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // perthel_homes_setup
add_action( 'after_setup_theme', 'perthel_homes_setup' );

/**
 * CPT Current Homes
 */
require( get_template_directory() . '/inc/cpt-current-homes.php' );
/**
 * Enqueueing and adding scripts and styles.
 */
require( get_template_directory() . '/inc/scripts-styles.php' );

/**
 * Implement the Custom Header feature
 */
//include( get_template_directory() . '/inc/custom-header.php' );

/**
 * Custom template tags for this theme.
 */
require( get_template_directory() . '/inc/template-tags.php' );

/**
 * Custom functions that act independently of the theme templates
 */
require( get_template_directory() . '/inc/extras.php' );

/**
 * Customizer additions
 */
require( get_template_directory() . '/inc/customizer.php' );

/**
 * Include Widget Areas
 */
include( get_template_directory() . '/inc/widget-areas.php' );

/**
 * Include Image Sizes
 */
include( get_template_directory() . '/inc/image-sizes.php' );

/**
 * Include Custom Fields
 */
include( get_template_directory() . '/inc/custom-fields.php' );

/**
 * Include Theme Hook Alliance
 */
include( get_template_directory() . '/inc/tha-theme-hooks.php' );

/**
 * Include Theme Hook Alliance
 */
include( get_template_directory() . '/inc/foundation-shortcodes.php' );

/**
 * Detect the Browser
 */
function perthel_homes_ie() {
	$ie_version = '';
	
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 6.') !== false ) {
		$ie_version = 'ie6';
	} elseif ( strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 7.') !== false ) {
		$ie_version = 'ie7';
	} elseif ( strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.') !== false ) {
		$ie_version = 'ie8';
	} elseif ( strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 9.') !== false ) {
		$ie_version = 'ie9';
	} elseif ( strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 10.') !== false ) {
		$ie_version = 'ie10';
	}
	
	return $ie_version;
}

function perthel_homes_ltie10() {
	$ie_version = perthel_homes_ie();
	$lt = '';
	if ( $ie_version == 'ie6' || $ie_version == 'ie7' || $ie_version == 'ie8' || $ie_version == 'ie9' ) {
		$lt = 'ltie10';
	} else {
		$lt = false;
	}
	return	$lt;
}

function perthel_homes_ltie9() {
	$ie_version = perthel_homes_ie();
	$lt = '';	
	if ( $ie_version == 'ie6' || $ie_version == 'ie7' || $ie_version == 'ie8' ) {
		$lt = 'ltie9';
	} else {
		$lt = false;
	}
	return	$lt;
}

function perthel_homes_ltie8() {
	$ie_version = perthel_homes_ie();
	$lt = '';
	if ( $ie_version == 'ie6' || $ie_version == 'ie7' ) {
		$lt = true;
	} else {
		$lt = false;
	}
	return	$lt;
}

function perthel_homes_ltie7() {
	$ie_version = perthel_homes_ie();
	$lt = '';
	if ( $ie_version == 'ie6' ) {
		$lt = 'ltie7';
	} else {
		$lt = false;
	}
	return	$lt;
}

// Fixes made for IE7

if(perthel_homes_ltie8()) { ?>
<style type="text/css">
	*, *:before, *:after {
		*behavior: url(<?php bloginfo( 'template_directory' ); ?>/box-sizing/boxsizing.htc);
	}
	.soliloquy-container, .soliloquy-container * {
		*behavior: none !important;
	}
</style>
<?php }

/**
* Implement 'Options' page for Advanced Custom Field Pro
*/

if(function_exists('acf_add_options_page')) { 
 
	acf_add_options_page();
	// Other Examples:
	//acf_add_options_sub_page('Header');
	//acf_add_options_sub_page('Footer');
 
}

/**
 * Hide editor on specific pages.
 *
 */
/*add_action( 'admin_init', 'hide_editor' );
function hide_editor() {
  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  if( !isset( $post_id ) ) return;
 
  $template_file = get_post_meta($post_id, '_wp_page_template', true);
  if($template_file == 'tpl-front-page.php'){ // the filename of the page template
    remove_post_type_support('page', 'editor');
	
  }
}*/

/**
 * Add "has-submenu" CSS class to navigation menu items that have children in a
 * submenu.
 * Refactored from https://snipt.net/ojrask/tag/class/
 */
function nav_menu_item_parent_classing( $classes, $item )
{
    global $wpdb;
    
    $has_children = in_array( 'menu-item-has-children', $item->classes );
    
    if ( $has_children )
    {
        array_push( $classes, "has_children" );
    }
    
    return $classes;
}
add_filter( "nav_menu_css_class", "nav_menu_item_parent_classing", 10, 2 );


add_action( 'wp_enqueue_scripts', 'register_flexslider_scripts' );

function register_flexslider_scripts() {
	wp_register_script( 'flexslider_scripts', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'));
	wp_register_script( 'flexslider_scripts_min', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'));
	wp_register_style( 'flexslider_styles', get_template_directory_uri() . '/css/flexslider.css');
	wp_enqueue_script( 'flexslider_scripts' );
	wp_enqueue_script( 'flexslider_scripts_min' );
	wp_enqueue_style( 'flexslider_styles' );

}