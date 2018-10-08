<?php
get_header();
get_template_part('sections/specia','breadcrumb'); ?>

<!-- Blog & Sidebar Section -->
<section class="page-wrapper">
	<div class="container">
		<div class="row padding-top-60 padding-bottom-60">
			
			<!--Blog Detail-->
			<div class="<?php specia_post_column(); ?>" >
					
					<?php if( have_posts() ): ?>
					
						<?php while( have_posts() ): the_post(); ?>
						
							<?php get_template_part('template-parts/content','page'); ?>
					
						<?php endwhile; ?>
						
						<?php comments_template( '', true ); // show comments  ?>
						
					<?php else: ?>
						
						<?php get_template_part('template-parts/content','none'); ?>
						
					<?php endif; ?>
			
			</div>
			<!--/End of Blog Detail-->

				<?php get_sidebar(); ?>
		</div>	
	</div>
</section>
<!-- End of Blog & Sidebar Section -->
 
<div class="clearfix"></div>

<?php get_footer(); ?>

