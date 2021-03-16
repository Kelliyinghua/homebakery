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
					
					$sampletheme_description = get_bloginfo( 'description', 'display' );
					if ( $sampletheme_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $sampletheme_description;?></p>
					<?php 
				endif; ?>
				
				</div>
			</div><!-- .site-branding -->
			
			<!-- navigation starts here -->
			<div class="grid-x grid-padding-x site-nav-style">
				<nav id="site-navigation" class="main-navigation large-10 large-offset-2 small-12">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Desktop Horizontal Menu', 'sampletheme' ); ?></button>
					<?php
					if(has_nav_menu('footer')){
					wp_nav_menu(
						array(
							'theme_location' => 'menu-primary',
							'menu_id'        => 'primary-menu',
						)
					);}
					?>
				</nav><!-- #site-navigation -->
			</div>
			
		</div>
		
		
		<!-- <div class="grid-x">	
			<div class="cell large-12">
				<?php if ( get_header_image() ) : ?>
				<div id="site-header">
					<img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="350" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					<h1><?php the_title()?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></h1></a>
				</div>
				<?php endif; ?>
				<?php the_title( '<h1 class="entry-title entry-title-block-style">', '</h1>' ); ?>
				<img alt="" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">
			</div> 
			
		</div>  -->

		

		

		
	</header><!-- #masthead -->

	<div class="grid-container full">
