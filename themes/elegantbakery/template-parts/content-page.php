<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Elegant_Bakery_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if(!is_page()){ ?>
		<header class="entry-header">
			<?php the_title('<h1 class="entry-title">' , '</h1>'); ?>
		</header>
	<?php } ?>
	
	<?php if (has_post_thumbnail()) { ?>
		<div class="post-thumbnail">
			<img src="<?php echo esc_url( get_the_post_thumbnail_url()); ?>">
		</div>
	<?php } ?> <!-- post-thumbnail end here -->	
	
	<div class="entry-content">
		<?php
		the_content();
		
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'elegantbakerytheme' ),
				'after'  => '</div>',
			)
		);
		?>
	
	</div><!-- .entry-content -->
	

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			
		</footer><!-- .entry-footer -->
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
