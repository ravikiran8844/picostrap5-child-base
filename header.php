<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


?><!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- wp_head begin -->
    <?php wp_head(); ?>
    <!-- wp_head end -->
  </head>
  <body <?php body_class(); ?> >
    <?php wp_body_open(); ?>  


    <div class="bg-dark py-2">
          <div class="container text-center">
            <div class="main-text text-white"><?php the_field('announcment-text', 'option'); ?></div>
          </div>
    </div>

    
 


    <div class="main-header">
        <div class="container">
        <div class="header-1 col-12 d-flex justify-content-between align-items-center">
            <div class="me-3">
            <?php 
                    the_custom_logo();
            ?>
            </div>
            <div class="d-none d-lg-block flex-grow-1 px-5">
            <div class="d-flex justify-content-between">
                <!-- <input class="form-control nav-search-bar" type="serach"> -->
                <?php echo do_shortcode('[fibosearch]'); ?>
              </div>
              </div>
              <div>
                <!-- <ul  class="d-flex justify-content-between align-items-center  list-unstyled" >
                  <li class="list-unstyled me-2">link</li>
                  <li class="list-unstyled me-2">link</li>
                  <li class="list-unstyled me-2">link</li>
                </ul> -->
                <?php 
                  wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="d-flex justify-content-between align-items-center gap-3 m-auto list-unstyled %2$s">%3$s</ul>',
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>
              </div>
            </div>
          </div>
        </div>
        <div class="">
        <div class="header-2_mega-menu">
        <div class="container col-12">
        <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?>
        </div>
        </div>
        </div>
        
       
    </div>



    

<main id='theme-main'>