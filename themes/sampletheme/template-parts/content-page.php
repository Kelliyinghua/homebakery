<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sample_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header grid-x">
		<div class="cell large-6 small-6">
			<?php the_title( '<h1 class="entry-title entry-title-block-style">', '</h1>' ); ?>
			<p class="entry-title-block-style">Homemade Sweet Treats, Fresh Brewed Coffee, Delight Lunch, Catering. </p>
		</div>
		
		<div class="callout large-4 large-offset-2 small-6">
			<?php if ( get_header_image() ) : ?>
				<div id="site-header">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" width="220" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div>
			<?php endif; ?>		
		</div>
	</header><!-- .entry-header -->
	

	<?php sampletheme_post_thumbnail(); ?>

	<div class="grid-x">
		<div class="entry-content large-12 small-12">
			<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sampletheme' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->
	</div>
	

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
