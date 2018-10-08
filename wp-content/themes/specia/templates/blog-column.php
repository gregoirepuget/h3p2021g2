<?php
/**
Template Name: Blog Masonry
**/

get_header();
get_template_part('sections/specia','breadcrumb'); ?>

<!-- Blog & Sidebar Section -->
<section class="page-wrapper">
	<div class="container">
		<div class="row padding-top-60 padding-bottom-60">
			
			<!--Blog Detail-->
			<div class="col-md-12 col-sm-12 masonry" >
					
				<?php 
				$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
				$args = array( 'post_type' => 'post','paged'=>$paged );	
				$loop = new WP_Query( $args );
				?>
				
				<?php if( $loop->have_posts() ): ?>
				
					<?php while( $loop->have_posts() ): $loop->the_post(); ?>
					
					<div class="masonry-column wow pulse">
						<?php get_template_part('template-parts/content','page'); ?>
					</div>
					
					<?php endwhile; ?>
					
				<?php 
					wp_reset_postdata(); 
					endif; 
				?>
				
			</div>
			<!--/End of Blog Detail-->
			
		</div>	
	</div>
</section>
<!-- End of Blog & Sidebar Section -->
 
<div class="clearfix"></div>

<?php get_footer(); ?>
