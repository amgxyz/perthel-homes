<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Perthel Homes
 * @since Perthel Homes 1.0
 */
?>

<?php tha_entry_before(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php tha_entry_top(); ?>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'perthel_homes' ), 'after' => '</div>' ) ); ?>
		<?php edit_post_link( __( 'Edit', 'perthel_homes' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-content -->
	<?php tha_entry_bottom(); ?>
</article><!-- #post-<?php the_ID(); ?> -->
<?php tha_entry_after(); ?>