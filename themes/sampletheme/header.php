<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sample_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'sampletheme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="grid-x grid-padding-x">
			<div class="cell small-3 medium-2 large-2">
				<div class="site-branding small-5 large-4">
					<?php
					the_custom_logo(); ?>
					<!-- <?php
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$sampletheme_description = get_bloginfo( 'description', 'display' );
					if ( $sampletheme_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $sampletheme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?> -->

				</div><!-- .site-branding -->
			</div>
			
			<div class="cell small-6 small-offset-1 medium-8 medium-offset-2 large-offset-4 large-6">
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Desktop Horizontal Menu', 'sampletheme' ); ?></button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-primary',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
			</div>
			
		</div>
		<div class="grid-x">	
			<div class="cell large-6 small-6">
				<?php the_title( '<h1 class="entry-title entry-title-block-style">', '</h1>' ); ?>
				<p class="entry-title-block-style">Homemade Sweet Treats, Fresh Brewed Coffee, Delight Lunch, Catering. </p>
			</div>
			
			<div class="callout large-4 large-offset-2 small-6">
				<?php if ( get_header_image() ) : ?>
					<div id="site-header">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
						</a>
					</div>
				<?php endif; ?>		
			</div>
		</div>

		

		

		
	</header><!-- #masthead -->

	<div class="grid-container">
