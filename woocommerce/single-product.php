<?php
/* Template Name: Product Page Template */

/**
 * 
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>


	

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		
		do_action( 'woocommerce_after_main_content' );
	?>




		


<div class="container">
	<div class="row">
			<div class="col-12 col-lg-6">
				<div>Product Details</div>
			</div>
			<div class="col-12 col-lg-6">
				<div>image</div>
			</div>
	</div>
</div>


<div class="product-page_image-banner container-fluid my-5">
	<div class="row">
			<div class="col-12 p-0">
				<div class="position-relative" >
				<picture>
                    <source media="(max-width:768px)" srcset="/wp-content/uploads/2023/08/product-mobile-img.webp">
						<img class="img-fluid w-100 h-auto" src="/wp-content/uploads/2023/08/product-large-img.webp" alt="">
                 </picture>
				 <div class="position-absolute product-page_image-banner-content">
					<div class="container-lg">
						<div class="mb-3 product-page_image-banner-content--title">Engagement Ring</div>
						<div class="mb-3 product-page_image-banner-content--text">Crafted with exquisite detail, our lab grown diamond engagement rings are a unique expression of your commitment and a timeless reminder of your love story.</div>
						<div><a href="" class="py-3 px-4 btn product-page_image-banner-content--btn">SHOP all engagement rings <span><svg width="30" height="14" viewBox="0 0 30 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M29.7341 6.3266L24.0353 0.271812C23.9526 0.185673 23.8539 0.11755 23.7451 0.0708481C23.6362 0.0241462 23.5194 0 23.4014 0C23.2834 0 23.1666 0.0241462 23.0578 0.0708481C22.9489 0.11755 22.8503 0.185673 22.7675 0.271812C22.6031 0.454241 22.5117 0.693291 22.5117 0.941463C22.5117 1.18963 22.6031 1.42868 22.7675 1.61111L26.9528 6.04798H0.92713C0.681259 6.04798 0.445455 6.148 0.271599 6.32592C0.0977418 6.50384 0 6.74532 0 6.99693C0 7.24855 0.0977418 7.48935 0.271599 7.66727C0.445455 7.84518 0.681259 7.94521 0.92713 7.94521H26.9528L22.7675 12.3821C22.6031 12.5645 22.5117 12.8036 22.5117 13.0517C22.5117 13.2999 22.6031 13.5389 22.7675 13.7214C22.8492 13.8094 22.9474 13.8792 23.0564 13.9271C23.1654 13.975 23.2828 14 23.4014 14C23.52 14 23.6374 13.975 23.7464 13.9271C23.8554 13.8792 23.9537 13.8094 24.0353 13.7214L29.7341 7.66659C29.9046 7.48736 30 7.2471 30 6.99693C30 6.74677 29.9046 6.50583 29.7341 6.3266Z" fill="#2D2D2D"/>
						</svg>
						</span></a></div>
					</div>
				 </div>
				</div>
			</div>
	</div>
</div>





	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>

<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
