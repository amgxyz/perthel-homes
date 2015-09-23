<?php
/**
 * The template for displaying search forms in Perthel Homes
 *
 * @package Perthel Homes
 * @since Perthel Homes 1.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<?php /*?><label for="s" class="assistive-text"><?php _e( 'Search', 'perthel_homes' ); ?></label><?php */?>
		<input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'perthel_homes' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'perthel_homes' ); ?>" />
	</form>
