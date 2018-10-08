<?php
get_header();
get_template_part('sections/specia','breadcrumb'); ?>

<!-- Blog & Sidebar Section -->
<section class="page-wrapper">
	<div class="container">
		<div class="row padding-top-60 padding-bottom-60">
			
			<!--Blog Detail-->
			<div class="col-md-<?php echo ( !is_active_sidebar( 'woocommerce-1' ) ? '12' :'8' ); ?> col-md-12">
					
					<?php woocommerce_content(); ?>
			</div>
			<!--/End of Blog Detail-->
			
			
			<?php get_sidebar('woocommerce'); ?>
			
		
		</div>	
	</div>
</section>
<!-- End of Blog & Sidebar Section -->
 
<div class="clearfix"></div>

<?php get_footer(); ?>

