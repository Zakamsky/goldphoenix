<?php
/**
 * The template for displaying product search form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/product-searchform.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<form role="search" method="get" class="form-search form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">

		<label class="sr-only" for="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>"><?php esc_html_e( 'Search for:', 'goldphoenix' ); ?></label>
		<input type="search" id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>" class="search-field field form-search__input form-control" placeholder="<?php echo esc_attr__( 'Search products&hellip;', 'goldphoenix' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
		<input type="hidden" name="post_type" value="product" />

			<button class="form-search__btn btn btn-outline-primary" type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'goldphoenix' ); ?>">
                <span class="dashicons dashicons-search"></span>
                <span class="sr-only">Поиск</span>
            </button>


</form>
