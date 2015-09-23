<?php
/**
 * Template Name: Gallery page, with sidebar
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
<?php if(perthel_homes_ltie9()) { get_sidebar(); } ?>

		<div id="primary" class="content-area right columns nine large-9 medium-8 small-12 wow fadeIn animated" data-wow-delay="100ms">
			<div id="content" class="site-content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>
                
                <?php if( have_rows('property') ): ?>
                <div style="clear:both; height:0;"></div>
                
                <div class="page-block left twelve large-12 medium-12 small-12">
                    <ul class="large-block-grid-4 medium-block-grid-4 small-block-grid-2 block-grid four-up">
                        <?php while ( have_rows('property') ) : the_row(); ?>
                            <li>
                                <?php if(get_sub_field('image')) { if(get_sub_field('page_link')) { ?><a class="page-block-image wow fadeIn animated" data-wow-delay="100ms" href="<?php if(get_sub_field('page_link')) { the_sub_field('page_link'); } else { echo "javascript:void(0);"; } ?>"><?php } ?>
                                	<?php if(get_sub_field('sold_out', 'options') == "Yes") { ?><div class="sold-out">&nbsp;</div><!-- .sold-out --><?php } ?>
                                	<img class="page-block-image" src="<?php $menu_image = get_sub_field('image'); echo $menu_image['sizes']['property-listing']; ?>" />
								<?php if(get_sub_field('page_link')) { ?></a><?php } } ?>
                                
                                <?php if(get_sub_field('title')) { ?><h5 class="page-block-title left text-center twelve large-12 medium-12 small-12 wow fadeIn animated" data-wow-delay="100ms">
                                    <?php if(get_sub_field('page_link')) { ?><a href="<?php if(get_sub_field('page_link')) { the_sub_field('page_link'); } else { echo "javascript:void(0);"; } ?>"><?php } ?>
                                        <?php the_sub_field('title'); ?>
                                    <?php if(get_sub_field('page_link')) { ?></a><?php } ?>
                                </h5><?php } ?>
                                
                                <div class="left twelve large-12 medium-12 small-12">
                                <?php if(get_sub_field('content')) { ?>
                                    <div style="clear:both; height:0"></div>
                                    <div class="page-block-content left twelve large-12 medium-12 small-12 wow fadeIn animated" data-wow-delay="100ms"><?php the_sub_field('content'); ?></div><!-- .content -->
                                <?php } ?>
                                
                                <?php if(get_sub_field('page_link')) { ?><div class="left text-right twelve large-12 medium-12 small-12 wow fadeIn animated" data-wow-delay="100ms"><a class="more" href="<?php $custom_url = get_sub_field('page_link'); if (!preg_match("~^(?:f|ht)tps?://~i", $custom_url)) { $custom_url = "http://" . $custom_url; } echo $custom_url; ?>">Learn More&raquo;</a></div><?php } ?>
                                </div><!-- left twelve large-12 medium-12 small-12 -->
                            </li>
                        <?php endwhile; ?>
                    </ul>
                   	<div style="clear:both; height:0;"></div>
                </div><!-- .page-block-bottom -->
                <?php endif; ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->


<?php if(!perthel_homes_ltie9()) { get_sidebar(); } ?>
<?php get_footer(); ?>