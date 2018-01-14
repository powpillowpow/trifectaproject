<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp-theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="marg--bottom-s">
		<?php wp_theme_post_thumbnail(); ?>
	</div>

	<?php if ( 'post' === get_post_type() ) : ?>
	<div class="entry-meta text-right marg--bottom-l">
		<?php wp_theme_posted_on(); ?>
	</div><!-- .entry-meta -->
	<?php
	endif; ?>

	<div class="text">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->
</article>
