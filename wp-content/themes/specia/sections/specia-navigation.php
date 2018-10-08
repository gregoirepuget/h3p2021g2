<header role="banner">
	<nav class='navbar navbar-default <?php echo specia_sticky_menu(); ?>' role='navigation'>
		
		<div class="container">

			<!-- Mobile Display -->
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand">
					<?php
						if(has_custom_logo())
						{	
							the_custom_logo();
						}
						else { 
							echo bloginfo('name'); 
						}
					?>
					
					<?php
						$description = get_bloginfo( 'description');
						if ($description) : ?>
							<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
				</a>
				
				
				
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only"><?php echo 'Toggle navigation'; ?></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- /Mobile Display -->

			<!-- Menu Toggle -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

			<?php 
				wp_nav_menu( 
					array(  
						'theme_location' => 'primary_menu',
						'container'  => '',
						'menu_class' => 'nav navbar-nav navbar-right',
						'fallback_cb' => 'specia_fallback_page_menu',
						'walker' => new specia_nav_walker()
						 ) 
					);
			?>
			</div>
			<!-- Menu Toggle -->
			
		</div>
	</nav>
</header>
<div class="clearfix"></div>