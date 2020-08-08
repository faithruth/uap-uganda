<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package UAP_Uganda
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'uap-uganda' ); ?></a>

	<header id="masthead" class="site-header">
		<hr class="uap-header-divider">
		<div class="uap-main-header">
			<div class="container">
				<nav class="navbar navbar-expand-lg">
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'thumbnail' );
					if ( has_custom_logo() ) {
							echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
					} else {
							echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
					}
					?>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<?php
						wp_nav_menu( array(
							'theme_location'    => 'menu-1',
							'menu_id'        => 'primary-menu',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'navbarTogglerDemo02',
							'menu_class'        => 'navbar-nav ml-auto mt-2 mt-lg-0',
						) );
					?>
				</nav>
			</div>
		</div>
		<hr class="uap-header-divider">

		
	</header><!-- #masthead -->
