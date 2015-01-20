<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package oriental
 * @since oriental 1.3.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<small class="postmetadata">
			<?php
			if($post->post_parent) {
				printf( __( '&laquo; <a href="%1$s" title="Parent page: %2$s">%3$s</a>', 'oriental' ),
					esc_url( get_permalink($post->post_parent) ),
					esc_attr( get_the_title($post->post_parent) ),
					get_the_title($post->post_parent)
				);
			}
			?>
		</small>

		<?php edit_post_link( __( 'Edit', 'oriental' ), '<span class="edit-link">', '</span>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>

		<?php
		  $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0&depth=1');
		  if ($children) { ?>
		  <h3 class="subpages"><?php printf( __( 'Subpages', 'oriental' ) ); ?></h3>
		  <ul class="subpages">
			<?php echo $children; ?>
		  </ul>
		<?php } ?>

		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'oriental' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
