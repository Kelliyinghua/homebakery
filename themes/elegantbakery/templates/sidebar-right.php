<?php
/**
 * Template Name: Sidebar (right)
 * Template Post Type: post, page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Elegantbakery_Theme
 */

get_header();
?>
<div class="grid-container">
	<div class="grid-x grid-margin-x grid-margin-y">

		<div class="cell small-12 medium-8">	
			<main id="primary" class="site-main">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div>
	
		<div class="cell small-12 medium-4 custom-sidebar">
			<?php get_sidebar();?>
		</div>
	
	</div>
</div>
<?php
get_footer();?>
