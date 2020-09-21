<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldphoenix
 */

get_header();
?>

    <main id="primary" class="site-main">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php woocommerce_content(); ?>
                </div>
                <?php if ( !is_product() ) :?>
                    <div class="col-3 d-none d-lg-block order-first">
                        <?php get_sidebar('shop'); ?>
                    </div>
                <?php endif; ?>
            </div><!--.row-->
        </div><!--.container-->

    </main><!-- #main -->

<?php

get_footer();
