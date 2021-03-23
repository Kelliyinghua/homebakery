<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Elegant_Bakery_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="large-8">
	<header class="entry-header">
		<?php
			if (!is_product() ) {
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title entry-title-block-style">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
			}

			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta grid-x">
					<?php
					elegantbakerytheme_posted_on();
					elegantbakerytheme_posted_by();
					?>
				</div><!-- .entry-meta -->
		
		<?php endif; ?>
			
	</header><!-- .entry-header -->

	<?php elegantbakerytheme_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'elegantbakerytheme' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
			
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'elegantbakerytheme' ),
				'after'  => '</div>',
			)
		);
		
		?>
	</div><!-- .entry-content -->
	

	<footer class="entry-footer">
		<?php elegantbakerytheme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
