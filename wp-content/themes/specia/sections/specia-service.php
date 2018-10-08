<?php 
	$hide_show_service= get_theme_mod('hide_show_service','on'); 
	$service_title= get_theme_mod('service_title'); 
	$service_description= get_theme_mod('service_description');
	
	if($hide_show_service == 'on') :
?>

<?php 
	for($service =1; $service<4; $service++) 
	{
		if( get_theme_mod('service-page'.$service)) 
		{
			$service_query = new WP_query('page_id='.get_theme_mod('service-page'.$service,true));
			while( $service_query->have_posts() ) 
			{ 
				$service_query->the_post();
				$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
				$img_arr[] = $image;
				$id_arr[] = $post->ID;
			}    
		}
	}
?>

<?php if(!empty($id_arr))
{ ?>
	<section class="service-version-one">
		
		<div class="container">
		
			<div class="row text-center padding-top-60 padding-bottom-30">
				<div class="col-sm-12">
				<?php if ($service_title) : ?>
					<h2 class="section-heading wow zoomIn"><?php echo wp_filter_post_kses($service_title); ?></h2>
				<?php endif; ?>
				
				<?php if ($service_description) : ?>
					<p><?php echo esc_html($service_description); ?></p>
				<?php endif; ?>
				</div>
			</div>

			<div class="row text-center padding-bottom-60">
				
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
				<div class="col-md-4 col-sm-4 margin-bottom-30">
					<div class="service-box wow fadeInUp">
						<div class="service-icon-box">
							
							<?php $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
								if( !empty($image) ) { ?>
									<figure>
											<img src="<?php echo esc_url( $image ); ?>" alt="<?php the_title_attribute();?>" >
									</figure>
								<?php } else { ?>
								<?php if( get_post_meta(get_the_ID(),'icons', true ) ): ?>
									<div class="service-icon specia-icon-wrap specia-icon-effect-1 specia-icon-effect-1a">
										<i class="specia-icon fa <?php echo get_post_meta( get_the_ID(),'icons', true); ?>"></i> 
									</div>
							<?php
								endif;
								} 
							?>
							
						</div>
						<div class="service-title"><a href="<?php echo esc_url( get_permalink() ); ?>"> <?php echo esc_html($title); ?> </a></div>
						<div class="service-description"><p> <?php echo $content; ?> </p></div>
					</div>
				</div>
				
				<?php $i++; 
				}  ?>
			</div>
		</div>
	</section>
<div class="clearfix"></div>
<?php } wp_reset_postdata(); endif; ?>

