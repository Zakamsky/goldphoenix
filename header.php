<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'goldphoenix' ); ?></a>


	<header id="masthead" class="site-header">
        <div class="navbar top-bar navbar-light bg-main-gradient-to-left">
            <div class="container d-flex">
                <p class="h6 p-1 m-0">
                    <a href="#!" class="text-light">
                        +7 987 65 43 210
                    </a>
                </p>
                <div class="p-1 ml-auto">
                    <?php get_search_form(); ?>
                </div>
            </div>

        </div>
		<div class="site-branding container">
            <div class="row">
                <div class="col-md-4 d-flex align-items-center justify-content-center py-3">
                    <?php the_custom_logo('img-logo'); ?>
                </div>
                <div class="col-md-8 d-flex align-items-center">
                    <div class="site-branding__wrapper">
                        <?php
                        if ( is_front_page() && is_home() ) :
                            ?>
                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="text-primary"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php
                        else :
                            ?>
                            <p class="site-title h1"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                        <?php
                        endif;
                        $goldphoenix_description = get_bloginfo( 'description', 'display' );
                        if ( $goldphoenix_description || is_customize_preview() ) :
                            ?>
                            <p class="site-description h3"><?php echo $goldphoenix_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
		</div><!-- .site-branding -->
        <nav id="main-nav" class="main-menu navbar navbar-expand-lg navbar-primary" aria-labelledby="main-nav-label">

            <h2 id="main-nav-label" class="sr-only">
                Главна навигация
            </h2>

            <div class="container">

                <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
                    <span class="navbar-toggler-icon"></span> <span class="navbar-toggler__text">Меню</span>
                </button>

                <!-- The WordPress Menu goes here -->
                <?php wp_nav_menu(
                    array(
                        'theme_location'  => 'primary',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navbarNavDropdown',
                        'menu_class'      => 'navbar-nav',
                        'fallback_cb'     => '',
                        'menu_id'         => 'main-menu',
                        'depth'           => 2,
                        'walker'          => new goldphoenix_WP_Bootstrap_Navwalker(),
                    )
                ); ?>
            </div><!-- .container -->

        </nav><!-- .site-navigation -->

	</header><!-- #masthead -->


