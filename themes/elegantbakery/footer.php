<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Elegant_Bakery_Theme
 */

?>

</div>
	<footer id="colophon" class="site-footer grid-x grid-padding-x">
		<div class="grid-x cell large-12 small-12">
			<div class="cell large-3 medium-6 footerLogoContainer">
				<div id="footer-logo">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/logo.svg" alt="homebakery logo">
				</div>
			</div>
			<div class="cell large-3 medium-6 footerContainer">
				<h3 class="footer-title">Open Hours</h3>
				<p>Mon–Sat : 7:00 AM – 7:00 PM</p>
				<p>Sunday : 7:00 AM – 8:00 PM</p>
			</div>
			<div class="cell large-3 medium-6 footerContainer">
				<h3 class="footer-title">Location</h3>
				<p><i class="fas fa-map-marker-alt"></i> 123, King Street, Oshawa, ON 12345</p>
			</div>
			<div class="cell large-3 medium-6 footerContainer">
				<h3 class="footer-title">Order & Pick Up</h3>
				<p><i class="fas fa-phone-alt"></i> +1 905-000-1234</p>
				<p><i class="fas fa-envelope"></i> homebakery@customerservice.ca</p>
			</div>
		</div>

			<div class="site-info grid-x cell larger-12 small-12">
				<div class="cell large-8  small-7 copyright">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'elegantbakerytheme' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'elegantbakerytheme' ), 'WordPress' );
					?>
				</a>
				
					&copy; <?php echo gmdate('Y'); ?>
				
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'elegantbakerytheme' ), 'elegantbakerytheme', '<a href="https://yinghua-li.com">kelly.li</a>' );
					?>
				</div>
				<div class="cell large-4 small-5 float-right ">
					<!--  social menu at footer -->
					<?php
					if(has_nav_menu('menu-primary')) {
						wp_nav_menu(
							array(
								'theme_location' => 'footer',
								'menu_id'        => 'social',
							)
						);
					}
					?>
				</div>
				<?php if (get_theme_mod('facebook_url')) { ?>
					<a class="facebook-link" href="<?php echo get_theme_mod('facebook_url');?>">

					</a>	
				<?php } ?>
			</div>
			<!-- .site-info -->
			
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
