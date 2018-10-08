<?php 
	$hide_show_call_actions= get_theme_mod('hide_show_call_actions','on'); 
	$call_action_button_label= get_theme_mod('call_action_button_label');
	$call_action_button_link= get_theme_mod('call_action_button_link');
	$call_action_button_target= get_theme_mod('call_action_button_target');
	if($hide_show_call_actions == 'on') :
?>
<section class="call-to-action wow fadeInDown">
    <div class="background-overlay">
        <div class="container">
            <div class="row padding-top-25 padding-bottom-25">
                
                <div class="col-md-9">
					<?php 
						$aboutusquery1 = new wp_query('page_id='.get_theme_mod('call_action_page',true)); 
						if( $aboutusquery1->have_posts() ) 
						{   while( $aboutusquery1->have_posts() ) { $aboutusquery1->the_post(); 
					?>
                    <h2 class="demo1"> <?php the_title(); ?> <span class="rotate"> <?php the_content(); ?></span> </h2>
					
					<?php } } wp_reset_postdata(); ?>
                </div>
				
				<?php if($call_action_button_label) :?>
                <div class="col-md-3">
                    <a href="<?php echo esc_url($call_action_button_link); ?>" <?php if(($call_action_button_target)== 1){ echo "target='_blank'"; } ?> class="call-btn-1"><?php echo esc_html($call_action_button_label); ?></a>
                </div>
				<?php endif; ?>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<?php endif; ?>
