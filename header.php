<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cville-weekly
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/navbar.js"></script>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="<?php bloginfo('template_directory'); ?>/hamburgers-master/dist/hamburgers.css" rel="stylesheet">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cville-weekly' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<!-- <div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div> --><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'cville-weekly' ); ?></button>
			<div id="nav-background">
			<div id="nav-section-1" class="nav-section">
				<a href="<?php echo esc_url( $category_link ); ?>" class ="<?php echo esc_html( $categories[0]->name);?>color">
				 <?php wp_nav_menu( array(

					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
				); 
			?></a></div>
			<div id="nav-section-2" class="nav-section">
				<div class="dropdown">
					<button type="button" id="subscribebutton">Subscribe</button>
					<div class="offset"></div>
					<div class="dropdown-content">
						<form action="<?php bloginfo('template_directory'); ?>/email.php" method="post">
		    				<input type="text" name="email" placeholder="johndoe@gmail.com">
		    				<input type="text" name="name" placeholder="John Doe">
		    				<input type="submit" name="submit" id="submityouremail">
  						</form>
  					</div>
 				</div>

				<?php get_search_form(); ?>

 			 </div>
			</div>
		</nav><!-- #site-navigation -->


		<!-- CENTERED NAVBAR -->
		<nav id="site-navigation-mobile" class="main-navigation mobile" role="navigation">
			<button class="menu-toggle-mobile" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'cville-weekly' ); ?></button>
			<div id="nav-background-mobile">
			<div id="nav-section-1-mobile" class="nav-section mobile"><?php

				wp_nav_menu( array(

					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
				);
			?></div>
			<div id="nav-section-2-mobile" class="nav-section mobile">
				<div class="dropdown mobile">	
					<button type="button" id="subscribebutton" class="subscribe-mobile">Subscribe</button>
					<div class="offset mobile"></div>
					<div class="dropdown-content mobile">
						<form class="mobileform" action="<?php bloginfo('template_directory'); ?>/email.php" method="post">
		    				<input class="centeralign" type="text" name="email" placeholder="johndoe@gmail.com">
		    				<input type="text" name="name" placeholder="John Doe">
		    				<input type="submit" name="mobile" id="submityouremail">
  						</form>
  					</div>
 				</div>
				<?php get_search_form(); ?>
 			 </div>
			</div>
		</nav>

	<!-- 	MOBILE NAVBAR -->

	<div id="cvillelogo"><a href="<?php home_url( $path, $scheme ); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/Menu-logo.png"></a></div>

	<div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

	  <?php
				wp_nav_menu( array(

					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
				);
			?>

	</div>

<!-- Use any element to open the sidenav -->
<span id="hamburgercontainer" onclick="openNav()"><p id="hamburger">☰</p></span>


	</header><!-- #masthead -->

	<div id="content" class="site-content">

	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>

	</body>
	</html>
