<?php if ( is_active_sidebar( 'woocommerce-1' )  ) : ?>
<!--Sidebar-->
<div class="col-md-4 col-xs-12">
	<div class="woo-sidebar">
	<?php dynamic_sidebar( 'woocommerce-1' ); ?>
	</div>
</div>
<!--/Sidebar-->
<?php endif; ?>