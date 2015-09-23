<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Perthel Homes
 * @since Perthel Homes 1.0
 */

get_header(); ?>
<?php if(perthel_homes_ltie9()) { get_sidebar(); } ?>

		<section id="primary" class="content-area right columns nine large-9 medium-8 small-12 wow fadeIn animated" data-wow-delay="100ms">
			<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'perthel_homes' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->

				<?php perthel_homes_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'search' ); ?>

				<?php endwhile; ?>

				<?php perthel_homes_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'search' ); ?>

			<?php endif; ?>

			</div><!-- #content .site-content -->
		</section><!-- #primary .content-area -->

<?php if(!perthel_homes_ltie9()) { get_sidebar(); } ?>
<?php get_footer(); ?>