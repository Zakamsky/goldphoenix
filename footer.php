<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package
 */

?>

	<footer id="site-footer" class="site-footer">
        <div class="site-footer__wrapper container">
            <div class="row">
                <div class="col-sm-6 col-lg-3" >
                    <?php the_custom_logo();?>
                </div>
                <div class="col-sm-6 col-lg-3 site-footer__widget-block">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                </div>
                <div class="col-sm-6 col-lg-3 site-footer__widget-block">
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                </div>
                <div class="col-sm-6 col-lg-3 site-footer__widget-block">
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                </div>
            </div>
        </div>
		<div class="site-info">
            <div class="container py-3 d-flex justify-content-between">
                <span class="copyright">
                    &copy; 2019-<?=date("Y");?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>">gold-phoenix.ru</a>
                </span>
                <span class="copy-dev">
                    Разработка и поддержка сайта <a href="https://elkin.dev/">Alex Elkin</a>
                </span>
            </div><!--.container-->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
<button type="button" class="to-top btn btn-lg btn-outline-secondary rounded-circle gototop-js"><span class="triangled-arrow-up"></span></button>
</div><!-- #page -->

<?php wp_footer(); ?>


</body>
</html>
