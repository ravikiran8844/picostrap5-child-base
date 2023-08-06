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




		


<div class="container product-details-section mt-5">
	<div class="row">
			<div class="col-12 col-lg-6 mb-4">
				<div class="product-page-sections_main-title">Product Details</div>
			</div>
			<div class="col-12 col-lg-6">
				<div class="mb-4">
					<img src="/wp-content/uploads/2023/08/product-details-banner-img.webp" alt="">
				</div>
				<div class="product-details-section__text">
				We have the purist diamond standards here, only using SI quality or higher, and never anything below H color. Aka, our diamonds are near colorless with no visible inclusions, and the absolute best you can find within a fair budget. As your diamond size increases, our standards increase, to ensure we always keep a flawless look. We're perfectionists and proud of it.
				</div>
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
						<div class="mb-3 product-page_image-banner_main-title">Engagement Ring</div>
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



<div class="product-reviews-section">
	<div class="container">
		<div class="row">
			<div class="col-12 mb-4">
				<div class="product-page-sections_main-title">Reviews</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-8  mb-4">
				<div>r1</div>
			</div>
			<div class="col-12 col-lg-4  mb-4">
				<div>
					<div>4.8</div>
					<div><svg width="214" height="35" viewBox="0 0 214 35" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M17.5321 0.000183105L22.9472 11.2084L35.0529 13.0022L26.2925 21.7198L28.3623 34.0363L17.5321 28.2208L6.70179 34.0363L8.77162 21.7198L0 13.0022L12.1169 11.2084L17.5321 0.000183105Z" fill="#C79144"/>
					<path d="M61.8026 0L67.2177 11.2083L79.3235 13.002L70.563 21.7196L72.6328 34.0361L61.8026 28.2206L50.9723 34.0361L53.0421 21.7196L44.2705 13.002L56.3874 11.2083L61.8026 0Z" fill="#C79144"/>
					<path d="M106.079 0L111.495 11.2083L123.6 13.002L114.84 21.7196L116.91 34.0361L106.079 28.2206L95.2492 34.0361L97.319 21.7196L88.5586 13.002L100.664 11.2083L106.079 0Z" fill="#C79144"/>
					<path d="M151.643 0L157.058 11.2083L169.164 13.002L160.403 21.7196L162.473 34.0361L151.643 28.2206L140.813 34.0361L142.883 21.7196L134.122 13.002L146.228 11.2083L151.643 0Z" fill="#C79144"/>
					<path d="M195.917 0L201.332 11.2083L213.438 13.002L204.677 21.7196L206.747 34.0361L195.917 28.2206L185.087 34.0361L187.156 21.7196L178.396 13.002L190.502 11.2083L195.917 0Z" fill="#C79144"/>
					</svg>
					</div>
					<div>5 reviews</div>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="product-page-faq-section mt-5">
	<div class="container">
			<div class="row">
				<div class="col-12 col-md-5 mb-4">
				<img class="img-fluid product-page-faq-section_img" src="/wp-content/uploads/2023/08/product-page-banner.webp" alt="">
				</div>
				<div class="col-12 col-md-7 mb-4">
					<div class="product-page-sections_main-title mb-4">FAQs</div>
					<div class="accordion accordion-flush" id="accordionFlushExample">
						<div class="accordion-item">
							<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
								Accordion Item #1
							</button>
							</h2>
							<div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
							<div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
								Accordion Item #2
							</button>
							</h2>
							<div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
							<div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
								Accordion Item #3
							</button>
							</h2>
							<div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
							<div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
								Accordion Item #4
							</button>
							</h2>
							<div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
							<div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
								Accordion Item #5
							</button>
							</h2>
							<div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
							<div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
								Accordion Item #6
							</button>
							</h2>
							<div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
							<div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
							</div>
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
