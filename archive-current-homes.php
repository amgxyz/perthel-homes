<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Perthel Homes
 * @since Perthel Homes 1.0
 */

get_header(); ?>
<?php //if(perthel_homes_ltie9()) { get_sidebar(); } ?>

		<div><section id="primary" class="content-area right column twelve large-12 medium-12 small-12 wow fadeIn animated" data-wow-delay="100ms">
			<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><span>Current Homes<small> – Click image for details</small></span></h1>
				</header><!-- .page-header -->

				<?php perthel_homes_content_nav( 'nav-above' ); ?>
                
                <ul class="large-block-grid-3 medium-block-grid-3 small-block-grid-1 block-grid three-up">
					<?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <li class="text-center">
                        <?php tha_entry_before(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <?php tha_entry_top(); ?>
                            
                            <?php if ( is_search() ) : // Only display Excerpts for Search ?>
                            <header class="entry-header">
                                <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'perthel_homes' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                            </header><!-- .entry-header -->
                            <div class="entry-summary">
                                <?php the_excerpt(); ?>
                            </div><!-- .entry-summary -->
                            <?php else : ?>
                            <div class="entry-content current-homes">
                            	<?php if(get_field('plan_name')) { ?><h2 class="plan-name"><a class="page-block-image" href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'perthel_homes' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_field('plan_name'); ?></a></h2><?php } ?>
                                <?php if(has_post_thumbnail()) { ?>
                                	<a class="page-block-image" href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'perthel_homes' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
                                    	<?php if ( get_field( 'overlay') == "Sold") { ?><div class="sold-out">&nbsp;</div><!-- .sold-out -->
                                    	<?php } elseif ( get_field( 'overlay') == "Accepted" ) { ?><div class="accepted">&nbsp;</div><!-- .accepted -->
                                    	<?php } elseif ( get_field( 'overlay') == "For Sale" ) { ?><div class="forsale">&nbsp;</div><!-- .forsale -->
                                        <?php } else { ?><div></div><?php } ?>
										<?php the_post_thumbnail('post-thumbnail'); ?>
                                	</a>
                                <?php } ?>
								<?php // the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'perthel_homes' ) ); ?>
                                <?php // wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'perthel_homes' ), 'after' => '</div>' ) ); ?>
                                <h4 class="entry-title text-center"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'perthel_homes' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
                                
                            </div><!-- .entry-content -->
                            <?php endif; ?>
                        
                            <?php tha_entry_bottom(); ?>
                        </article><!-- #post-<?php the_ID(); ?> -->
                        <?php tha_entry_after(); ?>
                  	</li>    
                    <?php endwhile; ?>
             	</ul>

					<?php perthel_homes_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'archive' ); ?>

			<?php endif; ?>

			</div><!-- #content .site-content -->
		</section><!-- #primary .content-area -->
    </div>
<?php //if(!perthel_homes_ltie9()) { get_sidebar(); } ?>
<?php get_footer(); ?>