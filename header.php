<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package travel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- insert Google Analytics upon creation -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- insert more Meta Tags OR (preferred) install/optimize Yoast Plugin -->
	<meta name="author" content="Ryan Pearson">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--     <div id="loader-wrapper">
        <div id="loader">
			<svg class="loader-logo" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		width="556.568px" height="556.568px" viewBox="0 0 556.568 556.568" style="enable-background:new 0 0 556.568 556.568;"
		xml:space="preserve">
				<g>
					<g>
						<path d="M210.37,133.725V43.434c0-2.264,0.116-4.501,0.333-6.708C97.48,66.592,13.985,169.665,13.985,292.27
							c0,145.969,118.33,264.299,264.298,264.299c145.967,0,264.299-118.33,264.299-264.299c0-122.605-83.496-225.678-196.719-255.543
							c0.217,2.207,0.334,4.443,0.334,6.708v90.292c61.441,26.42,104.58,87.531,104.58,158.542c0,95.113-77.381,172.498-172.498,172.498
							c-95.114,0-172.499-77.383-172.499-172.498C105.785,221.256,148.928,160.148,210.37,133.725z"/>
						<path d="M321.718,267.083V125.319V43.434c0-4.226-0.635-8.299-1.76-12.164C314.694,13.21,298.048,0,278.284,0
							c-19.765,0-36.411,13.21-41.674,31.27c-1.126,3.862-1.759,7.938-1.759,12.164v81.886v141.767
							c0,23.988,19.443,43.434,43.434,43.434C302.274,310.516,321.718,291.07,321.718,267.083z"/>
					</g>
				</g>
			</svg>
		</div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div> -->

	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'travel' ); ?></a>

		<header id="masthead" class="site-header header is-visible">
			<div class="site-branding">
				<?php
				the_custom_logo();
				?>
			</div><!-- .site-branding if you want to add logo later -->

			<nav id="site-navigation" class="main-navigation">
				<!-- laptop and desktop menu -->
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>

				<!-- mobile menu with hamburger removed and triple icon layout  -->
				<div class="mobile-menu">
					<a class="menu-item people" href="#people">
						<div class="menu-icon-container"><img class="people-icon menu-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/people-white.png" alt="people icon" /></div>
						<div class="menu-text">PEOPLE</div>
					</a>
					<a class="menu-item places" href="#places">
						<div class="menu-icon-container"><img class="places-icon menu-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/places-white.png" alt="places icon"/></div>
						<div class="menu-text">PLACES</div>
					</a>
					<a class="menu-item gallery" href="#gallery">
						<div class="menu-icon-container"><img class="gallery-icon menu-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/gallery-white.png" alt="galery icon"/></div>
						<div class="menu-text">GALLERY</div>
					</a>
				</div>

			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->

	<div id="content" class="site-content">