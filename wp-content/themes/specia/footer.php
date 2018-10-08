
<!--======================================
    Footer Section
========================================-->
<?php if ( is_active_sidebar( 'footer-widget-area' ) ) { ?>
<footer class="footer-sidebar" role="contentinfo">     
	<div class="background-overlay">
		<div class="container">
			<div class="row padding-top-60 padding-bottom-60">
				<?php  dynamic_sidebar( 'footer-widget-area' ); } ?>
			</div>
		</div>
	</div>
</footer>

<div class="clearfix"></div>

<!--======================================
    Footer Copyright
========================================-->

<section class="footer-copyright">
    <div class="container">
        <div class="row padding-top-20 padding-bottom-10 ">
            <div class="col-md-6 text-left">
				<?php 
					$copyright_content= get_theme_mod('copyright_content',__('Your Copyright Text','specia')); 
					$hide_show_copyright= get_theme_mod('hide_show_copyright','on'); 

				?>
				<?php if($hide_show_copyright == 'on') : ?>
					<p><?php echo $copyright_content; ?>
				<?php endif; ?>
                </p>
            </div>

            <div class="col-md-6">
				<?php 
					$hide_show_payment = get_theme_mod('hide_show_payment','on');
					$icon_one= get_theme_mod('icon_one',''); 
					$icon_two= get_theme_mod('icon_two',''); 
					$icon_three= get_theme_mod('icon_three',''); 
					$icon_four= get_theme_mod('icon_four',''); 
					$icon_five= get_theme_mod('icon_five',''); 
					
				?>
				
				<?php if($hide_show_payment == 'on') { ?>
					<ul class="payment-icon">
						<?php if($icon_one) { ?> 
							<li><a href="<?php echo esc_url($icon_one); ?>"><i class="fa fa-cc-paypal"></i></a></li>
						<?php } ?>
						
						<?php if($icon_two) { ?> 
							<li><a href="<?php echo esc_url($icon_two); ?>"><i class="fa fa-cc-visa"></i></a></li>
						<?php } ?>
							
						<?php if($icon_three) { ?> 
							<li><a href="<?php echo esc_url($icon_three); ?>"><i class="fa fa-cc-mastercard"></i></a></li>
						<?php } ?>
							
						<?php if($icon_four) { ?> 
							<li><a href="<?php echo esc_url($icon_four); ?>"><i class="fa fa-cc-amex"></i></a></li>
						<?php } ?>
						
						<?php if($icon_five) { ?> 
							<li><a href="<?php echo esc_url($icon_five); ?>"><i class="fa fa-cc-stripe"></i></a></li>
						<?php } ?>
					</ul>
				<?php } ?>
            </div>
        </div>
    </div>
</section>

<!--======================================
    Top Scroller
========================================-->
<a href="#" class="top-scroll"><i class="fa fa-hand-o-up"></i></a> 
</div>
<?php wp_footer(); ?>
</body>
</html>
