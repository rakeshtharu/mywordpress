<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rakesh_WP
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'rakesh_wp'); ?></a>

		<header>
			<!-- Topbar Start -->
			<div class="container-fluid bg-dark text-light px-0 py-2">
				<div class="row gx-0 d-none d-lg-flex">
					<div class="col-lg-7 px-5 text-start">
						<span class="fa fa-phone-alt me-2"></span>
						<span>+977 9815641417</span>
					</div>
					<div class="col-lg-5 px-5 text-end">
						<span>Follow Us:</span>
					</div>
				</div>
			</div>
			<!-- Topbar End -->

			<!-- Navbar Start -->
			<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">

				<!-- Logo -->
				<a href="<?php echo home_url(); ?>" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
					<?php the_custom_logo(); ?>
					<h1 class="m-0"><?php bloginfo('name'); ?></h1>
				</a>

				<!-- Toggle -->
				<button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- Menu -->
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'menu-1',
						'menu_class'     => 'navbar-nav ms-auto p-4 p-lg-0',
						'container'      => false,
				
					));
					?>
				</div>
			</nav>
		</header><!-- #masthead -->