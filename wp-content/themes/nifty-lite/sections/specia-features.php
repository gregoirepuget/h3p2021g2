<?php 
	$hide_show_features= get_theme_mod('hide_show_features','on'); 
	$features_title= get_theme_mod('features_title'); 
	$features_description= get_theme_mod('features_description'); 
	$features_background_setting= get_theme_mod('features_background_setting'); 
	$features_background_position= get_theme_mod('features_background_position','fixed'); 	
	if($hide_show_features == 'on') {
?>
<?php
	if($features_background_setting !== '') {
?>
<section class="features-version-one" style="background: url('<?php echo esc_url($features_background_setting); ?>') no-repeat <?php echo esc_attr($features_background_position); ?> 0 0 / cover rgba(0, 0, 0, 0);">

<?php	
} else {
?>
<section class="features-version-one" style="background: url('<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/features.jpg') no-repeat fixed 0 0 / cover rgba(0, 0, 0, 0);">

<?php
}
?>
    <div class="features-overlay">
        <div class="container">
            
            <div class="row text-center padding-top-60 padding-bottom-30">
                <div class="col-sm-12">
					<?php if ($features_title)  : ?>
						<h2 class="section-heading wow zoomIn"><?php echo wp_filter_post_kses($features_title); ?></span></h2>
					<?php endif; ?>
					
					<?php if ($features_description)  : ?>
						<p><?php echo esc_attr($features_description); ?></p>
					<?php endif; ?>
                </div>
            </div>
			
			<?php 
				if( is_active_sidebar('specia_feature_widget') ) :
					echo '<div class="row padding-bottom-30">';
						dynamic_sidebar( 'specia_feature_widget' );
					echo '</div>';
				endif;
			?>
		
		</div>
    </div>
</section>
<div class="clearfix"></div>
<?php } ?>