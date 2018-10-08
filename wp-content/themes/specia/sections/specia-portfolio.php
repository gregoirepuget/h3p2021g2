<?php 
	$hide_show_portfolio= get_theme_mod('hide_show_portfolio','on'); 
	$portfolio_title= get_theme_mod('portfolio_title'); 
	$portfolio_description= get_theme_mod('portfolio_description'); 
	
	if($hide_show_portfolio == 'on') :
?>
<?php 
	for($portfolio =1; $portfolio<4; $portfolio++) 
	{
		if( get_theme_mod('portfolio-page'.$portfolio)) 
		{
			$portfolio_query = new WP_query('page_id='.get_theme_mod('portfolio-page'.$portfolio,true));
			while( $portfolio_query->have_posts() ) 
			{ 
				$portfolio_query->the_post();
				$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
				$img_arr[] = $image;
				$id_arr[] = $post->ID;
			}    
		}
	}
?>

<?php if(!empty($id_arr))
{ ?>
	<section class="portfolio-version">
		<div class="container">
			<div class="portfolio-version-one">
				
				<div class="row text-center padding-top-60 padding-bottom-30">
					<div class="col-sm-12">
						<?php if ($portfolio_title) : ?>
							<h2 class="section-heading wow zoomIn"><?php echo wp_filter_post_kses($portfolio_title); ?></span></h2>
						<?php endif; ?>
						
						<?php if ($portfolio_description) : ?>
							<p><?php echo esc_attr($portfolio_description); ?></p>
						<?php endif; ?>
					</div>
				</div>

				<div class="row padding-bottom-60">
					
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
					
					<div class="col-md-4 col-sm-6">
						<div class="grid wow bounceIn">
							<figure class="effect-sadie">
								<?php 
									if ( has_post_thumbnail() ) { the_post_thumbnail(); }  
								?>
								
								<figcaption>
									<div>
										<h2><?php echo $title; ?></h2>
										<p><?php echo $content; ?></p>
									</div>
									<a href="<?php echo esc_url( get_permalink() ); ?>"></a>
								</figcaption>           
							</figure>
						</div>
					</div>
					
					<?php $i++; }  ?>
					
				</div>
			</div>
		</div>
	</section>
	<div class="clearfix"></div>
<?php } wp_reset_postdata(); endif; ?>
