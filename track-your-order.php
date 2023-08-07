<?php
/* Template Name: track your order */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-12 my-5 d-none d-lg-block">
            <div class="breadcrumbs">
                <a href="<?php echo get_home_url(); ?>">Home</a>
                <span class="separator"> / </span>

                <?php
                if (is_page()) {
                    $parent_id = wp_get_post_parent_id(get_the_ID());

                    if ($parent_id) {
                        $parent_title = get_the_title($parent_id);
                        $parent_link = get_permalink($parent_id);

                        echo '<a href="' . esc_url($parent_link) . '">' . esc_html($parent_title) . '</a>';
                        echo '<span class="separator"> / </span>';
                    }
                } elseif (is_category() || is_single()) {
                    $categories = get_the_category();
                    if ($categories) {
                        foreach ($categories as $category) {
                            echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
                            echo '<span class="separator"> / </span>';
                        }
                    }
                }

                echo '<span class="current">' . get_the_title() . '</span>';
                ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-4 mb-3">
            <div class="d-none d-lg-block">
                <div class="main-heading text-color-red mb-4">Support & Care</div>

                <div>
                    <?php 
                            $menu_items = wp_get_nav_menu_items('support');
                            $current_page_id = get_queried_object_id(); // Get the current page's ID

                            if ($menu_items) {
                                foreach ($menu_items as $menu_item) {
                                    if ($current_page_id == $menu_item->object_id) {
                                        $class = 'sidebar-nav-link active';
                                    } else {
                                        $class = 'sidebar-nav-link  ms-3';
                                    }
                                    
                                    echo '<a href="' . esc_url($menu_item->url) . '" class="' . esc_attr($class) . '">' . esc_html($menu_item->title) . '</a><br>';
                                }
                            }
                            ?>
                </div>
            </div>
            <div class="dropdown d-block d-lg-none mt-4">
                    <button class="btn btn-transparent border-0 border-bottom dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php 
                        $menu_items = wp_get_nav_menu_items('support');
                        $current_page_id = get_queried_object_id(); // Get the current page's ID

                        if ($menu_items) {
                            foreach ($menu_items as $menu_item) {
                                if ($current_page_id == $menu_item->object_id) {
                                    echo esc_html($menu_item->title);
                                    break; // Display the first active link's title and exit loop
                                }
                            }
                        } else {
                            echo 'Dropdown button'; // Fallback text if no active link
                        }
                        ?>
                    </button>
                    
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <?php 
                        if ($menu_items) {
                            foreach ($menu_items as $menu_item) {
                                if ($current_page_id == $menu_item->object_id) {
                                    $class = 'dropdown-item active';
                                } else {
                                    $class = 'dropdown-item';
                                }
                                
                                echo '<li><a href="' . esc_url($menu_item->url) . '" class="' . esc_attr($class) . '">' . esc_html($menu_item->title) . '</a></li>';
                            }
                        }
                        ?>
                    </ul>
        </div>
        </div>

        <div class="col-12 col-lg-8 mb-5">
            <div>
                <div  class="mb-3 main-heading">Order Status</div>
                <div  class="mb-4 main-text">For the latest status information on your Clean Origin order, please enter your email address and order number below. If a tracking number has been created, you will be able to see your expected delivery date.</div>
            </div>
            <div class="mb-4">
                <input placeholder="Email address*" class="form-control" type="email">
            </div>
            <div class="mb-4">
                <input placeholder="Order number*" class="form-control"  type="text">
            </div>
            <div>
                <button class="btn btn-dark  py-2 px-3 check-order-btn">CHECK ORDER STATUS <span class="ms-2"><svg width="30" height="14" viewBox="0 0 30 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29.7341 6.3266L24.0353 0.271812C23.9526 0.185673 23.8539 0.11755 23.7451 0.0708481C23.6362 0.0241462 23.5194 0 23.4014 0C23.2834 0 23.1666 0.0241462 23.0578 0.0708481C22.9489 0.11755 22.8503 0.185673 22.7675 0.271812C22.6031 0.454241 22.5117 0.693291 22.5117 0.941463C22.5117 1.18963 22.6031 1.42868 22.7675 1.61111L26.9528 6.04798H0.92713C0.681259 6.04798 0.445455 6.148 0.271599 6.32592C0.0977418 6.50384 0 6.74532 0 6.99693C0 7.24855 0.0977418 7.48935 0.271599 7.66727C0.445455 7.84518 0.681259 7.94521 0.92713 7.94521H26.9528L22.7675 12.3821C22.6031 12.5645 22.5117 12.8036 22.5117 13.0517C22.5117 13.2999 22.6031 13.5389 22.7675 13.7214C22.8492 13.8094 22.9474 13.8792 23.0564 13.9271C23.1654 13.975 23.2828 14 23.4014 14C23.52 14 23.6374 13.975 23.7464 13.9271C23.8554 13.8792 23.9537 13.8094 24.0353 13.7214L29.7341 7.66659C29.9046 7.48736 30 7.2471 30 6.99693C30 6.74677 29.9046 6.50583 29.7341 6.3266Z" fill="white"/>
                    </svg>
                    </span></button>
            </div>
        </div>
    </div>
</div>












<?php get_footer();