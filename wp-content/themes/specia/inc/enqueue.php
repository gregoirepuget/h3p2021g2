<?php
 /**
 * Enqueue scripts and styles.
 */
function specia_scripts() {
	
	
	wp_enqueue_style( 'specia-style', get_stylesheet_uri() );
	
	wp_enqueue_style('specia-default', get_template_directory_uri() . '/css/colors/default.css');
	
	wp_enqueue_style('owl-carousel',get_template_directory_uri().'/css/owl.carousel.css');
	
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.css');
	
	wp_enqueue_style('owl-carousel-theme',get_template_directory_uri().'/css/owl.theme.default.min.css');
	
	wp_enqueue_style('woo',get_template_directory_uri().'/css/woo.css');
	
	wp_enqueue_style('specia-form',get_template_directory_uri().'/css/form.css');

	wp_enqueue_style('specia-typography',get_template_directory_uri().'/css/typography.css');

	wp_enqueue_style('specia-media-query',get_template_directory_uri().'/css/media-query.css');

	wp_enqueue_style('specia-widget',get_template_directory_uri().'/css/widget.css');
	
	wp_enqueue_style('animate',get_template_directory_uri().'/css/animate.min.css');
	
	wp_enqueue_style('specia-text-rotator',get_template_directory_uri().'/css/text-rotator.css');
	
	wp_enqueue_style('specia-menus',get_template_directory_uri().'/css/menus.css');
	
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/inc/fonts/font-awesome/css/font-awesome.min.css');
	
	
	// Scripts
	
	wp_enqueue_script( 'jquery' );
	
	wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js');
	
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
	
	wp_enqueue_script('jquery-text-rotator', get_template_directory_uri() . '/js/jquery.simple-text-rotator.min.js');
	
	wp_enqueue_script('jquery-sticky', get_template_directory_uri() . '/js/jquery.sticky.js');
	
	wp_enqueue_script('wow-min', get_template_directory_uri() . '/js/wow.min.js');
	
	wp_enqueue_script('specia-service-component', get_template_directory_uri() . '/js/component.js');
	
	wp_enqueue_script('specia-service-modernizr-custom', get_template_directory_uri() . '/js/modernizr.custom.js');
	
	wp_enqueue_script('specia-custom-js', get_template_directory_uri() . '/js/custom.js');

	wp_enqueue_script('specia-dropdown', get_template_directory_uri() . '/js/dropdown.js');

	wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'specia_scripts' );

//Customizer Enqueue for Premium Buttons
function specia_premium_css()	{
	wp_enqueue_style('style-customizer',get_template_directory_uri(). '/css/style-customizer.css');
}
add_action('customize_controls_print_styles','specia_premium_css');

?>