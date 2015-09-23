<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Perthel_homes
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
                        	<aside>
	                        	<?php if (get_field( 'home_plan_specs' ) ) { ?>
                        			<p><?php the_field('home_plan_specs'); ?></p>
		                        <?php } ?>
	                        	<?php if (get_field( 'home_featured_blurb' ) ) { ?>
                        			<p><?php the_field('home_featured_blurb'); ?></p>
	                        	<?php } ?>
	                        	<div style="clear:both; height:0;"></div>
	                        	<?php if (get_field( 'home_floor_plan' ) ) {
	                        		$plan = get_field('home_floor_plan'); ?>
                        			<p>
	                        			<a class="fancybox image" href="<?php echo $plan['url']; ?>">
	                        				<img src="<?php echo $plan['sizes']['medium']; ?>" alt="<?php echo $plan['alt']; ?>" />
                        				</a>
                        			</p>
	                        	<?php } ?>
                        	</aside>
						<?php tha_sidebar_bottom(); ?>
                    </div><!-- #secondary-inenr-1 -->

                    
				
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
                    
                    <?php $post_id = get_the_ID(); ?>

					<div class="entry-content home-plan">
						<div class="home-plan-main">
							<div class="plan-content">
								<?php the_content(); ?>
							</div><!--plan-content-->

							<!--<?php $images = get_field('home_photo_gallery');

							if( $images ): ?>

							    <div class="plan-gallery">
							        <ul class="plan-slides">
							            <?php foreach( $images as $image ): ?>
							                <li>
							                    <a class="" href="<?php echo $image['url']; ?>"><img src="<?php echo $image['sizes']['property-listing']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" /></a>
							                </li>
							            <?php endforeach; ?>
							        </ul>
							    </div>
							<?php endif; ?>-->
						</div><!--home-plan-main-->
					</div><!-- .entry-content -->
					
                	<?php if(get_field('home_photo_gallery')) { ?>
                    <div style="clear:both; height:0"></div>
                    <div class="entry-pre-gallery-content">
                    	<?php the_field('home_photo_gallery'); ?>
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
                        	<aside>
	                        	<?php if (get_field( 'home_plan_specs' ) ) { ?>
                        			<p><?php the_field('home_plan_specs'); ?></p>
		                        <?php } ?>
	                        	<?php if (get_field( 'home_featured_blurb' ) ) { ?>
                        			<p><?php the_field('home_featured_blurb'); ?></p>
	                        	<?php } ?>
	                        	<div style="clear:both; height:0;"></div>
	                        	<?php if (get_field( 'home_floor_plan' ) ) {
	                        		$plan = get_field('home_floor_plan'); ?>
                        			<p>
	                        			<a class="fancybox image" href="<?php echo $plan['url']; ?>">
	                        				<img src="<?php echo $plan['sizes']['medium']; ?>" alt="<?php echo $plan['alt']; ?>" />
                        				</a>
                        			</p>
	                        	<?php } ?>
                        	</aside>
						<?php tha_sidebar_bottom(); ?>
                    </div><!-- #secondary-inenr-1 -->
				</div><!-- #secondary-inenr -->
			</div><!-- #secondary .widget-area -->
			<?php tha_sidebars_after(); ?>
		<?php } ?>

<?php get_footer(); ?>