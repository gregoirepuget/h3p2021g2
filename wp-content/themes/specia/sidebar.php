<?php 
if ( ! is_active_sidebar( 'sidebar-primary' ) ) {
	return;
}
?>
<div class="col-md-4 col-xs-12">
	<div class="sidebar" role="complementary">
		<?php dynamic_sidebar('sidebar-primary'); ?>
	</div><!-- #secondary -->
</div>
