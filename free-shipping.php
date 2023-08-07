<?php
/* Template Name: free shipping */

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
        <?php if(have_posts()) : ?>
            <?php while(have_posts())  : the_post(); ?>
            <?php the_content(); ?>          
            <?php comments_template( '', true ); ?> 
            <?php endwhile; ?>                   
            <?php else : ?>                       
                <h3><?php _e('404 Error&#58; Not Found'); ?></h3>
        <?php endif; ?> 
            
        </div>
    </div>
</div>












<?php get_footer();