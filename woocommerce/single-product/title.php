<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @package    WooCommerce\Templates
 * @version    1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $product;
if ( $product->is_in_stock() ) {
    echo '<p class="availability product-in-stock">In Stock</p>';
}


the_title( '<h1 class="product_title entry-title">', '</h1>' );

// Retrieve and display reviews count from ACF field
$reviews_count = get_field('reviews_count'); // Assuming 'reviews_count' is the ACF field name

if ($reviews_count) {
    echo '<p class="reviews-count"><span class="mr-2"><svg width="102" height="18" viewBox="0 0 102 18" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path d="M8.30215 0.898071L10.8664 6.20564L16.599 7.05507L12.4506 11.1832L13.4307 17.0156L8.30215 14.2617L3.17357 17.0156L4.15372 11.1832L0 7.05507L5.73786 6.20564L8.30215 0.898071Z" fill="#C79144"/>
	<path d="M29.266 0.897949L31.8303 6.20552L37.5629 7.05495L33.4144 11.1831L34.3946 17.0154L29.266 14.2616L24.1374 17.0154L25.1176 11.1831L20.9639 7.05495L26.7017 6.20552L29.266 0.897949Z" fill="#C79144"/>
	<path d="M50.2329 0.897949L52.7972 6.20552L58.5297 7.05495L54.3813 11.1831L55.3615 17.0154L50.2329 14.2616L45.1043 17.0154L46.0845 11.1831L41.936 7.05495L47.6686 6.20552L50.2329 0.897949Z" fill="#C79144"/>
	<path d="M71.8091 0.897949L74.3733 6.20552L80.1059 7.05495L75.9575 11.1831L76.9376 17.0154L71.8091 14.2616L66.6805 17.0154L67.6606 11.1831L63.5122 7.05495L69.2448 6.20552L71.8091 0.897949Z" fill="#C79144"/>
	<path d="M92.7749 0.897949L95.3392 6.20552L101.072 7.05495L96.9233 11.1831L97.9034 17.0154L92.7749 14.2616L87.6463 17.0154L88.6265 11.1831L84.478 7.05495L90.2106 6.20552L92.7749 0.897949Z" fill="#C79144"/>
	</svg>
	</span>' . sprintf(_n('%s review', '%s reviews', $reviews_count, 'your-text-domain'), $reviews_count) . '</p>';
}


// Retrieve and display short description from ACF field
$short_description = get_field('short_description'); // Assuming 'short_description' is the ACF field name

if ($short_description) {
    echo '<div class="product_short-description">' . esc_html($short_description) . '</div>';
}
