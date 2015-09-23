<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Perthel Homes
 * @since Perthel Homes 1.0
 */
?><!DOCTYPE html>
<?php tha_html_before(); ?><html <?php language_attributes(); ?>>
<!--[if lt IE 7]>      <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html <?php language_attributes(); ?> class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html <?php language_attributes(); ?> class="no-js"> <![endif]-->
<head>
	<?php tha_head_top(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php if ( is_search() ) { // disable search engine indexing on search result pages ?>
		<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="shortcut icon" href="<?php bloginfo( 'stylesheet_directory' ); ?>/images/favicon.ico" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	<?php wp_head(); ?>
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700' rel='stylesheet' type='text/css'>
	<!-- font-family: 'Open Sans', sans-serif; -->
    
	<?php tha_head_bottom(); ?>
    
</head>

<body <?php body_class(); ?>>
	<?php tha_body_top(); ?>
	<!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
<?php do_action( 'before' ); ?>
<?php tha_header_before(); ?>
<header id="masthead" class="site-header-coverings fadeIn animated">&nbsp;</header><!-- .site-header-coverings -->
<header id="masthead" class="site-header fadeIn animated" role="banner">
	<?php tha_header_top(); ?>
    <div class="site-header-inner fadeIn animated">
        <div class="site-branding row">
            <div class="site-title left text-left medium-text-left small-text-center two large-2 medium-3 small-12">
                <a class="visuallyhidden" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                <?php if(get_field('logo', 'options')) { ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <img src="<?php $site_logo = get_field('logo', 'options'); echo $site_logo['sizes']['logo']; ?>" alt="<?php bloginfo( 'name' ); ?>" />
                </a>
                <?php } else { ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" height="84" width="172" alt="<?php bloginfo( 'name' ); ?>" />
                </a>
                <?php } ?>
            </div><!-- .site-title -->
            
            <div class="header-right right columns ten large-10 medium-9 small-12">
                <nav id="site-navigation" role="navigation" class="site-navigation applePie main-navigation">
                    <!--<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '_s' ); ?></a>-->
                    <div class="menubtn"><div class="menu-strip"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>M</strong>ENU</div>
                    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                </nav><!-- .site-navigation .main-navigation -->
            </div><!-- .header-right -->
            <div style="clear:both; height:0px;"></div>
        </div><!-- .site-branding -->
   	</div><!-- .site-header-inner -->
	<?php tha_header_bottom(); ?>
</header><!-- #masthead .site-header -->
<?php tha_header_after(); ?>

<?php if('current-home' !== get_post_type() && 'current-homes' !== get_post_type()) { if((get_field('slider') && get_field('select_display') == "Slider")  ||
has_post_thumbnail()) { ?>
<div class="slider-wrapper fadeIn animated">
	<?php if(get_field('select_display') == "Slider") { ?>
        <?php $slider_shortcode = get_field('slider'); echo do_shortcode($slider_shortcode); ?> 
    <?php } else { ?>
        <?php if (is_front_page()) { ?><div class="banner"><?php the_post_thumbnail('banner'); ?></div>
        <?php } else { ?><div class="banner"><?php the_post_thumbnail('featured-image'); ?></div><?php } ?>
    <?php } ?>
    <div style="clear:both; height:0px;"></div>
</div><!-- .slider-wrapper -->
<div class="slider-bottom-bar">&nbsp;</div>
<div style="clear:both; height:0px;"></div>
<?php } } ?>

<div id="page" class="hfeed site">
	<div id="main" class="site-main row">
		<?php tha_content_top(); ?>