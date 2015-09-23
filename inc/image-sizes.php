<?php
/**
 * Custom images sizes for the theme.
 *
 * Add all custom images sizes directly related to the theme here.
 *
 * @package Perthel Homes
 */

if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'logo', 172, 84, false );
	add_image_size( 'property-listing', 185, 133, true );
	add_image_size( 'banner', 1200, 666, true );
	add_image_size( 'featured-image', 1200, 380, true );
	add_image_size( 'post-thumbnail', 429, 310, true );
	add_image_size( 'flex-slider', 257, 193, true );
	add_image_size( 'home-plan-main', 500, 300, true);
	add_image_size( 'home-plan-archive', 268, 192, true);
}