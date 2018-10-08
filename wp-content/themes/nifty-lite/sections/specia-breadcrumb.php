<section class="breadcrumb">
    <div class="background-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12 col-sm-6">
                     <h2>
						<?php 
							if ( is_day() ) : 
							
								printf( __( 'Daily Archives: %s', 'nifty-lite' ), get_the_date() );
							
							elseif ( is_month() ) :
							
								printf( __( 'Monthly Archives: %s', 'nifty-lite' ), (get_the_date( 'F Y' ) ));
								
							elseif ( is_year() ) :
							
								printf( __( 'Yearly Archives: %s', 'nifty-lite' ), (get_the_date( 'Y' ) ) );
								
							elseif ( is_category() ) :
							
								printf( __( 'Category Archives: %s', 'nifty-lite' ), (single_cat_title( '', false ) ));

							elseif ( is_tag() ) :
							
								printf( __( 'Tag Archives: %s', 'nifty-lite' ), (single_tag_title( '', false ) ));
								
							elseif ( is_404() ) :
						
								printf( __( 'Error 404', 'nifty-lite' ));
								
							elseif ( is_author() ) :
							
								printf( __( 'Author: %s', 'nifty-lite' ), (get_the_author( '', false ) ));			
								
							elseif ( class_exists( 'WooCommerce' ) ) : 
								
								if ( is_shop() ) {
									woocommerce_page_title();
								}
								
								elseif ( is_cart() ) {
									the_title();
								}
								
								elseif ( is_checkout() ) {
									the_title();
								}
								
								else {
									the_title();
								}
							
							else :
									the_title();
								
							endif;
							
						?>
					</h2>
                </div>

                <div class="col-md-6 col-xs-12 col-sm-6 breadcrumb-position">
					<ul class="page-breadcrumb">
						<?php if (function_exists('specia_breadcrumbs')) specia_breadcrumbs();?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="clearfix"></div>