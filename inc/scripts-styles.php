<?php
/**
 * Perthel Homes Script and Style Enqueue.
 *
 * @package Perthel Homes
 */

/**
 * Enqueue scripts and styles
 */
function perthel_homes_scripts() {
	global $post;

	// Enqueue Scripts

	wp_enqueue_script( 'jquery' );

	// wp_enqueue_script( 'perthel-homes-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	
	wp_enqueue_script( 'perthel-homes-navigation', get_template_directory_uri() . '/js/superfish.js', array(), '20120206', true );
	
	wp_enqueue_script( 'perthel-homes-navigation-sub', get_template_directory_uri() . '/js/easyaspie.js', array(), '20120206', true );

	if ( perthel_homes_ltie9() ) {
		wp_enqueue_script( 'foundation3', get_template_directory_uri() . '/js/foundation3/foundation.min.js', array( 'jquery' ), '20131120', true );
		wp_enqueue_script( 'app', get_template_directory_uri() . '/js/foundation3/app.js', array( 'jquery' ), '20131119', true );
	} else {
		wp_enqueue_script( 'foundation', get_template_directory_uri() . '/js/foundation.min.js', array( 'jquery' ), '20131014', true );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js', array(), '20130202' );
	
	// Load animate effects on scroll down
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', array(), '20131101', true );

	// Enqueue Styles

	wp_register_style( 'reset', get_template_directory_uri() . '/css/reset.css', array(), '20131107', 'all' );
	wp_enqueue_style( 'reset' );

	wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '20130203', 'all' );
	wp_enqueue_style( 'normalize' );

	if ( perthel_homes_ltie9() ) {
		wp_register_style( 'foundation3', get_template_directory_uri() . '/css/foundation3/foundation.min.css', array(), '20131013', 'all' );
		wp_enqueue_style( 'foundation3' );
	} else {
		wp_register_style( 'foundation', get_template_directory_uri() . '/css/foundation.min.css', array(), '20131013', 'all' );
		wp_enqueue_style( 'foundation' );
	}
	
	wp_register_style( 'animated', get_template_directory_uri() . '/css/animate.css', array(), '20130203', 'all' );
	wp_enqueue_style( 'animated' );
	
	wp_enqueue_style( 'perthel-homes-style', get_stylesheet_uri() );
	
	wp_register_style( 'superfish', get_template_directory_uri() . '/css/superfish.css', array(), '20131013', 'all' );
	wp_enqueue_style( 'superfish' );
}
add_action( 'wp_enqueue_scripts', 'perthel_homes_scripts' );

function perthel_homes_script_functions() { ?>
	
    <?php if(!perthel_homes_ltie9()) { ?>
    <script type="text/javascript">
    jQuery(document).ready(function($){
        $(document).foundation();
		
		// Navigation Call
		$('nav').easyPie();
		$('.menubtn').click(function() {
			$(".main-navigation > div > ul").slideToggle();
			$(".menubtn").toggleClass('open');
		});
		
		// Add 'has_children' class to menus
		if($('.menu-item').has('ul.sub-menu')) {
			$('ul.sub-menu').siblings('a').addClass('has-children');
			// $('ul.sub-menu').siblings('a.has-children').wrapInner('<span/>');
		}
		
		// Scroll Top
		$('.scroll-top').click(function(){
			$('html, body').animate({scrollTop : 0},800);
			return false;
		});
    });
	
	(function($){
		var $window_resize = $(window);
		$window_resize.on('resize', function(e){
			if($window_resize.width() > 623) {
				setTimeout(function(){
					$('#secondary').css({
					'height':$('#main').innerHeight()
					});
				}, 1000);
				
				setTimeout(function(){
					$('#secondary-footer').css({
					'height':$('.site-footer').innerHeight()-20
					});
				}, 1000);
				
				$('#secondary-inenr').css({
					'padding-bottom':$('#secondary .social-media-widget').height() + 20,
				});
				
				// Apply header height to coverings
				$('.site-header-coverings').css({
					'padding-bottom':$('.site-header').innerHeight(),
				});
				
			} else {
				$('#secondary, #secondary-footer').css({
					'height': 'auto'
				});
				
				// Apply header height to coverings
				$('.site-header-coverings').css({
					'padding-bottom':$('.site-header').innerHeight(),
				});
			}
		}).trigger('resize');
	})(jQuery);
	
	// Setting Visibility for scroll to top button
	jQuery(window).scroll(function() {
		if (jQuery(window).scrollTop() > jQuery(document).height()/2) {
			jQuery('.scroll-top').css('visibility','visible');
		} else {
			jQuery('.scroll-top').css('visibility','hidden');
		}
	});
	
	// Scroll Load effects
	wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
    </script>
    <?php } else { ?>
    <script type="text/javascript">
    jQuery(document).ready(function($){
        // Navigation Call
		$('nav').easyPie();
		$('.menubtn').click(function() {
			$(".main-navigation > div > ul").slideToggle();
			$(".menubtn").toggleClass('open');
		});
		
		// Add 'has_children' class to menus
		if($('.menu-item').has('ul.sub-menu')) {
			$('ul.sub-menu').siblings('a').addClass('has-children');
			// $('ul.sub-menu').siblings('a.has-children').wrapInner('<span/>');
		}
		
		// Scroll Top
		$('.scroll-top').click(function(){
			$('html, body').animate({scrollTop : 0},800);
			return false;
		});
    });
	
	(function($){
		var $window_resize = $(window);
		$window_resize.on('resize', function(e){
			if($window_resize.width() > 623) {
				setTimeout(function(){
					$('#secondary').css({
					'height':$('#main').innerHeight()
					});
				}, 1000);
				
				setTimeout(function(){
					$('#secondary-footer').css({
					'height':$('.site-footer').innerHeight() - 20
					});
				}, 1000);
				
				$('#secondary-inenr').css({
					'padding-bottom':$('#secondary .social-media-widget').height() + 20,
				});
				
				// Apply header height to coverings
				$('.site-header-coverings').css({
					'padding-bottom':$('.site-header').innerHeight(),
				});
			} else {
				$('#secondary, #secondary-footer').css({
					'height': 'auto'
				});
				
				// Apply header height to coverings
				$('.site-header-coverings').css({
					'padding-bottom':$('.site-header').innerHeight(),
				});
			}
		}).trigger('resize');
	})(jQuery);
	
	// Setting Visibility for scroll to top button
	jQuery(window).scroll(function() {
		if (jQuery(window).scrollTop() > jQuery(window).height()/2) {
			jQuery('.scroll-top').css('visibility','visible');
		} else {
			jQuery('.scroll-top').css('visibility','hidden');
		}
	});
	
	// Scroll Load effects
	wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
    </script>
	<?php } ?>

<?php
}
add_action('wp_footer','perthel_homes_script_functions',30);