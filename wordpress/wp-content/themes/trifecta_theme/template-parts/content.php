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
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wp-theme' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-theme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article>
