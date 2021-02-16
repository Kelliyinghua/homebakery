<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sample_Theme
 */

?>
</div>
	<footer id="colophon" class="site-footer grid-x grid-padding-x">
		<div class="grid-x cell large-12 small-12">
			<div class="callout large-3 medium-6">
				<div id="footer-logo"></div>
			</div>
			<div class="cell large-3 medium-6">
				<h3 class="footer-title">Open Hours</h3>
				<p>Mon–Sat : 7:00 AM – 7:00 PM</p>
				<p>Sunday : 7:00 AM – 8:00 PM</p>
			</div>
			<div class="cell large-3 medium-6">
				<h3 class="footer-title">Location</h3>
				<p>123, King Street, Oshawa, ON 12345</p>
			</div>
			<div class="cell large-3 medium-6">
				<h3 class="footer-title">Order & Pick Up</h3>
				<p>+1 905-000-1234</p>
				<p>homebakery@customerservice.ca</p>
			</div>
		</div>

			<div class="site-info grid-x cell larger-12 small-12">
				<div class="large-6">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'sampletheme' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'sampletheme' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'sampletheme' ), 'sampletheme', '<a href="https://yinghua-li.com">kelly.li</a>' );
					?>
				</div>
				<div class="large-6">
					<!--  social menu at footer -->
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer',
								'menu_id'        => 'social',
							)
						);
					?>
				</div>
					
					
			</div>
			<!-- .site-info -->
			
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
