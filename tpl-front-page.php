<?php
/**
 * Template Name: Front page, no sidebar
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
<script type="text/javascript" charset="utf-8">
  jQuery(document).ready(function($){
 
    $('.flexslider').flexslider({
      animation: "slide",
      animationLoop: false,
      itemWidth: 257,
      itemMargin: 5
    });
  });
</script>
		<div id="primary" class="content-area left column twelve large-12 medium-12 small-12 wow fadeIn animated" data-wow-delay="100ms">
			<div id="content" class="site-content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>
                
                <div style="clear:both; height:0;"></div>
                
                <div class="page-block left twelve large-12 medium-12 small-12">
                    <!--<ul class="large-block-grid-5 medium-block-grid-5 small-block-grid-2 block-grid five-up">
                        <?php while ( have_rows('property') ) : the_row(); ?>
                            <li>
                                <?php if(get_sub_field('image')) { if(get_sub_field('page_link')) { ?><a class="page-block-image wow fadeIn animated" data-wow-delay="100ms" href="<?php if(get_sub_field('page_link')) { the_sub_field('page_link'); } else { echo "javascript:void(0);"; } ?>"><?php } ?>
                                	<?php if ( get_sub_field( 'overlay', 'options' ) == "Sold out") { ?><div class="sold-out">&nbsp;</div><!-- .sold-out 
                                    <?php } elseif ( get_sub_field( 'overlay', 'options' ) == "Accepted" ) { ?><div class="accepted">&nbsp;</div><!-- .accepted 
                                    <?php } else { ?><div></div><?php } ?>
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
                                    <div class="page-block-content left twelve large-12 medium-12 small-12 wow fadeIn animated" data-wow-delay="100ms"><?php the_sub_field('content'); ?></div><!-- .content 
                                <?php } ?>
                                
                                <?php if(get_sub_field('page_link')) { ?><div class="left text-right twelve large-12 medium-12 small-12  wow fadeIn animated" data-wow-delay="100ms"><a class="more" href="<?php $custom_url = get_sub_field('page_link'); if (!preg_match("~^(?:f|ht)tps?://~i", $custom_url)) { $custom_url = "http://" . $custom_url; } echo $custom_url; ?>">Learn More&nbsp;&raquo;</a></div><?php } ?>
                                </div><!-- left twelve large-12 medium-12 small-12
                            </li>
                        <?php endwhile; ?>
                    </ul>-->
                    <div class="flexslider">
                        <ul class="slides">
                            <?php
                            //
                            $args = array( 'post_type' => 'current-homes',
                                           'posts_per_page' => -1 );

                            $loop = new WP_Query( $args );

                            while ( $loop->have_posts() ) : $loop->the_post(); ?>

                                <li>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if ( get_field( 'overlay') == "For Sale") { ?><div class="forsale">&nbsp;</div><!-- .forsale -->
                                        <?php } else { ?><div></div><?php } ?>
                                        <?php the_post_thumbnail( 'flex-slider' ); ?>
                                        <span><?php if (get_field('plan_name', get_the_ID())) { the_field('plan_name', get_the_ID()); }  ?></span>
                                    </a>
                                </li>
                            <?php endwhile;
                            wp_reset_postdata(); ?>

                        </ul>
                    </div> <!-- flexslider -->

                    <br/>
                    <ul class="large-block-grid-2 medium-block-grid-2 small-block-grid-2 block-grid two-up">
                        <?php
                            $args = array( 'numberposts' => '2' );
                            $recent_posts = wp_get_recent_posts( $args );

                            foreach( $recent_posts as $recent ){ ?>
                                <li>
                                    <a class="page-block-image wow fadeIn animated" data-wow-delay="100ms" href="<?php echo get_permalink( $recent["ID"] ); ?>"><?php
                                        if( has_post_thumbnail() ){
                                            echo get_the_post_thumbnail( $recent["ID"], "post-thumbnail" );
                                        } ?>
                                    </a>
                                    <h3><a class="heading wow fadeIn animated" data-wow-delay="100ms" href="<?php echo get_post_permalink( $recent["ID"] ); ?>"><?php echo get_the_title( $recent["ID"] ); ?></a></h3>
                                    <?php $excerpt = get_post_field( 'post_content', $recent["ID"] );
                                    $length = 150;
                                    if ( strlen( $excerpt ) > $length) {
                                        $excerpt = substr( $excerpt, 0, $length );
                                    } ?>
                                    <div class="wow fadeIn animated" data-wow-delay="100ms"><?php
                                        echo $excerpt . " ...";
                                        echo "<br/><br/>"; ?>
                                    </div>

                                    <div class="more read-more">
                                        <a class="learnmore wow fadeIn animated" data-wow-delay="100ms" href="<?php echo get_post_permalink( $recent["ID"] ); ?>">View Post&nbsp;&raquo;</a>
                                    </div>
                                </li>
                        <?php } ?>
                    </ul>
                   	<div style="clear:both; height:0;"></div>
                </div><!-- .page-block-bottom -->
			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->


<?php get_footer(); ?>