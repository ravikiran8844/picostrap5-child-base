<?php
/* Template Name: Home Page */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/js/splide.min.js" integrity="sha512-4TcjHXQMLM7Y6eqfiasrsnRCc8D/unDeY1UGKGgfwyLUCTsHYMxF7/UHayjItKQKIoP6TTQ6AMamb9w2GMAvNg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/css/splide.min.css" integrity="sha512-KhFXpe+VJEu5HYbJyKQs9VvwGB+jQepqb4ZnlhUF/jQGxYJcjdxOTf6cr445hOc791FFLs18DKVpfrQnONOB1g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<div id="main-slider" class="main-slider-section">
    <div class="container-fluid">
        <div class="row" data-flickity='{ "cellAlign": "left", "contain": true,"wrapAround": true}'>

            <?php if (have_rows('slider_section')) : ?>
                <?php $slide_counter = 0; // Initialize slide counter ?>
                <?php $total_slides = count(get_field('slider_section')); // Get total number of slides ? ?>
                <?php while (have_rows('slider_section')) : the_row();
                    $slide_counter++; // Increment slide counter
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
                                <source media="(max-width:767px)" srcset="<?php echo esc_url($slide_mobile_image['url']); ?>">
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
                            <!-- Display current slide number and total slides number -->
                            <span class="slide-counter">
                            <span class="current-slide"><?php echo sprintf('%02d', $slide_counter); ?></span>
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="2" height="35" viewBox="0 0 2 35" fill="none">
                                <path d="M0.980469 0.789062V34.1361" stroke="white" stroke-width="1.51577"/>
                                </svg></span>
                                <?php
                                        $next_slide_number = ($slide_counter === $total_slides) ? 1 : ($slide_counter + 1);
                                    ?>
                                    <span class="next-slide"><?php echo sprintf('%02d', $next_slide_number); ?></span>
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
            <div class="row" data-flickity='{ "cellAlign": "left", "contain": true, "pageDots": false,"prevNextButtons":false,"freeScroll": true,"groupCells": true}'>
               

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




<div id="slider11" class="shop-by-category container mt-5 splide">
    <div class="row">
        <div class="col-12 mb-4">
            <div class="main-heading text-color-red">Shop by Category</div>
        </div>
    </div>
    <div class="row splide__track">
        <ul class="splide__list">

        <?php

        // Get the parent category term object (e.g., "gold")
        $parent_category_slug = 'gold';
        $parent_category = get_term_by('slug', $parent_category_slug, 'product_cat');

        if ($parent_category) {
            // Get child categories of the parent category
            $child_categories = get_terms('product_cat', array(
                'hide_empty' => false,
                'parent' => $parent_category->term_id,
            ));

            // Loop through child categories
            foreach ($child_categories as $category) {
                $category_id = $category->term_id;
                $category_name = $category->name;
                $category_permalink = get_term_link($category, 'product_cat');

                // Get category image
                $thumbnail_id = get_woocommerce_term_meta($category_id, 'thumbnail_id', true);
                $image = wp_get_attachment_image_src($thumbnail_id, 'thumbnail');

                // Display category with container
                echo '<li class="splide__slide p-3"><div class="text-center category-container mb-4">';
                
                if ($image) {
                    echo '<div class="shop-by-category_img-wrapper"><img class="img-fluid mb-4" src="' . esc_url($image[0]) . '"  width="180" height="180" alt="' . esc_attr($category_name) . '" /></div>';
                }
                
                echo '<div class="category-container_content py-4">';
                echo '<div class="category-container__content-title">' . $category_name . '</div>';
                echo '<div class="mt-1"><a class="links-custom-btn" href="' . esc_url($category_permalink) . '">Explore <span><svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.879 3.59456L12.2054 0.551057C12.1666 0.507759 12.1203 0.473516 12.0693 0.450041C12.0182 0.426566 11.9634 0.414429 11.9081 0.414429C11.8527 0.414429 11.7979 0.426566 11.7468 0.450041C11.6958 0.473516 11.6495 0.507759 11.6107 0.551057C11.5335 0.642757 11.4907 0.762918 11.4907 0.887664C11.4907 1.01241 11.5335 1.13257 11.6107 1.22427L13.5742 3.4545H1.36426C1.24891 3.4545 1.13829 3.50478 1.05672 3.59421C0.975158 3.68365 0.929302 3.80503 0.929302 3.93151C0.929302 4.05798 0.975158 4.17902 1.05672 4.26846C1.13829 4.35789 1.24891 4.40817 1.36426 4.40817H13.5742L11.6107 6.6384C11.5335 6.7301 11.4907 6.85026 11.4907 6.97501C11.4907 7.09975 11.5335 7.21991 11.6107 7.31161C11.649 7.35588 11.6951 7.39094 11.7462 7.41503C11.7973 7.43912 11.8524 7.45167 11.9081 7.45167C11.9637 7.45167 12.0188 7.43912 12.0699 7.41503C12.121 7.39094 12.1671 7.35588 12.2054 7.31161L14.879 4.26811C14.959 4.17802 15.0038 4.05726 15.0038 3.93151C15.0038 3.80576 14.959 3.68465 14.879 3.59456Z" fill="#C0832B"/>
                </svg>
                </span> </a></div>';
                
                echo '</div></div></li>'; // Close category container
            }
        }
        ?>
        </ul>

    </div>
</div>





<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 d-flex overflow-auto">
        <?php if (have_rows('image_text_overlay_section')) : ?>
                <?php while (have_rows('image_text_overlay_section')) : the_row();
                    $image_text_overlay_section_img = get_sub_field('image_text_overlay_section_img');
                    $image_text_overlay_section_title = get_sub_field('image_text_overlay_section_title');
                    $image_text_overlay_section_text = get_sub_field('image_text_overlay_section_text');
                    $image_text_overlay_section_link = get_sub_field('image_text_overlay_section_link');
                    $image_text_overlay_section_link_text = get_sub_field('image_text_overlay_section_link_text');
                ?>
           <div class="col collection-slider-items">
           <div class="collection-slider-item_wrapper">
                <img class="img-fluid" width="412" height="530" src="<?php echo esc_url($image_text_overlay_section_img['url']); ?>" alt="">
                <div class="collection-slider-item_content">
                    <div class="collection-slider-item_content--title mb-2"><?php echo $image_text_overlay_section_title ?></div>
                    <div class="collection-slider-item_content--text mb-2"><?php echo $image_text_overlay_section_text ?></div>
                    <a href="<?php echo $image_text_overlay_section_link ?>" class="collection-slider-item_content--link"><?php echo $image_text_overlay_section_link_text ?></a>
                </div>
            </div>
           </div>
           
           <?php endwhile; ?>
            <?php endif; ?>
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



<div class="products-slider-section">
    <div class="container mb-5">
        <div class="row">
            <div class="mb-4 d-flex flex-column flex-lg-row justify-content-between">
                <div class="main-heading text-color-red mb-4">Gold Jewellery</div>  
                <div class="mb-4">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="trending-tab" data-bs-toggle="tab" data-bs-target="#trending" type="button" role="tab" aria-controls="trending" aria-selected="true">Trending</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="new-in-tab" data-bs-toggle="tab" data-bs-target="#new-in" type="button" role="tab" aria-controls="new-in" aria-selected="false">New In</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="rings-tab" data-bs-toggle="tab" data-bs-target="#rings" type="button" role="tab" aria-controls="rings" aria-selected="false">Rings</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="earnings-tab" data-bs-toggle="tab" data-bs-target="#earnings" type="button" role="tab" aria-controls="earnings" aria-selected="false">Earnings</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="necklace-tab" data-bs-toggle="tab" data-bs-target="#necklace" type="button" role="tab" aria-controls="necklace" aria-selected="false">Necklace</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="braclets-tab" data-bs-toggle="tab" data-bs-target="#braclets" type="button" role="tab" aria-controls="braclets" aria-selected="false">Braclets</button>
                        </li>
                    </ul>
                </div>  
            </div>
        </div>


    <div class="tab-content row" id="myTabContent">
        <div class="tab-pane fade show active splide__slide" id="trending" role="tabpanel" aria-labelledby="trending-tab">
        <section id="slider1" class="splide" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                        
                <ul class="splide__list">
                <?php
                     $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 8,
                        'post_status' => 'publish',
                        'tax_query' =>
                            array(
                                'taxonomy' => 'product_cat',
                                'field' => 'slug',
                                'terms' => 'gold'
                            )
                    );
                    $loop = new WP_Query($args);

                    if ($loop->have_posts()) {
                        while ($loop->have_posts()) : $loop->the_post();
                            ?>

                                <li class="splide__slide product-slider-item text-center px-4 mb-4">
                                    <?php
                                    // Get product image
                                    $product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail');
                                    ?>

                                    <img width="357" height="462" src="<?php echo $product_image[0]; ?>"  alt="<?php the_title(); ?>" />

                                    <div class="mt-3 mb-2 card-main-title"><?php the_title(); ?></div>
                                    <?php
                                    // Get product review count and rating
                                    $review_count = get_comments_number();
                                    // $average_rating = get_post_meta(get_the_ID(), '_wc_average_rating', true);
                                    ?>

                                    <div class="card-sub-title mb-3"> <span class="me-2"><svg width="97" height="17" viewBox="0 0 97 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.9313 0.886719L10.381 5.95721L15.8575 6.76869L11.8944 10.7124L12.8308 16.2843L7.9313 13.6534L3.03181 16.2843L3.96818 10.7124L0 6.76869L5.48155 5.95721L7.9313 0.886719Z" fill="#C79144"/>
                                            <path d="M27.9586 0.886719L30.4084 5.95721L35.8849 6.76869L31.9218 10.7124L32.8581 16.2843L27.9586 13.6534L23.0592 16.2843L23.9955 10.7124L20.0273 6.76869L25.5089 5.95721L27.9586 0.886719Z" fill="#C79144"/>
                                            <path d="M47.9887 0.886719L50.4385 5.95721L55.915 6.76869L51.9519 10.7124L52.8882 16.2843L47.9887 13.6534L43.0892 16.2843L44.0256 10.7124L40.0625 6.76869L45.539 5.95721L47.9887 0.886719Z" fill="#C79144"/>
                                            <path d="M68.602 0.886719L71.0518 5.95721L76.5283 6.76869L72.5651 10.7124L73.5015 16.2843L68.602 13.6534L63.7025 16.2843L64.6389 10.7124L60.6758 6.76869L66.1523 5.95721L68.602 0.886719Z" fill="#C79144"/>
                                            <path d="M88.6294 0.886719L91.0791 5.95721L96.5556 6.76869L92.5925 10.7124L93.5288 16.2843L88.6294 13.6534L83.7299 16.2843L84.6662 10.7124L80.7031 6.76869L86.1796 5.95721L88.6294 0.886719Z" fill="#C79144"/>
                                            </svg>
                                            </span> <span><?php echo $review_count; ?> reviews</span></div>
                                    <!-- <div>Average Rating: <?php echo $average_rating; ?></div> -->

                                    <?php
                                    // Get product price
                                    $product = wc_get_product(get_the_ID());
                                    $product_price = $product->get_price();
                                    ?>

                                    <p class="product-card-price"><?php echo wc_price($product_price); ?></p>

                                    <a class="btn btn-outline-light product-card-buy-btn" href="<?php the_permalink(); ?>" class="button">Shop Now</a>
                                </li>
                        <?php
                            endwhile;
                        } else {
                            echo __('No products found');
                        }
                        wp_reset_postdata();
                        ?>
            </ul>

                </div>

            </section>
        </div>
        <div class="tab-pane fade" id="new-in" role="tabpanel" aria-labelledby="new-in-tab">
        <section id="slider2" class="splide" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                        
                <ul class="splide__list">
                <?php
                      $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 8,
                        'post_status' => 'publish',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'product_cat',
                                'field' => 'slug',
                                'terms' => 'gold'
                            )
                        ),
                        'orderby' => 'date',       // Sort by publish date
                        'order' => 'DESC'          // Display newest products first
                    );
                    $loop = new WP_Query($args);

                    if ($loop->have_posts()) {
                        while ($loop->have_posts()) : $loop->the_post();
                            ?>

                                <li class="splide__slide product-slider-item text-center px-4 mb-4">
                                    <?php
                                    // Get product image
                                    $product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail');
                                    ?>

                                    <img width="357" height="462" src="<?php echo $product_image[0]; ?>"  alt="<?php the_title(); ?>" />

                                    <div class="mt-3 mb-2 card-main-title"><?php the_title(); ?></div>
                                    <?php
                                    // Get product review count and rating
                                    $review_count = get_comments_number();
                                    // $average_rating = get_post_meta(get_the_ID(), '_wc_average_rating', true);
                                    ?>

                                    <div class="card-sub-title mb-3"> <span class="me-2"><svg width="97" height="17" viewBox="0 0 97 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.9313 0.886719L10.381 5.95721L15.8575 6.76869L11.8944 10.7124L12.8308 16.2843L7.9313 13.6534L3.03181 16.2843L3.96818 10.7124L0 6.76869L5.48155 5.95721L7.9313 0.886719Z" fill="#C79144"/>
                                            <path d="M27.9586 0.886719L30.4084 5.95721L35.8849 6.76869L31.9218 10.7124L32.8581 16.2843L27.9586 13.6534L23.0592 16.2843L23.9955 10.7124L20.0273 6.76869L25.5089 5.95721L27.9586 0.886719Z" fill="#C79144"/>
                                            <path d="M47.9887 0.886719L50.4385 5.95721L55.915 6.76869L51.9519 10.7124L52.8882 16.2843L47.9887 13.6534L43.0892 16.2843L44.0256 10.7124L40.0625 6.76869L45.539 5.95721L47.9887 0.886719Z" fill="#C79144"/>
                                            <path d="M68.602 0.886719L71.0518 5.95721L76.5283 6.76869L72.5651 10.7124L73.5015 16.2843L68.602 13.6534L63.7025 16.2843L64.6389 10.7124L60.6758 6.76869L66.1523 5.95721L68.602 0.886719Z" fill="#C79144"/>
                                            <path d="M88.6294 0.886719L91.0791 5.95721L96.5556 6.76869L92.5925 10.7124L93.5288 16.2843L88.6294 13.6534L83.7299 16.2843L84.6662 10.7124L80.7031 6.76869L86.1796 5.95721L88.6294 0.886719Z" fill="#C79144"/>
                                            </svg>
                                            </span> <span><?php echo $review_count; ?> reviews</span></div>
                                    <!-- <div>Average Rating: <?php echo $average_rating; ?></div> -->

                                    <?php
                                    // Get product price
                                    $product = wc_get_product(get_the_ID());
                                    $product_price = $product->get_price();
                                    ?>

                                    <p class="product-card-price"><?php echo wc_price($product_price); ?></p>

                                    <a class="btn btn-outline-light product-card-buy-btn" href="<?php the_permalink(); ?>" class="button">Shop Now</a>
                                </li>
                        <?php
                            endwhile;
                        } else {
                            echo __('No products found');
                        }
                        wp_reset_postdata();
                        ?>
            </ul>

                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="rings" role="tabpanel" aria-labelledby="rings-tab">
        <section id="slider3" class="splide" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                        
                <ul class="splide__list">
                <?php
                     $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 8,
                        'post_status' => 'publish',
                        'tax_query' => array(
                            'relation' => 'AND',  // Fetch products that belong to both parent and sub categories
                            array(
                                'taxonomy' => 'product_cat',
                                'field' => 'slug',
                                'terms' => 'gold',  // Parent category slug
                                'include_children' => false,
                            ),
                            array(
                                'taxonomy' => 'product_cat',
                                'field' => 'slug',
                                'terms' => 'rings',  // Subcategory slug
                            ),
                        ),
                    );
                    $loop = new WP_Query($args);

                    if ($loop->have_posts()) {
                        while ($loop->have_posts()) : $loop->the_post();
                            ?>

                                <li class="splide__slide product-slider-item text-center px-4 mb-4">
                                    <?php
                                    // Get product image
                                    $product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail');
                                    ?>

                                    <img width="357" height="462" src="<?php echo $product_image[0]; ?>"  alt="<?php the_title(); ?>" />

                                    <div class="mt-3 mb-2 card-main-title"><?php the_title(); ?></div>
                                    <?php
                                    // Get product review count and rating
                                    $review_count = get_comments_number();
                                    // $average_rating = get_post_meta(get_the_ID(), '_wc_average_rating', true);
                                    ?>

                                    <div class="card-sub-title mb-3"> <span class="me-2"><svg width="97" height="17" viewBox="0 0 97 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.9313 0.886719L10.381 5.95721L15.8575 6.76869L11.8944 10.7124L12.8308 16.2843L7.9313 13.6534L3.03181 16.2843L3.96818 10.7124L0 6.76869L5.48155 5.95721L7.9313 0.886719Z" fill="#C79144"/>
                                            <path d="M27.9586 0.886719L30.4084 5.95721L35.8849 6.76869L31.9218 10.7124L32.8581 16.2843L27.9586 13.6534L23.0592 16.2843L23.9955 10.7124L20.0273 6.76869L25.5089 5.95721L27.9586 0.886719Z" fill="#C79144"/>
                                            <path d="M47.9887 0.886719L50.4385 5.95721L55.915 6.76869L51.9519 10.7124L52.8882 16.2843L47.9887 13.6534L43.0892 16.2843L44.0256 10.7124L40.0625 6.76869L45.539 5.95721L47.9887 0.886719Z" fill="#C79144"/>
                                            <path d="M68.602 0.886719L71.0518 5.95721L76.5283 6.76869L72.5651 10.7124L73.5015 16.2843L68.602 13.6534L63.7025 16.2843L64.6389 10.7124L60.6758 6.76869L66.1523 5.95721L68.602 0.886719Z" fill="#C79144"/>
                                            <path d="M88.6294 0.886719L91.0791 5.95721L96.5556 6.76869L92.5925 10.7124L93.5288 16.2843L88.6294 13.6534L83.7299 16.2843L84.6662 10.7124L80.7031 6.76869L86.1796 5.95721L88.6294 0.886719Z" fill="#C79144"/>
                                            </svg>
                                            </span> <span><?php echo $review_count; ?> reviews</span></div>
                                    <!-- <div>Average Rating: <?php echo $average_rating; ?></div> -->

                                    <?php
                                    // Get product price
                                    $product = wc_get_product(get_the_ID());
                                    $product_price = $product->get_price();
                                    ?>

                                    <p class="product-card-price"><?php echo wc_price($product_price); ?></p>

                                    <a class="btn btn-outline-light product-card-buy-btn" href="<?php the_permalink(); ?>" class="button">Shop Now</a>
                                </li>
                        <?php
                            endwhile;
                        } else {
                            echo __('No products found');
                        }
                        wp_reset_postdata();
                        ?>
            </ul>

                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="earnings" role="tabpanel" aria-labelledby="earnings-tab">
        <section id="slider4" class="splide" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                        
                <ul class="splide__list">
                <?php
                     $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 8,
                        'post_status' => 'publish',
                        'tax_query' => array(
                            'relation' => 'AND',  // Fetch products that belong to both parent and sub categories
                            array(
                                'taxonomy' => 'product_cat',
                                'field' => 'slug',
                                'terms' => 'gold',  // Parent category slug
                                'include_children' => false,
                            ),
                            array(
                                'taxonomy' => 'product_cat',
                                'field' => 'slug',
                                'terms' => 'earrings',  // Subcategory slug
                            ),
                        ),
                    );
                    $loop = new WP_Query($args);

                    if ($loop->have_posts()) {
                        while ($loop->have_posts()) : $loop->the_post();
                            ?>

                                <li class="splide__slide product-slider-item text-center px-4 mb-4">
                                    <?php
                                    // Get product image
                                    $product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail');
                                    ?>

                                    <img width="357" height="462" src="<?php echo $product_image[0]; ?>"  alt="<?php the_title(); ?>" />

                                    <div class="mt-3 mb-2 card-main-title"><?php the_title(); ?></div>
                                    <?php
                                    // Get product review count and rating
                                    $review_count = get_comments_number();
                                    // $average_rating = get_post_meta(get_the_ID(), '_wc_average_rating', true);
                                    ?>

                                    <div class="card-sub-title mb-3"> <span class="me-2"><svg width="97" height="17" viewBox="0 0 97 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.9313 0.886719L10.381 5.95721L15.8575 6.76869L11.8944 10.7124L12.8308 16.2843L7.9313 13.6534L3.03181 16.2843L3.96818 10.7124L0 6.76869L5.48155 5.95721L7.9313 0.886719Z" fill="#C79144"/>
                                            <path d="M27.9586 0.886719L30.4084 5.95721L35.8849 6.76869L31.9218 10.7124L32.8581 16.2843L27.9586 13.6534L23.0592 16.2843L23.9955 10.7124L20.0273 6.76869L25.5089 5.95721L27.9586 0.886719Z" fill="#C79144"/>
                                            <path d="M47.9887 0.886719L50.4385 5.95721L55.915 6.76869L51.9519 10.7124L52.8882 16.2843L47.9887 13.6534L43.0892 16.2843L44.0256 10.7124L40.0625 6.76869L45.539 5.95721L47.9887 0.886719Z" fill="#C79144"/>
                                            <path d="M68.602 0.886719L71.0518 5.95721L76.5283 6.76869L72.5651 10.7124L73.5015 16.2843L68.602 13.6534L63.7025 16.2843L64.6389 10.7124L60.6758 6.76869L66.1523 5.95721L68.602 0.886719Z" fill="#C79144"/>
                                            <path d="M88.6294 0.886719L91.0791 5.95721L96.5556 6.76869L92.5925 10.7124L93.5288 16.2843L88.6294 13.6534L83.7299 16.2843L84.6662 10.7124L80.7031 6.76869L86.1796 5.95721L88.6294 0.886719Z" fill="#C79144"/>
                                            </svg>
                                            </span> <span><?php echo $review_count; ?> reviews</span></div>
                                    <!-- <div>Average Rating: <?php echo $average_rating; ?></div> -->

                                    <?php
                                    // Get product price
                                    $product = wc_get_product(get_the_ID());
                                    $product_price = $product->get_price();
                                    ?>

                                    <p class="product-card-price"><?php echo wc_price($product_price); ?></p>

                                    <a class="btn btn-outline-light product-card-buy-btn" href="<?php the_permalink(); ?>" class="button">Shop Now</a>
                                </li>
                        <?php
                            endwhile;
                        } else {
                            echo __('No products found');
                        }
                        wp_reset_postdata();
                        ?>
            </ul>

                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="necklace" role="tabpanel" aria-labelledby="necklace-tab">
        <section id="slider5" class="splide" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                <ul class="splide__list">
                <?php
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 8,
                        'post_status' => 'publish',
                        'tax_query' => array(
                            'relation' => 'AND',  // Fetch products that belong to both parent and sub categories
                            array(
                                'taxonomy' => 'product_cat',
                                'field' => 'slug',
                                'terms' => 'gold',  // Parent category slug
                                'include_children' => false,
                            ),
                            array(
                                'taxonomy' => 'product_cat',
                                'field' => 'slug',
                                'terms' => 'necklace',  // Subcategory slug
                            ),
                        ),
                    );
                    $loop = new WP_Query($args);

                    if ($loop->have_posts()) {
                        while ($loop->have_posts()) : $loop->the_post();
                            ?>

                                <li class="splide__slide product-slider-item text-center px-4 mb-4">
                                    <?php
                                    // Get product image
                                    $product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail');
                                    ?>

                                    <img width="357" height="462" src="<?php echo $product_image[0]; ?>"  alt="<?php the_title(); ?>" />

                                    <div class="mt-3 mb-2 card-main-title"><?php the_title(); ?></div>
                                    <?php
                                    // Get product review count and rating
                                    $review_count = get_comments_number();
                                    // $average_rating = get_post_meta(get_the_ID(), '_wc_average_rating', true);
                                    ?>

                                    <div class="card-sub-title mb-3"> <span class="me-2"><svg width="97" height="17" viewBox="0 0 97 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.9313 0.886719L10.381 5.95721L15.8575 6.76869L11.8944 10.7124L12.8308 16.2843L7.9313 13.6534L3.03181 16.2843L3.96818 10.7124L0 6.76869L5.48155 5.95721L7.9313 0.886719Z" fill="#C79144"/>
                                            <path d="M27.9586 0.886719L30.4084 5.95721L35.8849 6.76869L31.9218 10.7124L32.8581 16.2843L27.9586 13.6534L23.0592 16.2843L23.9955 10.7124L20.0273 6.76869L25.5089 5.95721L27.9586 0.886719Z" fill="#C79144"/>
                                            <path d="M47.9887 0.886719L50.4385 5.95721L55.915 6.76869L51.9519 10.7124L52.8882 16.2843L47.9887 13.6534L43.0892 16.2843L44.0256 10.7124L40.0625 6.76869L45.539 5.95721L47.9887 0.886719Z" fill="#C79144"/>
                                            <path d="M68.602 0.886719L71.0518 5.95721L76.5283 6.76869L72.5651 10.7124L73.5015 16.2843L68.602 13.6534L63.7025 16.2843L64.6389 10.7124L60.6758 6.76869L66.1523 5.95721L68.602 0.886719Z" fill="#C79144"/>
                                            <path d="M88.6294 0.886719L91.0791 5.95721L96.5556 6.76869L92.5925 10.7124L93.5288 16.2843L88.6294 13.6534L83.7299 16.2843L84.6662 10.7124L80.7031 6.76869L86.1796 5.95721L88.6294 0.886719Z" fill="#C79144"/>
                                            </svg>
                                            </span> <span><?php echo $review_count; ?> reviews</span></div>
                                    <!-- <div>Average Rating: <?php echo $average_rating; ?></div> -->

                                    <?php
                                    // Get product price
                                    $product = wc_get_product(get_the_ID());
                                    $product_price = $product->get_price();
                                    ?>

                                    <p class="product-card-price"><?php echo wc_price($product_price); ?></p>

                                    <a class="btn btn-outline-light product-card-buy-btn" href="<?php the_permalink(); ?>" class="button">Shop Now</a>
                                </li>
                        <?php
                            endwhile;
                        } else {
                            echo __('No products found');
                        }
                        wp_reset_postdata();
                        ?>
            </ul>
                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="braclets" role="tabpanel" aria-labelledby="braclets-tab">
            <section id="slider6" class="splide" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                        
                <ul class="splide__list">
                <?php
                     $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 8,
                        'post_status' => 'publish',
                        'tax_query' => array(
                            'relation' => 'AND',  // Fetch products that belong to both parent and sub categories
                            array(
                                'taxonomy' => 'product_cat',
                                'field' => 'slug',
                                'terms' => 'gold',  // Parent category slug
                                'include_children' => false,
                            ),
                            array(
                                'taxonomy' => 'product_cat',
                                'field' => 'slug',
                                'terms' => 'bracelets',  // Subcategory slug
                            ),
                        ),
                    );
                    $loop = new WP_Query($args);

                    if ($loop->have_posts()) {
                        while ($loop->have_posts()) : $loop->the_post();
                            ?>

                                <li class="splide__slide product-slider-item text-center px-4 mb-4">
                                    <?php
                                    // Get product image
                                    $product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail');
                                    ?>

                                    <img width="357" height="462" src="<?php echo $product_image[0]; ?>"  alt="<?php the_title(); ?>" />

                                    <div class="mt-3 mb-2 card-main-title"><?php the_title(); ?></div>
                                    <?php
                                    // Get product review count and rating
                                    $review_count = get_comments_number();
                                    // $average_rating = get_post_meta(get_the_ID(), '_wc_average_rating', true);
                                    ?>

                                    <div class="card-sub-title mb-3"> <span class="me-2"><svg width="97" height="17" viewBox="0 0 97 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.9313 0.886719L10.381 5.95721L15.8575 6.76869L11.8944 10.7124L12.8308 16.2843L7.9313 13.6534L3.03181 16.2843L3.96818 10.7124L0 6.76869L5.48155 5.95721L7.9313 0.886719Z" fill="#C79144"/>
                                            <path d="M27.9586 0.886719L30.4084 5.95721L35.8849 6.76869L31.9218 10.7124L32.8581 16.2843L27.9586 13.6534L23.0592 16.2843L23.9955 10.7124L20.0273 6.76869L25.5089 5.95721L27.9586 0.886719Z" fill="#C79144"/>
                                            <path d="M47.9887 0.886719L50.4385 5.95721L55.915 6.76869L51.9519 10.7124L52.8882 16.2843L47.9887 13.6534L43.0892 16.2843L44.0256 10.7124L40.0625 6.76869L45.539 5.95721L47.9887 0.886719Z" fill="#C79144"/>
                                            <path d="M68.602 0.886719L71.0518 5.95721L76.5283 6.76869L72.5651 10.7124L73.5015 16.2843L68.602 13.6534L63.7025 16.2843L64.6389 10.7124L60.6758 6.76869L66.1523 5.95721L68.602 0.886719Z" fill="#C79144"/>
                                            <path d="M88.6294 0.886719L91.0791 5.95721L96.5556 6.76869L92.5925 10.7124L93.5288 16.2843L88.6294 13.6534L83.7299 16.2843L84.6662 10.7124L80.7031 6.76869L86.1796 5.95721L88.6294 0.886719Z" fill="#C79144"/>
                                            </svg>
                                            </span> <span><?php echo $review_count; ?> reviews</span></div>
                                    <!-- <div>Average Rating: <?php echo $average_rating; ?></div> -->

                                    <?php
                                    // Get product price
                                    $product = wc_get_product(get_the_ID());
                                    $product_price = $product->get_price();
                                    ?>

                                    <p class="product-card-price"><?php echo wc_price($product_price); ?></p>

                                    <a class="btn btn-outline-light product-card-buy-btn" href="<?php the_permalink(); ?>" class="button">Shop Now</a>
                                </li>
                        <?php
                            endwhile;
                        } else {
                            echo __('No products found');
                        }
                        wp_reset_postdata();
                        ?>
            </ul>

                </div>

            </section>
        </div>

    </div>






    </div>
</div>





<div class="container-fluid pt-3 mb-5">
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
<?php if (have_rows('image_text_grid')) : ?>
                <?php while (have_rows('image_text_grid')) : the_row();
                    $image_text_grid_image_1 = get_sub_field('image_text_grid_image_1');
                    $image_text_grid_title_1 = get_sub_field('image_text_grid_title_1');
                    $image_text_grid_caption_1 = get_sub_field('image_text_grid_caption_1');
                    $image_text_grid_text_1 = get_sub_field('image_text_grid_text_1');
                    $image_text_grid_url_1 = get_sub_field('image_text_grid_url_1');
                    $image_text_grid_url_text_1 = get_sub_field('image_text_grid_url_text_1');
                    $image_text_grid_image_2 = get_sub_field('image_text_grid_image_2');
                    $image_text_grid_title_2 = get_sub_field('image_text_grid_title_2');
                    $image_text_grid_caption_2 = get_sub_field('image_text_grid_caption_2');
                    $image_text_grid_text_2 = get_sub_field('image_text_grid_text_2');
                    $image_text_grid_url_2 = get_sub_field('image_text_grid_url_2');
                    $image_text_grid_url_text_2 = get_sub_field('image_text_grid_url_text_2');
                ?>
        <div class="row g-0">

            <div class="col-lg-6 order-1 order-lg-0" style="min-height: 45vh; background-size: cover;background-position: center; background-image: url('<?php echo $image_text_grid_image_1 ?>');">
            </div>
            <div class="col-lg-6 my-auto px-5 py-5 order-0 order-lg-1">
                <div class="lc-block">
                    <div class="text-center text-lg-start">
                    <div class="main-heading mb-3 body-text-dark"><?php echo $image_text_grid_title_1 ?></div>
                    <div class="caption-text mb-4 body-text-light"><?php echo $image_text_grid_caption_1 ?></div>
                    <p class="main-text mb-4 body-text-light"><?php echo $image_text_grid_text_1 ?></p>
                    <a class="links-custom-btn" href="<?php echo $image_text_grid_url_1 ?>"><?php echo $image_text_grid_url_text_1 ?> <span class="ms-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="10" viewBox="0 0 20 10" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.8227 4.51949L16.0235 0.194639C15.9684 0.133112 15.9026 0.0844526 15.8301 0.0510941C15.7575 0.0177356 15.6796 0.000488281 15.6009 0.000488281C15.5223 0.000488281 15.4444 0.0177356 15.3718 0.0510941C15.2993 0.0844526 15.2335 0.133112 15.1783 0.194639C15.0687 0.324946 15.0078 0.495696 15.0078 0.672962C15.0078 0.850227 15.0687 1.02098 15.1783 1.15128L17.9686 4.32047H0.618087C0.454173 4.32047 0.29697 4.39192 0.181066 4.519C0.0651612 4.64609 0 4.81857 0 4.9983C0 5.17802 0.0651612 5.35002 0.181066 5.47711C0.29697 5.60419 0.454173 5.67564 0.618087 5.67564H17.9686L15.1783 8.84483C15.0687 8.97513 15.0078 9.14588 15.0078 9.32315C15.0078 9.50041 15.0687 9.67116 15.1783 9.80147C15.2328 9.86437 15.2983 9.91419 15.371 9.94842C15.4436 9.98265 15.5219 10.0005 15.6009 10.0005C15.68 10.0005 15.7583 9.98265 15.8309 9.94842C15.9036 9.91419 15.9691 9.86437 16.0235 9.80147L19.8227 5.47662C19.9364 5.3486 20 5.17699 20 4.9983C20 4.81961 19.9364 4.64751 19.8227 4.51949Z" fill="#C0832B"/>
                    </svg>
                                    </span></a>
                    </div>
                </div>

            </div>

        
        </div>
        <div class="row g-0">
            <div class="d-none d-lg-block col-lg-6 order-lg-2 " style="min-height: 45vh; background-size: cover; background-position: center; background-image: url('<?php echo $image_text_grid_image_2 ?>');">

            </div>
            <div class="col-lg-6 order-lg-1 my-auto px-5 py-5">
            <div class="lc-block">
                    <div class="text-center text-lg-start">
                    <div class="main-heading mb-3 body-text-dark"><?php echo $image_text_grid_title_2 ?></div>
                    <div class="caption-text mb-4 body-text-light"><?php echo $image_text_grid_caption_2 ?></div>
                    <p class="main-text mb-4 body-text-light"><?php echo $image_text_grid_text_2 ?></p>
                    <a class="links-custom-btn" href="<?php echo $image_text_grid_url_2 ?>"><?php echo $image_text_grid_url_text_2 ?> <span class="ms-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="10" viewBox="0 0 20 10" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.8227 4.51949L16.0235 0.194639C15.9684 0.133112 15.9026 0.0844526 15.8301 0.0510941C15.7575 0.0177356 15.6796 0.000488281 15.6009 0.000488281C15.5223 0.000488281 15.4444 0.0177356 15.3718 0.0510941C15.2993 0.0844526 15.2335 0.133112 15.1783 0.194639C15.0687 0.324946 15.0078 0.495696 15.0078 0.672962C15.0078 0.850227 15.0687 1.02098 15.1783 1.15128L17.9686 4.32047H0.618087C0.454173 4.32047 0.29697 4.39192 0.181066 4.519C0.0651612 4.64609 0 4.81857 0 4.9983C0 5.17802 0.0651612 5.35002 0.181066 5.47711C0.29697 5.60419 0.454173 5.67564 0.618087 5.67564H17.9686L15.1783 8.84483C15.0687 8.97513 15.0078 9.14588 15.0078 9.32315C15.0078 9.50041 15.0687 9.67116 15.1783 9.80147C15.2328 9.86437 15.2983 9.91419 15.371 9.94842C15.4436 9.98265 15.5219 10.0005 15.6009 10.0005C15.68 10.0005 15.7583 9.98265 15.8309 9.94842C15.9036 9.91419 15.9691 9.86437 16.0235 9.80147L19.8227 5.47662C19.9364 5.3486 20 5.17699 20 4.9983C20 4.81961 19.9364 4.64751 19.8227 4.51949Z" fill="#C0832B"/>
                    </svg>
                                    </span></a>
                    </div>
                </div>
            </div>
        </div>

        <?php endwhile; ?>
            <?php endif; ?>
</div>




<div class="container d-flex align-items-center justify-content-center mb-5">
        <div class="row">
        <?php if (have_rows('card_blocks')) : ?>
                <?php while (have_rows('card_blocks')) : the_row();
                    $card_blocks_image = get_sub_field('card_blocks_image');
                    $card_blocks_title = get_sub_field('card_blocks_title');
                    $card_blocks_text = get_sub_field('card_blocks_text');

                ?>

            <div class="col-md-4 mb-4">
                <div class="card_blocks-item card border-0">
                    <div class="p-3 bg-white text-dark">
                        <div class="text-center my-4">
                                <div class="card_blocks-item_img-wrapper">
                                <img class="img-fluid" width="65" height="65" src="<?php echo esc_url($card_blocks_image['url']); ?>" alt="">
                                </div>
                        </div>
                        <div class="card-body text-center">
                            <div class="card-main-title mb-3"><?php echo $card_blocks_title ?></div>
                            <div class="card-sub-title"><?php echo $card_blocks_text ?></div>
                        </div>
                    </div>
                </div>
                <!-- /lc-block -->
            </div>

            <?php endwhile; ?>
            <?php endif; ?>
        </div>
</div>


<div class="bg-white py-5 blog-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <div class="main-heading mb-3">JEWELONE Latest Posts</div>
                <a class="btn btn-outline-light blog-section_btn" href="http://jewelone-new.local/category/blog/">View all</a>
            </div>

        </div>
        <div class="col-12 col-xl-10 m-auto">
            <div class="row">

            <?php
            $the_query = new WP_Query(array(
                //'category_name' => 'Jewelone',
                'post_type' => 'post',
                'post_status' => 'publish',
                'orderby' => 'post_date',
                'posts_per_page' => 4,		   
            )); 
            ?>
            <?php if ($the_query->have_posts()) : ?> 
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>  

                <div class="col-12 col-lg-6 mb-4 d-flex justify-content-center">
                    <div class="position-relative">
                        <img class="img-fluid" width="585" height="339" src="<?php the_post_thumbnail_url();?>" alt="">
                        <div class="position-absolute bottom-0 p-4 text-white">
                            <div class="date mb-3"><?php echo get_the_date(); ?></div>
                            <div class="blog-title mb-3 w-75"><?php the_title(); ?> </div>
                            <a class="blog-link" href="<?php the_permalink(); ?>">SHOP GIFTS <span class="ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="10" viewBox="0 0 19 10" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.3033 4.5393L14.8372 0.856724C14.7869 0.804334 14.7269 0.762901 14.6607 0.734497C14.5945 0.706092 14.5235 0.691406 14.4517 0.691406C14.3799 0.691406 14.3089 0.706092 14.2427 0.734497C14.1765 0.762901 14.1165 0.804334 14.0662 0.856724C13.9662 0.967679 13.9106 1.11307 13.9106 1.26401C13.9106 1.41495 13.9662 1.56035 14.0662 1.6713L16.6117 4.36984H0.782639C0.633098 4.36984 0.48968 4.43068 0.383939 4.53889C0.278197 4.6471 0.21875 4.79397 0.21875 4.947C0.21875 5.10004 0.278197 5.2465 0.383939 5.35471C0.48968 5.46292 0.633098 5.52375 0.782639 5.52375H16.6117L14.0662 8.22229C13.9662 8.33325 13.9106 8.47864 13.9106 8.62958C13.9106 8.78052 13.9662 8.92591 14.0662 9.03687C14.1158 9.09043 14.1756 9.13285 14.2419 9.162C14.3082 9.19115 14.3796 9.20633 14.4517 9.20633C14.5238 9.20633 14.5952 9.19115 14.6615 9.162C14.7278 9.13285 14.7876 9.09043 14.8372 9.03687L18.3033 5.35429C18.407 5.24529 18.465 5.09916 18.465 4.947C18.465 4.79485 18.407 4.64831 18.3033 4.5393Z" fill="white"/>
                            </svg></span></a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>  
                <?php endif; ?>  

            </div>

        </div>
    </div>
</div>





<div class="instagram-section py-5">
    <div class="container">
        <div class="col-12 text-center">
            <div>
                <div class="instagram-section_heading mb-3"><span class="me-2"><svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.2364 0C21.8364 0 24.4364 0 27.0364 0C29.2764 0 31.4264 0.4 33.3464 1.6C36.4864 3.56 38.0764 6.46 38.3864 10.11C38.4464 10.81 38.4464 11.51 38.4464 12.21C38.4464 17.13 38.4464 22.05 38.4464 26.96C38.4464 29.21 38.0664 31.37 36.8864 33.33C35.1964 36.15 32.6364 37.69 29.4464 38.22C28.6164 38.36 27.7664 38.4 26.9264 38.4C21.7264 38.42 16.5164 38.41 11.3164 38.41C8.54638 38.41 6.00638 37.69 3.83638 35.9C1.63638 34.08 0.476379 31.69 0.126379 28.88C0.0363793 28.17 0.0163793 27.45 0.0163793 26.74C0.0063793 21.41 -0.0236207 16.07 0.0363793 10.74C0.0763793 7.53 1.17638 4.72 3.65638 2.57C5.48638 0.99 7.65638 0.15 10.0364 0.07C13.0864 -0.03 16.1564 0.04 19.2064 0.04C19.2364 0.04 19.2364 0.02 19.2364 0ZM19.2064 34.87C21.6364 34.87 24.0664 34.87 26.4964 34.87C27.0864 34.87 27.6664 34.87 28.2464 34.8C31.0864 34.49 33.2364 33.17 34.4064 30.48C34.8864 29.38 35.0364 28.2 35.0364 27.01C35.0364 21.91 35.0364 16.8 35.0364 11.7C35.0364 11.16 35.0264 10.61 34.9564 10.08C34.6464 7.84 33.7164 5.96 31.7464 4.72C30.4664 3.91 29.0364 3.59 27.5464 3.58C22.1064 3.57 16.6564 3.57 11.2164 3.58C10.7764 3.58 10.3264 3.61 9.89638 3.67C7.15638 4.06 5.13638 5.39 4.12638 8.04C3.71638 9.11 3.58638 10.23 3.58638 11.36C3.58638 16.56 3.57638 21.77 3.59638 26.97C3.59638 27.64 3.64638 28.32 3.75638 28.97C4.21638 31.54 5.58638 33.39 8.08638 34.32C9.15638 34.72 10.2764 34.87 11.4064 34.87C14.0064 34.88 16.6064 34.87 19.2064 34.87Z" fill="#A0222C"/>
                <path d="M29.1464 19.1505C29.1464 24.6205 24.6864 29.0705 19.2064 29.0605C13.7364 29.0505 9.32641 24.6305 9.31641 19.1505C9.31641 13.6805 13.7764 9.22049 19.2464 9.23049C24.6864 9.25049 29.1464 13.7205 29.1464 19.1505ZM19.2164 25.4905C22.7064 25.5005 25.5864 22.6505 25.5964 19.1605C25.6064 15.6905 22.7164 12.7905 19.2464 12.7905C15.7764 12.7905 12.9264 15.6405 12.9064 19.1105C12.8764 22.6105 15.7164 25.4705 19.2164 25.4905Z" fill="#A0222C"/>
                <path d="M29.5369 11.2301C28.2869 11.2301 27.3069 10.2501 27.2969 9.00007C27.2869 7.74007 28.2969 6.74007 29.5569 6.75007C30.7869 6.76007 31.7869 7.77007 31.7769 9.00007C31.7769 10.2401 30.7769 11.2301 29.5369 11.2301Z" fill="#A0222C"/>
                </svg>
                </span>#jewelone jewellery
                </div>
                <div class="instagram-section_text">Follow <b>JEWELONE</b> on Instagram and be part of the movement</div>
            </div>
        </div>
    </div>           
</div>




<script>
 var elms = document.getElementsByClassName( 'splide' );


for ( var i = 0; i < elms.length; i++ )
{
  new Splide(elms[i], {
    type: 'slide',              // Loop the slides
    perPage: 4,                // Show 3 slides per view
    perMove: 1,                // Move 1 slide at a time
    gap: '1rem',               // Gap between slides
    autoplay: false,            // Autoplay the slider
    interval: 3000,            // Autoplay interval in milliseconds
    pauseOnHover: true,        // Pause autoplay on hover
    pagination:false,

    breakpoints: {
        1200: {
        perPage: 3,             // Show 3 slides per view on screens with width >= 992px
      },
      992: {
        perPage: 2,             // Show 2 slides per view on screens with width >= 992px
      },
      568: {
        perPage: 1,             // Show 1 slide per view on screens with width >= 768px
      }
    }
  }).mount();
}

new Splide( '#slider11',{
    type: 'loop',              // Loop the slides
    perPage: 5,                // Show 3 slides per view
    perMove: 1,                // Move 1 slide at a time
    gap: '5px',               // Gap between slides
    autoplay: false,            // Autoplay the slider
    interval: 3000,            // Autoplay interval in milliseconds
    pauseOnHover: true, 
    pagination:false,
        breakpoints: {
        1200: {
        perPage: 4,             // Show 3 slides per view on screens with width >= 992px
      },
      992: {
        perPage: 3,             // Show 2 slides per view on screens with width >= 992px
      },
      768: {
        perPage: 2,             // Show 1 slide per view on screens with width >= 768px
      },
      420: {
        perPage: 1,             // Show 1 slide per view on screens with width >= 768px
      }
    }
} ).mount();




document.addEventListener('DOMContentLoaded', function() {
   
// Get all buttons with the specified class
const buttons = document.querySelectorAll('.flickity-prev-next-button');

// Loop through each button and update the SVG path
buttons.forEach(button => {
    const pathElement = button.querySelector('path');
    pathElement.setAttribute('d', 'M 0,50 L 60,00 L 50,30 L 80,30 L 80,70 L 50,70 L 60,100 Z');
});
});



</script>

<?php get_footer();