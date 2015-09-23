<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Perthel Homes
 * @since Perthel Homes 1.0
 */
?>
		<?php tha_sidebars_before(); ?>
		<div id="secondary" class="widget-area left three large-3 medium-4 small-12 wow fadeIn animated" data-wow-delay="100ms" role="complementary">
        	<div id="secondary-inenr" class="left columns twelve large-12 medium-12 small-12">
            	<div id="secondary-inenr-1" class="left twelve large-12 medium-12 small-12">
				<?php tha_sidebar_top(); ?>
                <?php do_action( 'before_sidebar' ); ?>
                <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
                    <?php // Add Default Sidebar Widgets Here; ?>
                <?php endif; // end sidebar widget area ?>
                <?php tha_sidebar_bottom(); ?>
				</div><!-- #secondary-inenr-1 -->
            	
                <?php if( get_field('facebook', 'options') || 
                get_field('linkedin', 'options') || 
                get_field('houzz', 'options') ) { ?>
                <aside class="widget social-media-widget">
                    <ul class="social-media text-center">
                        <?php if( get_field('houzz', 'options') ) { ?>
                        <li class="wow fadeIn animated" data-wow-delay="100ms">
                            <!--<a href="<?php $custom_url4 = get_field('houzz', 'options'); if (!preg_match("~^(?:f|ht)tps?://~i", $custom_url4)) { $custom_url4 = "http://" . $custom_url4; } echo $custom_url4; ?>">
                                <img src="<?php bloginfo('template_directory') ?>/images/houzz.png" height="42" width="42" alt="Houzz" />
                            </a>-->
                        </li>
                        <?php } if( get_field('facebook', 'options')) { ?>
                        <li class="wow fadeIn animated" data-wow-delay="100ms">
                            <!--<a href="<?php $custom_url3 = get_field('facebook', 'options'); if (!preg_match("~^(?:f|ht)tps?://~i", $custom_url3)) { $custom_url3 = "http://" . $custom_url3; } echo $custom_url3; ?>">
                                <img src="<?php bloginfo('template_directory') ?>/images/fb.png" height="42" width="42" alt="Facebook" />
                            </a>-->
                        </li>
                        <?php } ?>
                        <?php if( get_field('linkedin', 'options')) { ?>
                        <li class="wow fadeIn animated" data-wow-delay="100ms">
                            <!--<a href="<?php $custom_url5 = get_field('linkedin', 'options'); if (!preg_match("~^(?:f|ht)tps?://~i", $custom_url5)) { $custom_url5 = "http://" . $custom_url5; } echo $custom_url5; ?>">
                                <img src="<?php bloginfo('template_directory') ?>/images/in.png" height="42" width="42" alt="LinkedIn" />
                            </a>-->
                        </li>
                        <?php } ?>
                    </ul><!-- .social-media -->
                    <div style="clear:both; height:0"></div>
                </aside><!-- .widget -->
                <div style="clear:both; height:0"></div>
                <?php } ?>
            
            </div><!-- #secondary-inenr -->
        </div><!-- #secondary .widget-area -->
		<?php tha_sidebars_after(); ?>