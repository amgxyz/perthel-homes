<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Perthel_homes
 * @since Perthel Homes 1.0
 */

get_header(); ?>

		<div id="container" class="showcase content-area right column twelve large-12 medium-12 small-12">
			<div id="content" role="main">


			<h1 class="page-title">
				<?php _e( 'Home Plans', 'perthelhomes' ); ?>
			</h1>
			<div class="showcase-wrapper text-center">
				<h2 class="home-plan-cat">Featured</h2>
				<hr>
				<ul class="large-block-grid-1 medium-block-grid-1 small-block-grid-1 block-grid one-up">
					<?php
					//
					  query_posts( array( 'post_type' => 'home-plans', 'home-type' => 'featured' ) );
					  //the loop start here
					  if ( have_posts() ) : while ( have_posts() ) : the_post();
					?>
						<li class="text-center">
							<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'perthelhomes' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php echo get_the_post_thumbnail($page->ID, 'large'); ?></a>
							<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'perthelhomes' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
						</li>
					<?php endwhile; endif; wp_reset_query(); ?>
				</ul><!-- featured -->
				<br/>
				<h2 class="home-plan-cat">Homes with Main Floor Master Suite</h2>
				<hr>
				<ul class="large-block-grid-3 medium-block-grid-3 small-block-grid-1 block-grid three-up">
					<?php
					  query_posts( array( 'post_type' => 'home-plans', 'home-type' => 'main-floor-master' ) );
					  //the loop start here
					  if ( have_posts() ) : while ( have_posts() ) : the_post();
					?>
						<li class="text-center">
							<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'perthelhomes' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php echo get_the_post_thumbnail($page->ID, 'home-plan-archive'); ?></a>
							<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'perthelhomes' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
						</li>

					<?php endwhile; endif; wp_reset_query(); ?>
				</ul><!-- main floor -->
				<br/>
				<h2 class="home-plan-cat">Homes with Second Floor Master Suite</h2>
				<hr>
				<ul class="large-block-grid-3 medium-block-grid-3 small-block-grid-1 block-grid three-up">
					<?php
					//
					  query_posts( array( 'post_type' => 'home-plans', 'home-type' => 'second-floor-master' ) );
					  //the loop start here
					  if ( have_posts() ) : while ( have_posts() ) : the_post();
					?>
						<li class="text-center">
							<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'perthelhomes' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php echo get_the_post_thumbnail($page->ID, 'home-plan-archive'); ?></a>
							<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'perthelhomes' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
						</li>
					<?php endwhile; endif; wp_reset_query(); ?>
				</ul><!-- second floor -->
				</div><!--showcase wrapper-->
			</div><!-- #content -->
		</div><!-- #container -->


<?php get_footer(); ?>
