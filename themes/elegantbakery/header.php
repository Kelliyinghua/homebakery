<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Elegant_Bakery_Theme
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'elegantbakerytheme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-style">
			<!-- Site header starts here -->
			<div class="site-branding grid-x grid-padding-x">
				<div class="large-4 large-offset-4 small-12">
					<?php the_custom_logo(); ?>	
				</div>
			</div>

			<div class="grid-x grid-paading-x">
				<div class="large-4 large-offset-4 small-12">
					<?php
					if ( is_front_page() && is_home() ) :
						?>	
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					endif;
					
					$elegantbakerytheme_description = get_bloginfo( 'description', 'display' );
					if ( $elegantbakerytheme_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $elegantbakerytheme_description;?></p>
					<?php 
				endif; ?>
				
				</div>
			</div><!-- .site-branding -->
			
			<!-- #sit-navigation starts here -->
			<div class="grid-x grid-padding-x site-nav-style">
				<nav id="site-navigation" class="main-navigation large-12 small-12">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="true">
						<?php // esc_html_e( 'Mobile Menu', 'elegantbakerytheme' ); ?>
					</button>
					
					<?php
						if(has_nav_menu('footer')){
						wp_nav_menu(
							array(
								'theme_location' => 'menu-primary',
								'menu_id'        => 'primary-menu',
							)
						);}
					?>
				</nav>
				<!-- #mobile-navigation -->
				<nav id="site-navigation-mobile">
					<div class="mobile-navigation large-12 small-12" data-responsive-toggle="example-menu" data-hide-for="medium">
						<button class="menu-icon" type="button" data-toggle></button>
					</div>

					<div class="top-bar" id="example-menu" >
						<div class="top-bar-left">
							<ul class="dropdown menu" data-dropdown-menu>
								<?php
									if(has_nav_menu('footer')){
									wp_nav_menu(
										array(
											'theme_location' => 'menu-primary',
											'menu_id'        => 'primary-menu',
										)
									);}
								?>
							</ul>
						</div>
					</div>
				</nav>
				
			</div>
			
		</div>
		
	</header><!-- #masthead -->

	<div class="grid-container">
