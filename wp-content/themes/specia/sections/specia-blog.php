<?php 
	$hide_show_blog= get_theme_mod('hide_show_blog','on'); 
	$blog_title= get_theme_mod('blog_title'); 
	$blog_description= get_theme_mod('blog_description'); 
	$blog_display_num= get_theme_mod('blog_display_num','3');
	
	if($hide_show_blog == 'on') :
		
?>
<section class="latest-blog">
    <div class="container">
        <div class="row text-center padding-top-60 padding-bottom-30">
            <div class="col-sm-12">
                <?php if ($blog_title) : ?>
					<h2 class="section-heading wow zoomIn"><?php echo wp_filter_post_kses($blog_title); ?></h2>
				<?php endif; ?>
				
				 <?php if ($blog_description) : ?>
					<p><?php echo esc_attr($blog_description); ?></p>
				<?php endif; ?>
            </div>
        </div>

        <div class="row blog-version-1 padding-bottom-60">
            <?php 	
				$args = array( 'post_type' => 'post','posts_per_page' => $blog_display_num,'post__not_in'=>get_option("sticky_posts")) ; 	
				query_posts( $args );
				if(query_posts( $args ))
				{	
				while(have_posts()):the_post(); ?>
				 <div class="col-md-4 col-sm-6 wow bounceIn">
					
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php if ( has_post_thumbnail() ) { ?>
						<div class="post_date">
							<span class="date"><?php echo get_the_date('j'); ?></span>
							<h6><?php echo get_the_date('M'); ?>, <?php echo get_the_date('Y'); ?></h6>
						</div>
						<?php } ?>
						<a  href="<?php the_permalink(); ?>" class="post-thumbnail" ><?php the_post_thumbnail(); ?></a>

						<footer class="entry-footer">
							<span class="byline">
								<span class="author vcard">
									<a class="url fn n" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>"><i class="fa fa-user"></i>  <?php the_author(); ?></a>
								</span>
							</span>

							<?php   $cat_list = get_the_category_list();
								if(!empty($cat_list)) { ?>
							<span class="cat-links">
								<a href="<?php the_permalink(); ?>"><i class="fa fa-folder-open"></i> <?php the_category(', '); ?></a>
							</span>
							<?php } ?>

						</footer><!-- .entry-footer -->

						<header class="entry-header">
							<?php     
								if ( is_single() ) :
								
								the_title('<h3 class="entry-title">', '</h3>' );
								
								else:
								
								the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
								
								endif; 
							?> 
						</header><!-- .entry-header -->

						<div class="entry-content">
						   <?php 
								the_content( 
									sprintf( 
										__( 'Read More', 'specia' ), 
										'<span class="screen-reader-text">  '.get_the_title().'</span>' 
									) 
								);
							?>
						</div><!-- .entry-content -->

					</article>
				 </div>
			 
			<?php 
				endwhile; 
				}
			?>
		</div>
    </div>
</section>
<?php endif; ?>

<div class="clearfix"></div>