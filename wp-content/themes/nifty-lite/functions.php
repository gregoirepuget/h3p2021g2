<?php
function nifty_lite_css() {
	$parent_style = 'specia-parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'nifty-lite-style', get_stylesheet_uri(), array( $parent_style ));
	
	wp_enqueue_style('nifty-lite-default',get_stylesheet_directory_uri() .'/css/colors/default.css');
	wp_dequeue_style('specia-default', get_template_directory_uri() . '/css/colors/default.css');
	
	wp_dequeue_script('specia-custom-js', get_template_directory_uri() . '/js/custom.js');
	wp_enqueue_script('nifty-lite-custom-js', get_stylesheet_directory_uri() . '/js/custom.js');
	
	wp_dequeue_style('specia-media-query', get_template_directory_uri() . '/css/media-query.css');
	wp_enqueue_style('nifty-lite-media-query', get_stylesheet_directory_uri() . '/css/media-query.css');
}
add_action( 'wp_enqueue_scripts', 'nifty_lite_css',999);
   	
function nifty_lite_setup()	{	
	load_child_theme_textdomain( 'nifty-lite', get_stylesheet_directory() . '/languages' );
	add_editor_style( array( 'css/editor-style.css', nifty_lite_google_font() ) );
}
add_action( 'after_setup_theme', 'nifty_lite_setup' );
	
/**
 * Register Google fonts for Nifty.
 */
function nifty_lite_google_font() {
	
    $get_fonts_url = '';
		
    $font_families = array();
 
	$font_families = array('Open Sans:300,400,600,700,800', 'Raleway:400,700');
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $get_fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );

    return esc_url($get_fonts_url);
	
}

function nifty_lite_scripts_styles() {
    wp_enqueue_style( 'nifty-fonts', nifty_lite_google_font(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'nifty_lite_scripts_styles' );

require( get_stylesheet_directory() . '/inc/customize/specia-header-section.php');
require( get_stylesheet_directory() . '/inc/customize/specia-features.php');
/**
 * Called premium Page Details
 */
require_once( get_stylesheet_directory() . '/inc/customize/specia-premium.php');

/**
 * Add WooCommerce Cart Icon With Cart Count
*/
function nifty_lite_add_to_cart_fragment( $fragments ) {
 
    ob_start();
    $count = WC()->cart->cart_contents_count;
    ?><a class="cart-icon" href="<?php echo esc_url( wc_get_cart_url() ); ?>"><i class='fa fa-cart-plus'></i><?php
    if ( $count > 0 ) { 
	?>
        <span class="count"><?php echo esc_html( $count ); ?></span>
	<?php            
    } else {
	?>	
		<span class="count"><?php echo "0"; ?></span>
	<?php
	}
    ?></a><?php
 
    $fragments['a.cart-icon'] = ob_get_clean();
     
    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'nifty_lite_add_to_cart_fragment' );