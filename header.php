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
    <div class="navbar top-bar navbar-light bg-maine-gradient">
        <p class="h6 p-1 m-0">+7 987 65 43 210</p>
        <p class="p-1 m-0">texto por ejemplo</p>
    </div>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$goldphoenix_description = get_bloginfo( 'description', 'display' );
			if ( $goldphoenix_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $goldphoenix_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'goldphoenix' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

    <div class="flow-container">
        <div class="row">
            <div class="col-md-2 d-flex align-items-center justify-content-center py-3">
                <img src="https://github.com/Zakamsky/Zakamsky.github.io/blob/master/img/phoenix.png?raw=true" alt="" class="img-logo">
            </div>
            <div class="col-md-7 d-flex">
                <div class="title-block my-auto">
                    <h1 class="site-title">
                        Золотой Феникс
                    </h1>
                    <p class="h3">
                        Сайт про феншуй и астрологию
                    </p>
                </div>

            </div>
            <div class="col-md-3 d-flex">
<!--                <form class="form-inline my-auto">-->
<!--                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
<!--                    <button class="btn btn-outline-danger   my-2 my-sm-0" type="submit">Search</button>-->
<!--                </form>-->
                <?php get_search_form(); ?>

            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light text-danger">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-danger" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-danger dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item text-danger" href="#">Action</a>
                        <a class="dropdown-item text-danger" href="#">Another action</a>
                        <a class="dropdown-item text-danger" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>