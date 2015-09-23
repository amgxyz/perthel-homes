<?php
/**
 * Template Name: One column, no sidebar
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Perthel Homes
 * @since Perthel Homes 1.0
 */

get_header(); ?>

		<div id="primary" class="content-area left column twelve large-12 medium-12 small-12 wow fadeIn animated" data-wow-delay="100ms">
			<div id="content" class="site-content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->


<?php get_footer(); ?>