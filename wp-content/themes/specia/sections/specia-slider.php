<?php 
	$hide_show_slider= get_theme_mod('hide_show_slider','on');
	if( $hide_show_slider == 'on' ): 
?>

<?php 
	for($slide =1; $slide<4; $slide++) 
	{
		if( get_theme_mod('slider-page'.$slide)) 
		{
			$slidequery = new WP_query('page_id='.get_theme_mod('slider-page'.$slide,true));
			while( $slidequery->have_posts() ) 
			{ 
				$slidequery->the_post();
				$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
				$img_arr[] = $image;
				$id_arr[] = $post->ID;
			}    
		}
	}
?>

<?php if(!empty($id_arr))
{ ?>
	<section class="slider-version">

		<div class="slider-version-one">
			
			<?php 
				$i=1;
				foreach($id_arr as $id)
				{ 
					$title	= get_the_title( $id ); 
					$post	= get_post($id); 
					
					$content = $post->post_content;
					$content = apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]>', $content);
			?>  
			
			<div class="item">
			
				<figure>
					<?php $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
					if( !empty($image) ) { ?>
							<img src="<?php echo esc_url( $image ); ?>" alt="<?php the_title_attribute();?>" >
						<?php } ?>
				</figure>

				<div class="specia-slider">
					<div class="container inner-table">
						<div class="inner-table-cell">
							<div class="caption verticle-center text-left wow zoomIn">
								<h1 class="wow fadeInDown animated" data-wow-delay="0.4s"><?php echo wp_filter_post_kses($title); ?></span></h1>
								<?php echo $content; ?>
								<?php if( get_post_meta(get_the_ID(),'slidebutton', true ) ): ?>
								<a href="<?php echo esc_url( get_post_meta( get_the_ID(),'slidebutton', true) ); ?>" class="specia-btn-1">
									<?php echo esc_html_e( 'Read More','specia' ); ?>  
								</a>
								<?php
									endif;
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		
			<?php $i++; } ?>  
			
		</div>
	</section>

	<div class="clearfix"></div>

<?php } wp_reset_postdata(); endif; ?>