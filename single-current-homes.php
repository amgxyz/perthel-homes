<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Perthel Homes
 * @since Perthel Homes 1.0
 */

get_header(); ?>

		<?php if(perthel_homes_ltie9()) { ?> 
        	<?php tha_sidebars_before(); ?>
            <div id="secondary" class="widget-area left three large-3 medium-4 small-12 wow fadeIn animated" data-wow-delay="100ms" role="complementary">
                <div id="secondary-inenr" class="left columns twelve large-12 medium-12 small-12">
                    <div id="secondary-inenr-1" class="left twelve large-12 medium-12 small-12">
                    	<?php tha_sidebar_top(); ?>
						<?php do_action( 'before_sidebar' ); ?>
                        
                        	<?php if(get_field('current_home_spec_box') || get_field('current_home_spec_sheet')) { ?>
                            	<aside class="widget spec-box-widget"> 
									<?php the_field('current_home_spec_box'); ?>
                                    
                                    <?php if(get_field('current_home_spec_sheet')) { ?>
                                    <div style="clear:both; height:0"></div>
                                    <div class="entry-spec-sheet left text-center column twelve large-12 medium-12 small-12">
                                        <a class="spec-sheet" target="_blank" href="<?php the_field('current_home_spec_sheet'); ?>">CLICK HERE FOR THIS HOME'S SPECIFICATIONS</a>
                                    </div><!-- .entry-spec-sheet -->
                                    <div style="clear:both; height:0"></div>
                                    <?php } ?>
                                </aside><!-- .widget -->
							<?php } else { ?>
								<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
                                    <?php // Add Default Sidebar Widgets Here; ?>
                                <?php endif; // end sidebar widget area ?>
                        	<?php } ?>
						<?php tha_sidebar_bottom(); ?>
                    </div><!-- #secondary-inenr-1 -->

					<div style="clear:both; height:0"></div>
				</div><!-- #secondary-inenr -->
			</div><!-- #secondary .widget-area -->
			<?php tha_sidebars_after(); ?>
        <?php } ?>
        <div id="primary" class="content-area right columns nine large-9 medium-8 small-12 wow fadeIn animated" data-wow-delay="100ms">
			<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php //perthel_homes_content_nav( 'nav-above' ); ?>

				<?php tha_entry_before(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php tha_entry_top(); ?>
                    <header class="entry-header post">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                	</header><!-- .entry-header -->
                    
                    <div class="entry-content">
                    	<?php if(get_field('current_home_job_number')) { ?>
                        <div style="clear:both; height:0"></div>
                        <div class="entry-job-number left text-center column twelve large-12 medium-12 small-12">
                            <h2 class="job-number"><?php the_field('current_home_job_number'); ?></h2>
                        </div><!-- .entry-job-number -->
                        <div style="clear:both; height:0"></div>
                        <?php } ?>
                        
						<?php the_content(); ?>
                        
						<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'perthel_homes' ), 'after' => '</div>' ) ); ?>
                    </div><!-- .entry-content -->
                    
                    <?php if(get_field('gallery_content')) { ?>
                    <div style="clear:both; height:0"></div>
                    <div class="entry-pre-gallery-content">
                    	<?php the_field('gallery_content'); ?>
                    </div><!-- .entry-pre-gallery-content -->
                    <div style="clear:both; height:0"></div>
                    <?php } ?>
                
                    <?php tha_entry_bottom(); ?>
                </article><!-- #post-<?php the_ID(); ?> -->
                <?php tha_entry_after(); ?>

				<?php perthel_homes_content_nav( 'nav-below' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

		<?php if(!perthel_homes_ltie9()) { ?> 
        	<?php tha_sidebars_before(); ?>
            <div id="secondary" class="widget-area left three large-3 medium-4 small-12 wow fadeIn animated" data-wow-delay="100ms" role="complementary">
                <div id="secondary-inenr" class="left columns twelve large-12 medium-12 small-12">
                    <div id="secondary-inenr-1" class="left twelve large-12 medium-12 small-12">
                    	<?php tha_sidebar_top(); ?>
						<?php do_action( 'before_sidebar' ); ?>
                        
                        	<?php if(get_field('current_home_spec_box') || get_field('current_home_spec_sheet')) { ?>
                            	<aside class="widget spec-box-widget"> 
									<?php the_field('current_home_spec_box'); ?>
                                    
                                    <?php if(get_field('current_home_spec_sheet')) { ?>
                                    <div style="clear:both; height:0"></div>
                                    <div class="entry-spec-sheet left text-center column twelve large-12 medium-12 small-12">
                                        <a class="spec-sheet" target="_blank" href="<?php the_field('current_home_spec_sheet'); ?>">CLICK HERE FOR THIS HOME'S SPECIFICATIONS</a>
                                    </div><!-- .entry-spec-sheet -->
                                    <div style="clear:both; height:0"></div>
                                    <?php } ?>
                                </aside><!-- .widget -->
							<?php } else { ?>
								<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
                                    <?php // Add Default Sidebar Widgets Here; ?>
                                <?php endif; // end sidebar widget area ?>
                        	<?php } ?>
						<?php tha_sidebar_bottom(); ?>
                    </div><!-- #secondary-inenr-1 -->
				</div><!-- #secondary-inenr -->
			</div><!-- #secondary .widget-area -->
			<?php tha_sidebars_after(); ?>
		<?php } ?>

<?php get_footer(); ?>