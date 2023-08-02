<?php
/* Template Name: Home Page */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>



<div class="main-slider-section">
    <div class="container-fluid">
        <div class="row" data-flickity='{ "cellAlign": "left", "contain": true}'>

            <?php if (have_rows('slider_section')) : ?>
                <?php while (have_rows('slider_section')) : the_row();
                    $slide_desktop_image = get_sub_field('slide_image');
                    $slide_mobile_image = get_sub_field('slide_mobile_image');
                    $slide_slide_icon = get_sub_field('slide_icon');
                    $slide_slide_caption = get_sub_field('slide_caption');
                    $slide_slide_title = get_sub_field('slide_title');
                    $slide_slide_text = get_sub_field('slide_text');
                    $slide_slide_link = get_sub_field('slide_link');
                    $slide_slide_link_text = get_sub_field('slide_link_text');
                ?>
                    <div class="col-12">
                        <div class="main-slider-section_item">
                            <picture>
                                <source media="(max-width:768px)" srcset="<?php echo esc_url($slide_mobile_image['url']); ?>">
                                <img class="img-fluid" src="<?php echo esc_url($slide_desktop_image['url']); ?>" alt="">
                            </picture>
                            <div class="main-slider-section_item-content">
                                <div class="main-slider-section_item-content_wrapper">
                                    <?php if ($slide_slide_icon) : ?>
                                        <div>
                                            <img class="img-fluid" width="85" height="63" src="<?php echo esc_url($slide_slide_icon['url']); ?>" alt="">
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($slide_slide_caption) : ?>
                                        <div class="fs-5 text-white mb-1"><?php echo $slide_slide_caption ?></div>
                                    <?php endif; ?>
                                    <?php if ($slide_slide_title) : ?>
                                        <div class="display-1 text-white mb-1"><?php echo $slide_slide_title ?></div>
                                    <?php endif; ?>
                                    <?php if ($slide_slide_text) : ?>
                                        <div class="fs-5 text-white mb-2 w-75"><?php echo $slide_slide_text ?></div>
                                    <?php endif; ?>
                                    <?php if ($slide_slide_link && $slide_slide_link_text) : ?>
                                        <a class="btn btn-outline-light px-4 py-2" href="<?php echo $slide_slide_link ?>"><?php echo $slide_slide_link_text ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>




<section class="bg-white">
    <div class="container p-5">
        <div class="swiper-logos">
            <div class="row" data-flickity='{ "cellAlign": "left", "contain": true, "pageDots": false,"prevNextButtons":false,"freeScroll": true}'>
               

            <?php if (have_rows('logo_with_text_section')) : ?>
                <?php while (have_rows('logo_with_text_section')) : the_row();
                    $logo_image = get_sub_field('logo_image');
                    $logo_text = get_sub_field('logo_text');
                ?>
            
            <div class="swiper-slide">
                    <div class="d-flex align-items-center">
                        <div>
                        <img class="img-fluid" width="40" height="40" src="<?php echo esc_url($logo_image['url']); ?>" alt="">
                        </div>
                        <div>
                            <div class="ps-2 text-start logos-text"><?php echo $logo_text ?></div>
                        </div>
                    </div>
            </div>
                
            <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
    </div>
</section>


<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 d-flex overflow-auto">
           <div class="col collection-slider-items">
           <div class="collection-slider-item_wrapper">
                <img class="img-fluid" width="412" height="530" src="/wp-content/uploads/2023/08/collection-bannner1.webp" alt="">
                <div class="collection-slider-item_content">
                    <div class="collection-slider-item_content--title mb-2">Discover New Arrivals</div>
                    <div class="collection-slider-item_content--text mb-2">Stay ahead of the fashion curve with our latest designs.</div>
                    <a href="#" class="collection-slider-item_content--link">EXPLORE NOW</a>
                </div>
            </div>
           </div>
           <div class="col collection-slider-items">
           <div class="collection-slider-item_wrapper">
                <img class="img-fluid" width="412" height="530" src="/wp-content/uploads/2023/08/collection-bannner2.webp" alt="">
                <div class="collection-slider-item_content">
                    <div class="collection-slider-item_content--title mb-2">Experience Timeless Brilliance</div>
                    <div class="collection-slider-item_content--text mb-2">Explore our collection on earrings, designed
            to enhance your beauty.</div>
                    <a  href="#" class="collection-slider-item_content--link">EXPLORE BEST SELLERS</a>
                </div>
            </div>
           </div>
           <div class="col collection-slider-items">
           <div class="collection-slider-item_wrapper">
                <img class="img-fluid" width="412" height="530" src="/wp-content/uploads/2023/08/collection-bannner3.webp" alt="">
                <div class="collection-slider-item_content">
                    <div class="collection-slider-item_content--title mb-2">Your Favourites Return</div>
                    <div class="collection-slider-item_content--text mb-2">Don’t miss out on the opportunity to own
        these sought. After treasure once again</div>
                    <a  href="#" class="collection-slider-item_content--link">EXPLORE BEST SELLERS</a>
                </div>
            </div>
           </div>
        </div>
    </div>
</div>


<div class="container-lg p-0 text-center mb-5">
        <div class="lc-block card border-0 text-center p-4" style="background:url(/wp-content/uploads/2023/07/rich-text-section-bg.webp)  left / cover no-repeat;">
            <div class="row card-body mb-3 mb-lg-4">
                <div class="col-xl-11 col-xxl-9 mx-auto text-white">
                    <div class="lc-block">
                    <?php
                    $textBlock = get_field('text_block_section'); 
                        ?>
                        <div class="main-heading text-white mb-3"><?php echo $textBlock['text_block_title']; ?></div>
                        <div class="caption-text text-white"><?php echo $textBlock['text_block_content']; ?> <span><a class="view-more-link" href="<?php echo $textBlock['text_block_link']; ?>">View more.</a></span></div>
                    </div>
                </div>
            </div>
        </div>
</div>




<div class="container-fluid mb-5">
    <div class="row">
                    <?php
                    $textBlock = get_field('video_section'); 
                        ?>
        <div class="col-12">
            <video controls class="homepage-video" width="320" height="240" poster="<?php echo $textBlock['video_poster']; ?>">
            <source src="<?php echo $textBlock['video_url']; ?>" type="video/mp4">
            Your browser does not support the video tag.
            </video>
        </div>
    </div>
</div>


<div class="container overflow-hidden mb-5">
        <div class="row g-0">
            <div class="col-lg-6 order-1 order-lg-0" style="min-height: 45vh; background-size: cover;background-position: center; background-image: url('/wp-content/uploads/2023/08/home-bannner1.webp');">
            </div>
            <div class="col-lg-6 my-auto px-5 py-5 order-0 order-lg-1">
                <div class="lc-block">
                    <div class="text-center text-lg-start">
                    <div class="main-heading mb-3 body-text-dark">Buy Now Pay Later</div>
                    <div class="caption-text mb-4 body-text-light">PayLater by Grab | Atome</div>
                    <p class="main-text mb-4 body-text-light">Get what you want now, pay later. 3 split payments with 0% interest,
                no credit card required.</p>
                    <a class="links-custom-btn" href="#">LEARN NOW <span class="ms-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="10" viewBox="0 0 20 10" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.8227 4.51949L16.0235 0.194639C15.9684 0.133112 15.9026 0.0844526 15.8301 0.0510941C15.7575 0.0177356 15.6796 0.000488281 15.6009 0.000488281C15.5223 0.000488281 15.4444 0.0177356 15.3718 0.0510941C15.2993 0.0844526 15.2335 0.133112 15.1783 0.194639C15.0687 0.324946 15.0078 0.495696 15.0078 0.672962C15.0078 0.850227 15.0687 1.02098 15.1783 1.15128L17.9686 4.32047H0.618087C0.454173 4.32047 0.29697 4.39192 0.181066 4.519C0.0651612 4.64609 0 4.81857 0 4.9983C0 5.17802 0.0651612 5.35002 0.181066 5.47711C0.29697 5.60419 0.454173 5.67564 0.618087 5.67564H17.9686L15.1783 8.84483C15.0687 8.97513 15.0078 9.14588 15.0078 9.32315C15.0078 9.50041 15.0687 9.67116 15.1783 9.80147C15.2328 9.86437 15.2983 9.91419 15.371 9.94842C15.4436 9.98265 15.5219 10.0005 15.6009 10.0005C15.68 10.0005 15.7583 9.98265 15.8309 9.94842C15.9036 9.91419 15.9691 9.86437 16.0235 9.80147L19.8227 5.47662C19.9364 5.3486 20 5.17699 20 4.9983C20 4.81961 19.9364 4.64751 19.8227 4.51949Z" fill="#C0832B"/>
                    </svg>
                                    </span></a>
                    </div>
                </div>

            </div>
        </div>
        <div class="row g-0">
            <div class="d-none d-lg-block col-lg-6 order-lg-2 " style="min-height: 45vh; background-size: cover; background-position: center; background-image: url('/wp-content/uploads/2023/08/home-bannner2.webp');">

            </div>
            <div class="col-lg-6 order-lg-1 my-auto px-5 py-5">
                <div class="lc-block">
                    <div class="text-center text-lg-start">
                    <div class="main-heading mb-3 body-text-dark">Perfect Gift Ideas</div>
                    <p class="main-text mb-4 body-text-light">Comes with JewelOne jewellery box, silver polishing cloth and paper bag</p>
                    <a class="links-custom-btn" href="#">SHOP GIFTS <span class="ms-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="10" viewBox="0 0 20 10" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.8227 4.51949L16.0235 0.194639C15.9684 0.133112 15.9026 0.0844526 15.8301 0.0510941C15.7575 0.0177356 15.6796 0.000488281 15.6009 0.000488281C15.5223 0.000488281 15.4444 0.0177356 15.3718 0.0510941C15.2993 0.0844526 15.2335 0.133112 15.1783 0.194639C15.0687 0.324946 15.0078 0.495696 15.0078 0.672962C15.0078 0.850227 15.0687 1.02098 15.1783 1.15128L17.9686 4.32047H0.618087C0.454173 4.32047 0.29697 4.39192 0.181066 4.519C0.0651612 4.64609 0 4.81857 0 4.9983C0 5.17802 0.0651612 5.35002 0.181066 5.47711C0.29697 5.60419 0.454173 5.67564 0.618087 5.67564H17.9686L15.1783 8.84483C15.0687 8.97513 15.0078 9.14588 15.0078 9.32315C15.0078 9.50041 15.0687 9.67116 15.1783 9.80147C15.2328 9.86437 15.2983 9.91419 15.371 9.94842C15.4436 9.98265 15.5219 10.0005 15.6009 10.0005C15.68 10.0005 15.7583 9.98265 15.8309 9.94842C15.9036 9.91419 15.9691 9.86437 16.0235 9.80147L19.8227 5.47662C19.9364 5.3486 20 5.17699 20 4.9983C20 4.81961 19.9364 4.64751 19.8227 4.51949Z" fill="#C0832B"/>
                                    </svg>
                                    </span></a>
                    </div>
                </div>
            </div>
        </div>
</div>




<div class="container d-flex align-items-center mb-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="lc-block">
                    <div class="card border-0 p-3 bg-white text-dark">
                   <div class="text-center my-4">
                   <svg width="58" height="75" viewBox="0 0 58 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M28.62 74.2C27.86 74.2 27.22 73.63 27.13 72.87C24.03 45.48 21.85 42.59 1.21 38.57C0.510001 38.43 0 37.82 0 37.1C0 36.38 0.510001 35.77 1.21 35.63C21.85 31.6 24.03 28.72 27.13 1.33C27.22 0.57 27.86 0 28.62 0C29.38 0 30.02 0.57 30.11 1.33C33.21 28.72 35.39 31.61 56.03 35.63C56.73 35.77 57.24 36.38 57.24 37.1C57.24 37.82 56.73 38.43 56.03 38.57C35.39 42.6 33.21 45.48 30.11 72.87C30.02 73.63 29.38 74.2 28.62 74.2ZM8.54 37.09C21.91 40.44 25.96 45.06 28.62 61.29C31.27 45.06 35.33 40.43 48.7 37.09C35.33 33.74 31.28 29.12 28.62 12.89C25.97 29.12 21.91 33.75 8.54 37.09Z" fill="black"/>
                        </svg>
                   </div>
                        <div class="card-body text-center">
                            <div class="card-main-title mb-3">Affordable Jewellery</div>
                            <div class="card-sub-title">High quality jewellery with affordable price</div>
                        </div>
                    </div>
                </div>
                <!-- /lc-block -->
            </div>
            <div class="col-md-4 mb-4">
                <div class="lc-block">
                    <div class="card border-0 p-3 bg-white text-dark">
                   <div class="text-center my-4">
                   <svg width="58" height="75" viewBox="0 0 58 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M28.62 74.2C27.86 74.2 27.22 73.63 27.13 72.87C24.03 45.48 21.85 42.59 1.21 38.57C0.510001 38.43 0 37.82 0 37.1C0 36.38 0.510001 35.77 1.21 35.63C21.85 31.6 24.03 28.72 27.13 1.33C27.22 0.57 27.86 0 28.62 0C29.38 0 30.02 0.57 30.11 1.33C33.21 28.72 35.39 31.61 56.03 35.63C56.73 35.77 57.24 36.38 57.24 37.1C57.24 37.82 56.73 38.43 56.03 38.57C35.39 42.6 33.21 45.48 30.11 72.87C30.02 73.63 29.38 74.2 28.62 74.2ZM8.54 37.09C21.91 40.44 25.96 45.06 28.62 61.29C31.27 45.06 35.33 40.43 48.7 37.09C35.33 33.74 31.28 29.12 28.62 12.89C25.97 29.12 21.91 33.75 8.54 37.09Z" fill="black"/>
                        </svg>
                   </div>
                        <div class="card-body text-center">
                            <div class="card-main-title mb-3">Affordable Jewellery</div>
                            <div class="card-sub-title">High quality jewellery with affordable price</div>
                        </div>
                    </div>
                </div>
                <!-- /lc-block -->
            </div>
            <div class="col-md-4 mb-4">
                <div class="lc-block">
                    <div class="card border-0 p-3 bg-white text-dark">
                   <div class="text-center my-4">
                   <svg width="58" height="75" viewBox="0 0 58 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M28.62 74.2C27.86 74.2 27.22 73.63 27.13 72.87C24.03 45.48 21.85 42.59 1.21 38.57C0.510001 38.43 0 37.82 0 37.1C0 36.38 0.510001 35.77 1.21 35.63C21.85 31.6 24.03 28.72 27.13 1.33C27.22 0.57 27.86 0 28.62 0C29.38 0 30.02 0.57 30.11 1.33C33.21 28.72 35.39 31.61 56.03 35.63C56.73 35.77 57.24 36.38 57.24 37.1C57.24 37.82 56.73 38.43 56.03 38.57C35.39 42.6 33.21 45.48 30.11 72.87C30.02 73.63 29.38 74.2 28.62 74.2ZM8.54 37.09C21.91 40.44 25.96 45.06 28.62 61.29C31.27 45.06 35.33 40.43 48.7 37.09C35.33 33.74 31.28 29.12 28.62 12.89C25.97 29.12 21.91 33.75 8.54 37.09Z" fill="black"/>
                        </svg>
                   </div>
                        <div class="card-body text-center">
                            <div class="card-main-title mb-3">Affordable Jewellery</div>
                            <div class="card-sub-title">High quality jewellery with affordable price</div>
                        </div>
                    </div>
                </div>
                <!-- /lc-block -->
            </div>
        </div>
</div>


<div class="bg-white py-5 blog-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <div class="main-heading mb-3">JEWELONE Latest Posts</div>
                <a class="btn btn-outline-light blog-section_btn" href="#">View all</a>
            </div>

        </div>
        <div class="row">
            <div class="col-12 col-lg-6 mb-4">
                <div class="position-relative">
                    <img class="img-fluid" width="585" height="339" src="/wp-content/uploads/2023/08/blog-img1.webp" alt="">
                    <div class="position-absolute bottom-0 p-4 text-white">
                        <div class="date mb-3">Jun 03, 2023</div>
                        <div class="blog-title mb-3 w-75">How to Style Minimalist Jewellery for Any Occasion</div>
                        <a class="blog-link" href="#">SHOP GIFTS <span class="ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="10" viewBox="0 0 19 10" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.3033 4.5393L14.8372 0.856724C14.7869 0.804334 14.7269 0.762901 14.6607 0.734497C14.5945 0.706092 14.5235 0.691406 14.4517 0.691406C14.3799 0.691406 14.3089 0.706092 14.2427 0.734497C14.1765 0.762901 14.1165 0.804334 14.0662 0.856724C13.9662 0.967679 13.9106 1.11307 13.9106 1.26401C13.9106 1.41495 13.9662 1.56035 14.0662 1.6713L16.6117 4.36984H0.782639C0.633098 4.36984 0.48968 4.43068 0.383939 4.53889C0.278197 4.6471 0.21875 4.79397 0.21875 4.947C0.21875 5.10004 0.278197 5.2465 0.383939 5.35471C0.48968 5.46292 0.633098 5.52375 0.782639 5.52375H16.6117L14.0662 8.22229C13.9662 8.33325 13.9106 8.47864 13.9106 8.62958C13.9106 8.78052 13.9662 8.92591 14.0662 9.03687C14.1158 9.09043 14.1756 9.13285 14.2419 9.162C14.3082 9.19115 14.3796 9.20633 14.4517 9.20633C14.5238 9.20633 14.5952 9.19115 14.6615 9.162C14.7278 9.13285 14.7876 9.09043 14.8372 9.03687L18.3033 5.35429C18.407 5.24529 18.465 5.09916 18.465 4.947C18.465 4.79485 18.407 4.64831 18.3033 4.5393Z" fill="white"/>
                        </svg></span></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 mb-4">
                <div class="position-relative">
                    <img class="img-fluid" width="585" height="339" src="/wp-content/uploads/2023/08/blog-img2.webp" alt="">
                    <div class="position-absolute bottom-0 p-4 text-white">
                        <div class="date mb-3">Jun 03, 2023</div>
                        <div class="blog-title mb-3 w-75">How to Style Minimalist Jewellery for Any Occasion</div>
                        <a class="blog-link" href="#">SHOP GIFTS <span class="ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="10" viewBox="0 0 19 10" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.3033 4.5393L14.8372 0.856724C14.7869 0.804334 14.7269 0.762901 14.6607 0.734497C14.5945 0.706092 14.5235 0.691406 14.4517 0.691406C14.3799 0.691406 14.3089 0.706092 14.2427 0.734497C14.1765 0.762901 14.1165 0.804334 14.0662 0.856724C13.9662 0.967679 13.9106 1.11307 13.9106 1.26401C13.9106 1.41495 13.9662 1.56035 14.0662 1.6713L16.6117 4.36984H0.782639C0.633098 4.36984 0.48968 4.43068 0.383939 4.53889C0.278197 4.6471 0.21875 4.79397 0.21875 4.947C0.21875 5.10004 0.278197 5.2465 0.383939 5.35471C0.48968 5.46292 0.633098 5.52375 0.782639 5.52375H16.6117L14.0662 8.22229C13.9662 8.33325 13.9106 8.47864 13.9106 8.62958C13.9106 8.78052 13.9662 8.92591 14.0662 9.03687C14.1158 9.09043 14.1756 9.13285 14.2419 9.162C14.3082 9.19115 14.3796 9.20633 14.4517 9.20633C14.5238 9.20633 14.5952 9.19115 14.6615 9.162C14.7278 9.13285 14.7876 9.09043 14.8372 9.03687L18.3033 5.35429C18.407 5.24529 18.465 5.09916 18.465 4.947C18.465 4.79485 18.407 4.64831 18.3033 4.5393Z" fill="white"/>
                        </svg></span></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 mb-4">
                <div class="position-relative">
                    <img class="img-fluid" width="585" height="339" src="/wp-content/uploads/2023/08/blog-img3.webp" alt="">
                    <div class="position-absolute bottom-0 p-4 text-white">
                        <div class="date mb-3">Jun 03, 2023</div>
                        <div class="blog-title mb-3 w-75">How to Style Minimalist Jewellery for Any Occasion</div>
                        <a class="blog-link" href="#">SHOP GIFTS <span class="ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="10" viewBox="0 0 19 10" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.3033 4.5393L14.8372 0.856724C14.7869 0.804334 14.7269 0.762901 14.6607 0.734497C14.5945 0.706092 14.5235 0.691406 14.4517 0.691406C14.3799 0.691406 14.3089 0.706092 14.2427 0.734497C14.1765 0.762901 14.1165 0.804334 14.0662 0.856724C13.9662 0.967679 13.9106 1.11307 13.9106 1.26401C13.9106 1.41495 13.9662 1.56035 14.0662 1.6713L16.6117 4.36984H0.782639C0.633098 4.36984 0.48968 4.43068 0.383939 4.53889C0.278197 4.6471 0.21875 4.79397 0.21875 4.947C0.21875 5.10004 0.278197 5.2465 0.383939 5.35471C0.48968 5.46292 0.633098 5.52375 0.782639 5.52375H16.6117L14.0662 8.22229C13.9662 8.33325 13.9106 8.47864 13.9106 8.62958C13.9106 8.78052 13.9662 8.92591 14.0662 9.03687C14.1158 9.09043 14.1756 9.13285 14.2419 9.162C14.3082 9.19115 14.3796 9.20633 14.4517 9.20633C14.5238 9.20633 14.5952 9.19115 14.6615 9.162C14.7278 9.13285 14.7876 9.09043 14.8372 9.03687L18.3033 5.35429C18.407 5.24529 18.465 5.09916 18.465 4.947C18.465 4.79485 18.407 4.64831 18.3033 4.5393Z" fill="white"/>
                        </svg></span></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 mb-4">
                <div class="position-relative">
                    <img class="img-fluid" width="585" height="339" src="/wp-content/uploads/2023/08/blog-img4.webp" alt="">
                    <div class="position-absolute bottom-0 p-4 text-white">
                        <div class="date mb-3">Jun 03, 2023</div>
                        <div class="blog-title mb-3 w-75">How to Style Minimalist Jewellery for Any Occasion</div>
                        <a class="blog-link" href="#">SHOP GIFTS <span class="ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="10" viewBox="0 0 19 10" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.3033 4.5393L14.8372 0.856724C14.7869 0.804334 14.7269 0.762901 14.6607 0.734497C14.5945 0.706092 14.5235 0.691406 14.4517 0.691406C14.3799 0.691406 14.3089 0.706092 14.2427 0.734497C14.1765 0.762901 14.1165 0.804334 14.0662 0.856724C13.9662 0.967679 13.9106 1.11307 13.9106 1.26401C13.9106 1.41495 13.9662 1.56035 14.0662 1.6713L16.6117 4.36984H0.782639C0.633098 4.36984 0.48968 4.43068 0.383939 4.53889C0.278197 4.6471 0.21875 4.79397 0.21875 4.947C0.21875 5.10004 0.278197 5.2465 0.383939 5.35471C0.48968 5.46292 0.633098 5.52375 0.782639 5.52375H16.6117L14.0662 8.22229C13.9662 8.33325 13.9106 8.47864 13.9106 8.62958C13.9106 8.78052 13.9662 8.92591 14.0662 9.03687C14.1158 9.09043 14.1756 9.13285 14.2419 9.162C14.3082 9.19115 14.3796 9.20633 14.4517 9.20633C14.5238 9.20633 14.5952 9.19115 14.6615 9.162C14.7278 9.13285 14.7876 9.09043 14.8372 9.03687L18.3033 5.35429C18.407 5.24529 18.465 5.09916 18.465 4.947C18.465 4.79485 18.407 4.64831 18.3033 4.5393Z" fill="white"/>
                        </svg></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







<?php get_footer();
