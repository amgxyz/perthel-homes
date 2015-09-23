<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Perthel Homes
 * @since Perthel Homes 1.0
 */
?>
		<div style="clear:both; height:0"></div>
	<?php tha_content_bottom(); ?>
	</div><!-- #main .site-main .row -->
	<?php tha_content_after(); ?>
</div><!-- #page .hfeed .site -->

<?php tha_footer_before(); ?>
<footer id="colophon" class="site-footer wow fadeIn animated" data-wow-delay="100ms" itemscope itemtype="http://schema.org/LocalBusiness" role="contentinfo">
	<?php tha_footer_top(); ?>
	<div class="site-info row">
    	<div id="secondary-footer" class="left columns three large-3 medium-4 small-12"  role="complementary">

				<?php if( get_field('facebook', 'options') || 
                get_field('linkedin', 'options') || 
                get_field('houzz', 'options') ) { ?>
                <aside class="widget social-media-widget">
                    <ul class="social-media text-center">
                        <?php if( get_field('houzz', 'options') ) { ?>
                        <li class="wow fadeIn animated" data-wow-delay="100ms">
                            <a href="<?php $custom_url4 = get_field('houzz', 'options'); if (!preg_match("~^(?:f|ht)tps?://~i", $custom_url4)) { $custom_url4 = "http://" . $custom_url4; } echo $custom_url4; ?>">
                                <img src="<?php bloginfo('template_directory') ?>/images/houzz.png" height="42" width="42" alt="Houzz" />
                            </a>
                        </li>
                        <?php } if( get_field('facebook', 'options')) { ?>
                        <li class="wow fadeIn animated" data-wow-delay="100ms">
                            <a href="<?php $custom_url3 = get_field('facebook', 'options'); if (!preg_match("~^(?:f|ht)tps?://~i", $custom_url3)) { $custom_url3 = "http://" . $custom_url3; } echo $custom_url3; ?>">
                                <img src="<?php bloginfo('template_directory') ?>/images/fb.png" height="42" width="42" alt="Facebook" />
                            </a>
                        </li>
                        <?php } ?>
                        <?php if( get_field('linkedin', 'options')) { ?>
                        <li class="wow fadeIn animated" data-wow-delay="100ms">
                            <a href="<?php $custom_url5 = get_field('linkedin', 'options'); if (!preg_match("~^(?:f|ht)tps?://~i", $custom_url5)) { $custom_url5 = "http://" . $custom_url5; } echo $custom_url5; ?>">
                                <img src="<?php bloginfo('template_directory') ?>/images/in.png" height="42" width="42" alt="LinkedIn" />
                            </a>
                        </li>
                        <?php } ?>
                    </ul><!-- .social-media -->
                    <div style="clear:both; height:0"></div>
                </aside><!-- ..widget -->
         	<?php } ?>
        </div><!-- #secondary-footer -->
        
        
        <?php if(get_field('company_name','options') ||
		get_field('address_line_1','options') ||
		get_field('address_line_2','options') ||
		get_field('city/state','options') ||
		get_field('zip','options') ||
		get_field('country','options') ||
		get_field('city/state','options') ||
		get_field('phone_number', 'options') ||
		get_field('fax', 'options') ||
		get_field('email', 'options') ||
		get_field('disclaimer', 'options') ||
		is_home() || is_front_page()) { ?>
        <div id="primary-footer" class="right columns eight large-8 medium-8 small-12 wow fadeIn animated" data-wow-delay="100ms">
            <div class="disclaimer text-right medium-text-right small-text-center left twelve large-12 medium-12 small-12">
            	<?php the_field('disclaimer', 'options'); ?>
            </div><!-- .disclaimer -->
            <address class="contact-address text-right medium-text-right small-text-center left twelve large-12 medium-12 small-12" itemscope itemtype="http://schema.org/PostalAddress">
                <small><?php if(get_field('company_name','options')) { echo "<span itemprop='name'>"; the_field('company_name','options'); echo "</span>&nbsp;"; } ?>
                <?php if(get_field('address_line_1','options')) { echo "<span itemprop='streetAddress addressLocality'>"; the_field('address_line_1','options'); echo "</span>&nbsp;"; } ?>
                
                <?php if(get_field('address_line_2','options')) { echo "<span itemprop='streetAddress addressLocality'>"; the_field('address_line_2','options'); echo "</span>&nbsp;"; } ?>
                <?php if(get_field('city/state','options')) { echo "<span itemprop='addressRegion'>"; the_field('city/state','options'); echo "</span>&nbsp;"; } ?>
                <?php if(get_field('zip','options')) {  echo "<span itemprop='postalCode'>"; the_field('zip','options'); echo "</span>&nbsp;"; } ?>
                <?php if(get_field('country','options')) { echo "<span>"; the_field('country','options'); echo "</span>&nbsp;"; } ?>
                <?php if(get_field('phone_number', 'options')) { echo "<span itemprop='telephone'><strong>Phone:</strong> "; the_field('phone_number', 'options'); echo "</span>&nbsp;"; } ?>
                <?php if(get_field('fax', 'options')) { echo "<span itemprop='fax'><strong>Fax:</strong> "; the_field('fax', 'options'); echo "</span>&nbsp;"; } ?>
                <?php if(get_field('email', 'options')) { echo "<span itemprop='email'>"; ?> <a href="mailto:<?php the_field('email', 'options'); ?>"> <?php the_field('email', 'options'); ?></a><?php echo "</span>"; } ?></small>
            </address><!-- .contact-address -->
            <?php // if(is_home() || is_front_page()) { ?>
	        <div class="left text-right medium-text-right small-text-center large-12 medium-12 small-12"><small><?php if( is_front_page() || is_home() ) : ?><a href="http://orionweb.net" target="_blank">Website created by Milwaukee Area Developers</a><?php endif; ?></small></div>
        	<?php // } ?>
        </div><!-- #primary-footer -->
        <?php } ?>
        
        <div style="clear:both; height:0"></div>
	</div><!-- .site-info .row -->
	<?php tha_footer_bottom(); ?>
</footer><!-- #colophon .site-footer -->
<?php tha_footer_after(); ?>
<a class="scroll-top wow fadeIn animated" data-wow-delay="100ms" href="#">
	<img src="<?php echo get_template_directory_uri(); ?>/images/footer-scroll-top.png" alt="scroll to top">
</a>

<?php wp_footer(); ?>
<?php tha_body_bottom(); ?>
</body>
</html>