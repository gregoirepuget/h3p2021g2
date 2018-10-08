<?php	
function specia_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar Widget Area', 'specia' ),
		'id' => 'sidebar-primary',
		'description' => __( 'Sidebar Widget Area', 'specia' ),
		'before_widget' => '<aside id="%1$s" class="widget">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3><div class="title-border"></div>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'specia' ),
		'id' => 'footer-widget-area',
		'description' => __( 'Footer Widget Area', 'specia' ),
		'before_widget' => '<div class="col-md-3 col-sm-6"><aside id="%1$s" class="widget">',
		'after_widget' => '</aside></div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3><div class="title-border"></div>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Features Widget Area', 'specia' ),
		'id' => 'specia_feature_widget',
		'description' => __( 'Features Widget Area', 'specia' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
	
	register_sidebar( array(
		'name' => __( 'WooCommerce Widget Area', 'specia' ),
		'id' => 'woocommerce-1',
		'description' => __( 'WooCommerce Widget Area', 'specia' ),
		'before_widget' => '<aside id="%1$s" class="widget">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3><div class="title-border"></div>',
	) );
	
}
add_action( 'widgets_init', 'specia_widgets_init' );
 
?>