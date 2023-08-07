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
			<div class="col-12 col-lg-6 mb-5">
				<div class="product-page-sections_main-title mb-4">Product Details</div>
				<div>
								<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
				<li class="nav-item" role="presentation">
					<button class="nav-link active" id="pills-Desc-tab" data-bs-toggle="pill" data-bs-target="#pills-Desc" type="button" role="tab" >DESCRIPTION</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="pills-details-tab" data-bs-toggle="pill" data-bs-target="#pills-details" type="button" role="tab" >DETAILS</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="pills-warranty-tab" data-bs-toggle="pill" data-bs-target="#pills-warranty" type="button" role="tab" >WARRANTY & SHIPPING</button>
				</li>
				
				</ul>
				<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="pills-Desc" role="tabpanel" tabindex="0">
				DESCRIPTION
				</div>
				<div class="tab-pane fade" id="pills-details" role="tabpanel"  tabindex="0">
					<div class="row">
						<div class="col-4 mb-4">
							<div class="title">Product Code</div>
							<div class="text">RNG001211203</div>
						</div>
						<div class="col-4 mb-4">
							<div class="title">Article Code</div>
							<div class="text">RNG</div>
						</div>
						<div class="col-4 mb-4">
							<div class="title">Height</div>
							<div class="text">NA</div>
						</div>
						<div class="col-4 mb-4">
							<div class="title">Width</div>
							<div class="text">NA</div>
						</div>
						<div class="col-4 mb-4">
							<div class="title">Product Weight</div>
							<div class="text">NA</div>
						</div>
						<div class="col-4 mb-4">
							<div class="title">Net Weight</div>
							<div class="text">NA</div>
						</div>
						<div class="col-4 mb-4">
							<div class="title">Type</div>
							<div class="text">NA</div>
						</div>
						<div class="col-4 mb-4">
							<div class="title">Product Weight</div>
							<div class="text">NA</div>
						</div>
						
					</div>
				</div>
				<div class="tab-pane fade" id="pills-warranty" role="tabpanel" tabindex="0">WARRANTY & SHIPPING</div>
				</div>
				</div>

				<div class="accordion accordion-flush mt-5 mb-3" id="price-breakup">
						<div class="accordion-item">
							<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-price-breakup" aria-expanded="false" aria-controls="flush-collapseOne">
							PRICE BREAKUP
							</button>
							</h2>
							<div id="flush-price-breakup" class="accordion-collapse collapse" data-bs-parent="#price-breakup">
							<div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
							</div>
						</div>
				</div>

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
			<div class="col-12 col-md-8  mb-4 product-reviews-section__items">
				<div class="product-reviews-section__item">
					<div class="d-flex flex-column flex-lg-row gap-3 justify-content-between">
						<div class="d-flex gap-3">
						<div class="product-reviews-section__item-image_wrapper">
							<img class="img-fluid" src="/wp-content/uploads/2023/08/user1.png" alt="name">
						</div>
						<div>
							<div class="product-reviews-section__item-title mb-2">Nezrin</div>
							<div class="product-reviews-section__item-badge mb-2"><span><svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M10 0.036715C7.39655 3.69663 5.31897 7.66863 3.75862 12C2.96552 9.62626 1.81034 7.54569 0 5.9096C0.0517241 5.88123 0.0948277 5.8434 0.146552 5.82449C0.612069 5.62589 1.08621 5.61643 1.55172 5.82449C1.94828 6.00417 2.27586 6.27843 2.57759 6.59997C2.78448 6.81749 2.98276 7.04446 3.18103 7.28089C3.36207 7.52677 3.5431 7.77266 3.73276 8.028C3.74138 8.00909 3.75862 7.99017 3.77586 7.97126C3.96552 7.5646 4.15517 7.14849 4.35345 6.74183C4.49138 6.44866 4.64655 6.16494 4.7931 5.88123C5.01724 5.45566 5.25 5.03009 5.48276 4.60451C5.89655 3.86686 6.34483 3.14811 6.83621 2.4672C7.24138 1.90923 7.67241 1.37963 8.14655 0.897315C8.50862 0.537943 8.89655 0.225858 9.36207 0.0556292C9.57759 -0.0200279 9.78448 -0.0105707 10 0.036715Z" fill="white"/>
							</svg>
							</span>Verified Buyer
							</div>
							<div class="product-reviews-section__item-text">14/09/2021</div>
						</div>
						</div>
						<div class="pe-4">
							<div class="d-flex justify-content-end mb-3"><svg width="134" height="22" viewBox="0 0 134 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M11.0069 0.000244141L14.4066 7.03698L22.0068 8.16314L16.5069 13.6362L17.8063 21.3687L11.0069 17.7176L4.20749 21.3687L5.50697 13.6362L0 8.16314L7.6072 7.03698L11.0069 0.000244141Z" fill="#C79144"/>
								<path d="M38.8009 0L42.2006 7.03673L49.8008 8.1629L44.3008 13.6359L45.6003 21.3684L38.8009 17.7174L32.0014 21.3684L33.3009 13.6359L27.7939 8.1629L35.4012 7.03673L38.8009 0Z" fill="#C79144"/>
								<path d="M66.5985 0L69.9982 7.03673L77.5984 8.1629L72.0985 13.6359L73.398 21.3684L66.5985 17.7174L59.7991 21.3684L61.0986 13.6359L55.5986 8.1629L63.1988 7.03673L66.5985 0Z" fill="#C79144"/>
								<path d="M95.204 0L98.6037 7.03673L106.204 8.1629L100.704 13.6359L102.003 21.3684L95.204 17.7174L88.4046 21.3684L89.7041 13.6359L84.2041 8.1629L91.8043 7.03673L95.204 0Z" fill="#C79144"/>
								<path d="M123 0L126.4 7.03673L134 8.1629L128.5 13.6359L129.799 21.3684L123 17.7174L116.2 21.3684L117.5 13.6359L112 8.1629L119.6 7.03673L123 0Z" fill="#C79144"/>
								</svg>

							</div>
							<div class="product-reviews-section__item-text">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</div>
						</div>
					</div>
				</div>
				<div class="product-reviews-section__item">
					<div class="d-flex flex-column flex-lg-row gap-3 justify-content-between">
						<div class="d-flex gap-3">
						<div class="product-reviews-section__item-image_wrapper">
							<img class="img-fluid" src="/wp-content/uploads/2023/08/user1.png" alt="name">
						</div>
						<div>
							<div class="product-reviews-section__item-title mb-2">Nezrin</div>
							<div class="product-reviews-section__item-badge mb-2"><span><svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M10 0.036715C7.39655 3.69663 5.31897 7.66863 3.75862 12C2.96552 9.62626 1.81034 7.54569 0 5.9096C0.0517241 5.88123 0.0948277 5.8434 0.146552 5.82449C0.612069 5.62589 1.08621 5.61643 1.55172 5.82449C1.94828 6.00417 2.27586 6.27843 2.57759 6.59997C2.78448 6.81749 2.98276 7.04446 3.18103 7.28089C3.36207 7.52677 3.5431 7.77266 3.73276 8.028C3.74138 8.00909 3.75862 7.99017 3.77586 7.97126C3.96552 7.5646 4.15517 7.14849 4.35345 6.74183C4.49138 6.44866 4.64655 6.16494 4.7931 5.88123C5.01724 5.45566 5.25 5.03009 5.48276 4.60451C5.89655 3.86686 6.34483 3.14811 6.83621 2.4672C7.24138 1.90923 7.67241 1.37963 8.14655 0.897315C8.50862 0.537943 8.89655 0.225858 9.36207 0.0556292C9.57759 -0.0200279 9.78448 -0.0105707 10 0.036715Z" fill="white"/>
							</svg>
							</span>Verified Buyer
							</div>
							<div class="product-reviews-section__item-text">14/09/2021</div>
						</div>
						</div>
						<div class="pe-4">
							<div class="d-flex justify-content-end mb-3"><svg width="134" height="22" viewBox="0 0 134 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M11.0069 0.000244141L14.4066 7.03698L22.0068 8.16314L16.5069 13.6362L17.8063 21.3687L11.0069 17.7176L4.20749 21.3687L5.50697 13.6362L0 8.16314L7.6072 7.03698L11.0069 0.000244141Z" fill="#C79144"/>
								<path d="M38.8009 0L42.2006 7.03673L49.8008 8.1629L44.3008 13.6359L45.6003 21.3684L38.8009 17.7174L32.0014 21.3684L33.3009 13.6359L27.7939 8.1629L35.4012 7.03673L38.8009 0Z" fill="#C79144"/>
								<path d="M66.5985 0L69.9982 7.03673L77.5984 8.1629L72.0985 13.6359L73.398 21.3684L66.5985 17.7174L59.7991 21.3684L61.0986 13.6359L55.5986 8.1629L63.1988 7.03673L66.5985 0Z" fill="#C79144"/>
								<path d="M95.204 0L98.6037 7.03673L106.204 8.1629L100.704 13.6359L102.003 21.3684L95.204 17.7174L88.4046 21.3684L89.7041 13.6359L84.2041 8.1629L91.8043 7.03673L95.204 0Z" fill="#C79144"/>
								<path d="M123 0L126.4 7.03673L134 8.1629L128.5 13.6359L129.799 21.3684L123 17.7174L116.2 21.3684L117.5 13.6359L112 8.1629L119.6 7.03673L123 0Z" fill="#C79144"/>
								</svg>

							</div>
							<div class="product-reviews-section__item-text">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</div>
						</div>
					</div>
				</div>
				<div class="product-reviews-section__item">
					<div class="d-flex flex-column flex-lg-row gap-3 justify-content-between">
						<div class="d-flex gap-3">
						<div class="product-reviews-section__item-image_wrapper">
							<img class="img-fluid" src="/wp-content/uploads/2023/08/user1.png" alt="name">
						</div>
						<div>
							<div class="product-reviews-section__item-title mb-2">Nezrin</div>
							<div class="product-reviews-section__item-badge mb-2"><span><svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M10 0.036715C7.39655 3.69663 5.31897 7.66863 3.75862 12C2.96552 9.62626 1.81034 7.54569 0 5.9096C0.0517241 5.88123 0.0948277 5.8434 0.146552 5.82449C0.612069 5.62589 1.08621 5.61643 1.55172 5.82449C1.94828 6.00417 2.27586 6.27843 2.57759 6.59997C2.78448 6.81749 2.98276 7.04446 3.18103 7.28089C3.36207 7.52677 3.5431 7.77266 3.73276 8.028C3.74138 8.00909 3.75862 7.99017 3.77586 7.97126C3.96552 7.5646 4.15517 7.14849 4.35345 6.74183C4.49138 6.44866 4.64655 6.16494 4.7931 5.88123C5.01724 5.45566 5.25 5.03009 5.48276 4.60451C5.89655 3.86686 6.34483 3.14811 6.83621 2.4672C7.24138 1.90923 7.67241 1.37963 8.14655 0.897315C8.50862 0.537943 8.89655 0.225858 9.36207 0.0556292C9.57759 -0.0200279 9.78448 -0.0105707 10 0.036715Z" fill="white"/>
							</svg>
							</span>Verified Buyer
							</div>
							<div class="product-reviews-section__item-text">14/09/2021</div>
						</div>
						</div>
						<div class="pe-4">
							<div class="d-flex justify-content-end mb-3"><svg width="134" height="22" viewBox="0 0 134 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M11.0069 0.000244141L14.4066 7.03698L22.0068 8.16314L16.5069 13.6362L17.8063 21.3687L11.0069 17.7176L4.20749 21.3687L5.50697 13.6362L0 8.16314L7.6072 7.03698L11.0069 0.000244141Z" fill="#C79144"/>
								<path d="M38.8009 0L42.2006 7.03673L49.8008 8.1629L44.3008 13.6359L45.6003 21.3684L38.8009 17.7174L32.0014 21.3684L33.3009 13.6359L27.7939 8.1629L35.4012 7.03673L38.8009 0Z" fill="#C79144"/>
								<path d="M66.5985 0L69.9982 7.03673L77.5984 8.1629L72.0985 13.6359L73.398 21.3684L66.5985 17.7174L59.7991 21.3684L61.0986 13.6359L55.5986 8.1629L63.1988 7.03673L66.5985 0Z" fill="#C79144"/>
								<path d="M95.204 0L98.6037 7.03673L106.204 8.1629L100.704 13.6359L102.003 21.3684L95.204 17.7174L88.4046 21.3684L89.7041 13.6359L84.2041 8.1629L91.8043 7.03673L95.204 0Z" fill="#C79144"/>
								<path d="M123 0L126.4 7.03673L134 8.1629L128.5 13.6359L129.799 21.3684L123 17.7174L116.2 21.3684L117.5 13.6359L112 8.1629L119.6 7.03673L123 0Z" fill="#C79144"/>
								</svg>

							</div>
							<div class="product-reviews-section__item-text">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</div>
						</div>
					</div>
				</div>
				<div class="product-reviews-section__item">
					<div class="d-flex flex-column flex-lg-row gap-3 justify-content-between">
						<div class="d-flex gap-3">
						<div class="product-reviews-section__item-image_wrapper">
							<img class="img-fluid" src="/wp-content/uploads/2023/08/user1.png" alt="name">
						</div>
						<div>
							<div class="product-reviews-section__item-title mb-2">Nezrin</div>
							<div class="product-reviews-section__item-badge mb-2"><span><svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M10 0.036715C7.39655 3.69663 5.31897 7.66863 3.75862 12C2.96552 9.62626 1.81034 7.54569 0 5.9096C0.0517241 5.88123 0.0948277 5.8434 0.146552 5.82449C0.612069 5.62589 1.08621 5.61643 1.55172 5.82449C1.94828 6.00417 2.27586 6.27843 2.57759 6.59997C2.78448 6.81749 2.98276 7.04446 3.18103 7.28089C3.36207 7.52677 3.5431 7.77266 3.73276 8.028C3.74138 8.00909 3.75862 7.99017 3.77586 7.97126C3.96552 7.5646 4.15517 7.14849 4.35345 6.74183C4.49138 6.44866 4.64655 6.16494 4.7931 5.88123C5.01724 5.45566 5.25 5.03009 5.48276 4.60451C5.89655 3.86686 6.34483 3.14811 6.83621 2.4672C7.24138 1.90923 7.67241 1.37963 8.14655 0.897315C8.50862 0.537943 8.89655 0.225858 9.36207 0.0556292C9.57759 -0.0200279 9.78448 -0.0105707 10 0.036715Z" fill="white"/>
							</svg>
							</span>Verified Buyer
							</div>
							<div class="product-reviews-section__item-text">14/09/2021</div>
						</div>
						</div>
						<div class="pe-4">
							<div class="d-flex justify-content-end mb-3"><svg width="134" height="22" viewBox="0 0 134 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M11.0069 0.000244141L14.4066 7.03698L22.0068 8.16314L16.5069 13.6362L17.8063 21.3687L11.0069 17.7176L4.20749 21.3687L5.50697 13.6362L0 8.16314L7.6072 7.03698L11.0069 0.000244141Z" fill="#C79144"/>
								<path d="M38.8009 0L42.2006 7.03673L49.8008 8.1629L44.3008 13.6359L45.6003 21.3684L38.8009 17.7174L32.0014 21.3684L33.3009 13.6359L27.7939 8.1629L35.4012 7.03673L38.8009 0Z" fill="#C79144"/>
								<path d="M66.5985 0L69.9982 7.03673L77.5984 8.1629L72.0985 13.6359L73.398 21.3684L66.5985 17.7174L59.7991 21.3684L61.0986 13.6359L55.5986 8.1629L63.1988 7.03673L66.5985 0Z" fill="#C79144"/>
								<path d="M95.204 0L98.6037 7.03673L106.204 8.1629L100.704 13.6359L102.003 21.3684L95.204 17.7174L88.4046 21.3684L89.7041 13.6359L84.2041 8.1629L91.8043 7.03673L95.204 0Z" fill="#C79144"/>
								<path d="M123 0L126.4 7.03673L134 8.1629L128.5 13.6359L129.799 21.3684L123 17.7174L116.2 21.3684L117.5 13.6359L112 8.1629L119.6 7.03673L123 0Z" fill="#C79144"/>
								</svg>

							</div>
							<div class="product-reviews-section__item-text">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</div>
						</div>
					</div>
				</div>

				
			</div>
			
			<div class="col-12 col-md-4  mb-4">
				<div class="product-reviews-section__box2">
					<div class="text-center">
						<div class="product-reviews-section__box2_review-count mb-2 m-auto">4.8</div>
							<div class="mb-2"><svg width="134" height="22" viewBox="0 0 134 22" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M11.0069 0.000244141L14.4066 7.03698L22.0068 8.16314L16.5069 13.6362L17.8063 21.3687L11.0069 17.7176L4.20749 21.3687L5.50697 13.6362L0 8.16314L7.6072 7.03698L11.0069 0.000244141Z" fill="#C79144"/>
							<path d="M38.8009 0L42.2006 7.03673L49.8008 8.1629L44.3008 13.6359L45.6003 21.3684L38.8009 17.7174L32.0014 21.3684L33.3009 13.6359L27.7939 8.1629L35.4012 7.03673L38.8009 0Z" fill="#C79144"/>
							<path d="M66.5985 0L69.9982 7.03673L77.5984 8.1629L72.0985 13.6359L73.398 21.3684L66.5985 17.7174L59.7991 21.3684L61.0986 13.6359L55.5986 8.1629L63.1988 7.03673L66.5985 0Z" fill="#C79144"/>
							<path d="M95.204 0L98.6037 7.03673L106.204 8.1629L100.704 13.6359L102.003 21.3684L95.204 17.7174L88.4046 21.3684L89.7041 13.6359L84.2041 8.1629L91.8043 7.03673L95.204 0Z" fill="#C79144"/>
							<path d="M123 0L126.4 7.03673L134 8.1629L128.5 13.6359L129.799 21.3684L123 17.7174L116.2 21.3684L117.5 13.6359L112 8.1629L119.6 7.03673L123 0Z" fill="#C79144"/>
							</svg>

							</div>
							<div class="mb-4">5 reviews</div>
						</div>
					</div>
					<div>
						<button class="write-review-btn">Write a Review</button>
						<div class="review-form-wrapper" style="display: none;">
							<?php
								comment_form( array(
									'title_reply' => '',
									'comment_field' => '<textarea id="comment" name="comment" class="form-control" aria-required="true"></textarea>',
									'label_submit' => 'Submit Review',
								) );
							?>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>



<div class="product-page-faq-section my-5">
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var writeReviewBtn = document.querySelector('.write-review-btn');
        var reviewFormWrapper = document.querySelector('.review-form-wrapper');

        writeReviewBtn.addEventListener('click', function() {
            if (reviewFormWrapper.style.display === 'none') {
                reviewFormWrapper.style.display = 'block';
            } else {
                reviewFormWrapper.style.display = 'none';
            }
        });
    });
</script>
<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
