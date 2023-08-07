</main>
	<?php if (function_exists("lc_custom_footer")) lc_custom_footer(); else {
		?>
		<?php if (is_active_sidebar( 'footerfull' )): ?>
		<div class="wrapper bg-light mt-5 py-5" id="wrapper-footer-widgets">
			
			<div class="container mb-5">
				
				<div class="row">
					<?php dynamic_sidebar( 'footerfull' ); ?>
				</div>

			</div>
		</div>
		<?php endif ?>
		
		
		<div class="wrapper custom_footer py-3" id="wrapper-footer-colophon">
			<div class="container-lg">
				<div class="row g-4 mb-4 py-4">
					<div class="col-12 col-lg-4 mb-4 text-center text-lg-start">
						<div class="mb-3">
							<img class="img-fluid" width="200" height="300" src="/wp-content/uploads/2023/08/jewelone-footer-logo.png" alt="">
						</div>
						<div class="custom_footer--text mb-3 text-center text-lg-start ">Subscribe to email alerts. We promise not to spam your inbox.</div>
						<div>subscribe</div>
					</div>
					<div class="col-6 col-md">
						<div class="custom_footer--links-title mb-3">Useful Links</div>
						<div  class="footer-link-items_wrapper">
						<?php 
						// Replace 'custom-menu' with the name or location of your custom menu
						$menu_items = wp_get_nav_menu_items('useful-links');

						if ($menu_items) {
							foreach ($menu_items as $menu_item) {
								// Output or manipulate each menu item as needed
								$class = 'custom_footer--link-item '; // Add your custom class name here
								echo '<a href="' . esc_url($menu_item->url) . '" class="' . esc_attr($class) . '">' . esc_html($menu_item->title) . '</a>';
							}
						}
						?>
						</div>
					</div>
					<div class="col-6 col-md">
						<div class="custom_footer--links-title mb-3">Information</div>
						<div class="footer-link-items_wrapper">
						<?php 
						// Replace 'custom-menu' with the name or location of your custom menu
						$menu_items = wp_get_nav_menu_items('information');

						if ($menu_items) {
							foreach ($menu_items as $menu_item) {
								// Output or manipulate each menu item as needed
								$class = 'custom_footer--link-item '; // Add your custom class name here
								echo '<a href="' . esc_url($menu_item->url) . '" class="' . esc_attr($class) . '">' . esc_html($menu_item->title) . '</a>';
							}
						}
						?>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md">
						<div class="custom_footer--links-title mb-3">Contact Us</div>
						<ul class="list-unstyled">
						<?php if (have_rows('contact_details', 'option')) : ?>
							<?php while (have_rows('contact_details', 'option')) : the_row();
					
							?>
									
										<li  class="custom_footer--link-item "><span class="me-2"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M22.7 16.4002C22.7 17.7002 21.6 18.8002 20.3 18.8002H6.09999L1.29999 23.6002V4.6002C1.29999 3.3002 2.39999 2.2002 3.69999 2.2002H20.4C21.7 2.2002 22.8 3.3002 22.8 4.6002V16.4002H22.7Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
											</svg>
											</span>Chat with Us</li>
										<li  class="custom_footer--link-item "><span class="me-2"><svg width="28" height="27" viewBox="0 0 28 27" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M26 20.1998V23.7998C26 25.0998 24.9 26.1998 23.6 26.1998C23.5 26.1998 23.4 26.1998 23.4 26.1998C19.7 25.7998 16.1 24.4998 13 22.4998C10.1 20.6998 7.6 18.1998 5.8 15.2998C3.7 12.1998 2.4 8.5998 2 4.8998C1.9 3.4998 2.9 2.3998 4.2 2.2998C4.3 2.2998 4.3 2.2998 4.4 2.2998H8C9.2 2.2998 10.2 3.1998 10.4 4.3998C10.6 5.5998 10.8 6.6998 11.2 7.7998C11.5 8.6998 11.3 9.6998 10.7 10.2998L9.2 11.7998C10.9 14.7998 13.4 17.2998 16.4 18.9998L17.9 17.4998C18.6 16.7998 19.6 16.5998 20.4 16.9998C21.5 17.3998 22.6 17.6998 23.8 17.7998C25.1 17.8998 26 18.9998 26 20.1998Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>

											</span><?php the_sub_field('phone_number'); ?></li>
										<li  class="custom_footer--link-item "><span class="me-2"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g clip-path="url(#clip0_39_1036)">
											<path d="M25.999 5.00098H1.99902C1.72288 5.00098 1.49902 5.22483 1.49902 5.50098V22.501C1.49902 22.7771 1.72288 23.001 1.99902 23.001H25.999C26.2752 23.001 26.499 22.7771 26.499 22.501V5.50098C26.499 5.22483 26.2752 5.00098 25.999 5.00098Z" stroke="white"/>
											<path d="M26.246 5.24902L14.334 18.03C14.2931 18.074 14.2436 18.1091 14.1886 18.1331C14.1335 18.157 14.0741 18.1694 14.014 18.1694C13.954 18.1694 13.8946 18.157 13.8395 18.1331C13.7845 18.1091 13.7349 18.074 13.694 18.03L1.75104 5.24902" stroke="white"/>
											</g>
											<defs>
											<clipPath id="clip0_39_1036">
											<rect width="27.999" height="27.999" fill="white"/>
											</clipPath>
											</defs>
											</svg>
											</span><?php the_sub_field('email_address'); ?></li>


											<?php endwhile; ?>
										<?php endif; ?>
									</ul>
								</div>
							</div>
							<div class="row mb-4">
							<?php if (have_rows('social_links', 'option')) : ?>
							<?php while (have_rows('social_links', 'option')) : the_row();
					
							?>
					<div class="col-12 custom_footer--logos_wrapper">
						<div class="d-flex gap-3">
							<div>
								<a target="_blank" href="<?php the_sub_field('facebook_url'); ?>"><svg width="16" height="30" viewBox="0 0 16 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M14.5401 16.7154L15.3533 11.6229H10.3195V8.31474C10.3195 6.92515 11.0188 5.56714 13.2715 5.56714H15.5567V1.23257C14.2115 1.02421 12.8526 0.91075 11.4905 0.893066C7.35119 0.893066 4.64315 3.32485 4.64315 7.73838V11.6229H0.0402832V16.7154H4.65128V29.0165H10.3439V16.7154H14.5401Z" fill="white"/>
								</svg></a>
							</div>
							<div class="footer-twitter-icon">
								<a target="_blank" href="<?php the_sub_field('twitter_url'); ?>"><svg width="36" height="30" viewBox="0 0 36 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M35.1111 4.27141C33.9802 4.74436 32.7927 5.07584 31.5769 5.25798C32.1418 5.16327 32.9809 4.15302 33.3117 3.7505C33.834 3.13232 34.2311 2.42249 34.4817 1.65897C34.4817 1.59582 34.5382 1.52479 34.4817 1.47743C34.452 1.46154 34.4187 1.45321 34.3849 1.45321C34.3511 1.45321 34.3178 1.46154 34.2881 1.47743C32.9654 2.17332 31.5584 2.70366 30.1004 3.05595C30.0492 3.07005 29.995 3.07015 29.9438 3.05623C29.8926 3.04232 29.8463 3.01492 29.8099 2.97703C29.6992 2.8465 29.5777 2.72507 29.4468 2.61397C28.8422 2.10585 28.1585 1.69552 27.4215 1.39851C26.4351 1.00504 25.3697 0.837649 24.3069 0.909166C23.2772 0.968914 22.2715 1.2377 21.3537 1.69842C20.4377 2.16949 19.6281 2.81643 18.9734 3.60054C18.2953 4.41509 17.8103 5.36664 17.5533 6.38662C17.3317 7.35374 17.307 8.3541 17.4807 9.33055C17.4807 9.4963 17.4807 9.51209 17.3355 9.4963C11.6227 8.72283 6.78146 6.67076 2.9407 2.36141C2.77932 2.17198 2.68249 2.17198 2.54532 2.36141C0.850872 4.83968 1.67389 8.83332 3.78792 10.7907C4.07033 11.0511 4.36081 11.3116 4.67549 11.5799C3.70634 11.4973 2.76323 11.2291 1.89982 10.7907C1.73037 10.6881 1.64969 10.7907 1.63355 10.9328C1.6111 11.1954 1.6111 11.4594 1.63355 11.722C1.80376 12.9892 2.3147 14.1894 3.11422 15.2003C3.91373 16.2111 4.97317 16.9963 6.18436 17.4757C6.47906 17.6022 6.78773 17.6949 7.10421 17.7519C6.20887 17.9271 5.29012 17.9564 4.38502 17.8388C4.1833 17.7993 4.11068 17.894 4.1833 18.0834C5.38555 21.2405 7.96757 22.227 9.90409 22.7716C10.1623 22.7716 10.4286 22.7716 10.711 22.8742L10.6626 22.9216C10.0251 23.8766 7.79006 24.5869 6.75725 24.9421C4.85627 25.6083 2.82974 25.8615 0.818597 25.684C0.503913 25.6445 0.431294 25.6445 0.350605 25.684C0.269917 25.7235 0.350605 25.8182 0.439362 25.8971C0.842803 26.1575 1.24624 26.3864 1.67389 26.6153C2.93419 27.2819 4.26544 27.8112 5.64375 28.1938C12.7766 30.1196 20.8051 28.7068 26.1547 23.5056C30.3586 19.4173 31.8029 13.782 31.8029 8.14666C31.8029 7.92567 32.0691 7.79939 32.2224 7.681C33.2922 6.87535 34.2355 5.92073 35.0223 4.84756C35.1415 4.69027 35.204 4.49873 35.1998 4.30298C35.2483 4.1767 35.2483 4.20827 35.1111 4.27141Z" fill="white"/>
								</svg>
								</a>
							</div>
							<div>
								<a target="_blank" href="<?php the_sub_field('instagram_url'); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="29" viewBox="0 0 30 29" fill="none">
								<path d="M22.4315 5.23879C22.1041 5.23879 21.784 5.33588 21.5118 5.51777C21.2396 5.69967 21.0274 5.9582 20.9021 6.26068C20.7768 6.56316 20.7441 6.896 20.8079 7.21711C20.8718 7.53822 21.0295 7.83318 21.261 8.06469C21.4925 8.2962 21.7874 8.45386 22.1086 8.51773C22.4297 8.58161 22.7625 8.54882 23.065 8.42353C23.3675 8.29824 23.626 8.08607 23.8079 7.81384C23.9898 7.54162 24.0869 7.22157 24.0869 6.89416C24.0879 6.67648 24.0458 6.46075 23.963 6.25944C23.8802 6.05813 23.7583 5.87522 23.6044 5.7213C23.4504 5.56737 23.2675 5.44548 23.0662 5.36266C22.8649 5.27984 22.6492 5.23774 22.4315 5.23879Z" fill="white"/>
								<path d="M15.0814 7.36182C13.7075 7.36182 12.3646 7.7692 11.2223 8.53246C10.0799 9.29573 9.18963 10.3806 8.66389 11.6498C8.13814 12.9191 8.00058 14.3158 8.2686 15.6632C8.53663 17.0106 9.19819 18.2483 10.1696 19.2198C11.1411 20.1912 12.3788 20.8528 13.7262 21.1208C15.0737 21.3888 16.4703 21.2513 17.7396 20.7255C19.0088 20.1998 20.0937 19.3095 20.857 18.1672C21.6202 17.0249 22.0276 15.6819 22.0276 14.3081C22.0255 12.4664 21.293 10.7009 19.9908 9.39864C18.6886 8.09642 16.923 7.36391 15.0814 7.36182ZM15.0814 18.7594C14.201 18.7594 13.3404 18.4983 12.6084 18.0092C11.8764 17.5201 11.3058 16.8249 10.9689 16.0115C10.632 15.1981 10.5439 14.3031 10.7156 13.4397C10.8874 12.5762 11.3113 11.783 11.9338 11.1605C12.5564 10.538 13.3495 10.114 14.213 9.94229C15.0764 9.77053 15.9714 9.85869 16.7848 10.1956C17.5982 10.5325 18.2934 11.103 18.7825 11.835C19.2716 12.5671 19.5327 13.4277 19.5327 14.3081C19.5327 15.4886 19.0637 16.6208 18.2289 17.4556C17.3941 18.2904 16.2619 18.7594 15.0814 18.7594Z" fill="white"/>
								<path d="M20.594 28.4148H9.33112C8.21581 28.4138 7.11165 28.1928 6.08183 27.7646C5.05201 27.3363 4.11675 26.7092 3.32958 25.9191C2.5424 25.1289 1.91877 24.1913 1.49436 23.1599C1.06996 22.1285 0.85311 21.0236 0.856234 19.9082V8.67704C0.858332 6.43 1.75189 4.2756 3.34079 2.6867C4.92968 1.09781 7.08408 0.204246 9.33112 0.202148H20.594C22.8418 0.204241 24.997 1.09755 26.5872 2.68622C28.1773 4.27489 29.0726 6.42927 29.0768 8.67704V19.9082C29.0789 21.0239 28.8611 22.1291 28.4358 23.1605C28.0105 24.192 27.3862 25.1295 26.5983 25.9195C25.8105 26.7095 24.8748 27.3365 23.8445 27.7647C22.8142 28.1929 21.7097 28.4138 20.594 28.4148ZM9.33112 2.8555C7.7878 2.8576 6.30829 3.47161 5.21699 4.5629C4.12569 5.6542 3.51168 7.13371 3.50959 8.67704V19.9082C3.51168 21.4516 4.12569 22.9311 5.21699 24.0224C6.30829 25.1137 7.7878 25.7277 9.33112 25.7298H20.594C22.138 25.7298 23.6187 25.1164 24.7105 24.0247C25.8022 22.9329 26.4155 21.4522 26.4155 19.9082V8.67704C26.4134 7.13371 25.7994 5.6542 24.7081 4.5629C23.6168 3.47161 22.1373 2.8576 20.594 2.8555H9.33112Z" fill="white"/>
								</svg></a>
							</div>
							<div>
								<a target="_blank"  href="<?php the_sub_field('youtube_url'); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="22" viewBox="0 0 30 22" fill="none">
								<path d="M29.6044 7.12341C29.6055 6.28512 29.4411 5.45485 29.1208 4.68017C28.8005 3.90548 28.3305 3.2016 27.7378 2.60884C27.145 2.01608 26.4411 1.54609 25.6664 1.22578C24.8918 0.905467 24.0615 0.741135 23.2232 0.742193H6.90048C6.06181 0.741136 5.23116 0.905418 4.45603 1.22563C3.68089 1.54584 2.97649 2.01572 2.38308 2.60838C1.78968 3.20103 1.31893 3.90485 0.997739 4.67958C0.676551 5.45431 0.51123 6.28474 0.51123 7.12341V14.7182C0.521845 16.4164 1.20391 18.0414 2.40852 19.2385C3.61312 20.4356 5.24241 21.1074 6.94066 21.1074H23.2232C24.0619 21.1074 24.8923 20.9421 25.667 20.6209C26.4418 20.2997 27.1456 19.829 27.7382 19.2356C28.3309 18.6422 28.8008 17.9378 29.121 17.1626C29.4412 16.3875 29.6055 15.5569 29.6044 14.7182V7.12341ZM20.0085 11.4954L12.687 15.112C12.3976 15.2727 11.4252 15.0638 11.4252 14.7342V7.30022C11.4252 6.97071 12.4057 6.76175 12.695 6.92249L19.7031 10.74C19.9924 10.9087 20.3058 11.3347 20.0085 11.4954Z" fill="white"/>
								</svg>
								</a>
							</div>

						</div>
					</div>
			<?php endwhile; ?>
            <?php endif; ?>
				</div>
				<div class="row mb-3">
				<?php if (have_rows('app_links', 'option')) : ?>
                <?php while (have_rows('app_links', 'option')) : the_row();
        
                ?>
					<div class="col-12 col-md-6 mb-4">
						<div class="custom_footer--bold-text mb-3">Swarna Shakti App Download</div>
						<div class="d-flex gap-2">
						<div>
								<a target="_blank" href="<?php the_sub_field('app_store'); ?>"><img class="img-fluid" width="180" height="60" src="/wp-content/uploads/2023/08/app-store.png" alt=""></a>
							</div>
							<div>
								<a target="_blank" href="<?php the_sub_field('play_store'); ?>">
								<img class="img-fluid" width="180" height="60"  src="/wp-content/uploads/2023/08/g-play.png" alt="">
								</a>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
            <?php endif; ?>

					<div class="col-12 col-md-6 mb-4">
						<div class="custom_footer--bold-text mb-3">We Accept</div>
						<div>
							<img class="img-fluid" src="/wp-content/uploads/2023/08/payment-methods.webp" alt="">
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-12 footer-copy_wrapper">
						<div class="custom_footer--copy-text">© <?php echo date('Y'); ?> JewelOne. All Rights Reserved.</div>
					</div>
				</div>
	
		
			</div><!-- container end -->
		
		</div><!-- wrapper end -->
		
	<?php 
	} //END ELSE CASE ?>


	<?php wp_footer(); ?>

	</body>
</html>

