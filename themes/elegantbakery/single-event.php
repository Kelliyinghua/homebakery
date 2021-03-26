<?php
/**
 * The template for displaying event single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Elegant_Bakery_Theme
 */

get_header();
?>

	<div class="grid-x">
		
		<div class="small-12 medium-9 large-9">
			<main id="primary" class="site-main">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'elegantbakerytheme' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'elegantbakerytheme' ) . '</span> <span class="nav-title">%title</span>',
						)
					);

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</main><!-- #main -->
		</div> <!-- post content (large-8) ends -->
		

		<div class="cell small-12 medium-3 large-3 custom-sidebar" style="height: 100%">
			<?php get_sidebar();?>
		</div>
	</div> <!-- grid-x ends -->


	</div>

<?php
get_footer();

