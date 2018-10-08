<header role="banner">
	<nav class='navbar navbar-default nav-nifty <?php echo specia_sticky_menu(); ?>' role='navigation'>
		
		<div class="container nifty-border">

			<!-- Mobile Display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only"><?php _e('Toggle navigation','nifty-lite');?></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- /Mobile Display -->

			<!-- Menu Toggle -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<div class="container">
					<div class="row">
						<div class="col-md-7 col-xs-12 padding-0">
							<?php
								
								$button_label= get_theme_mod('button_label','Book Now');
								$button_url= get_theme_mod('button_url','');
								$button_target= get_theme_mod('button_target');
								$button_icon= get_theme_mod('button_icon','fa-user'); 			
								$header_cart= get_theme_mod('header_cart','on');
								$header_cart= get_theme_mod('header_cart');
								
								$extra_html  = '<ul>';
								
								if($header_cart == 'on') {
								$extra_html .= "<li><div class='nifty-cart'>";
								
								if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
									$count = WC()->cart->cart_contents_count;
									$cart_url = wc_get_cart_url();
									
									$extra_html .= "<a href='$cart_url' class='cart-icon'>"."<i class='fa fa-cart-arrow-down'></i>";
									
									if ( $count > 0 ) {
										
										$extra_html .= "<span class='count'>$count</span>";
									
									}
									
									else {
										
										$extra_html .= "<span class='count'>0</span>";
									}
									
									$extra_html .= "</a>";
								}
								
								$extra_html .= "</div></li>";
								
								}
								
								if(($button_target)== 1){ 
									$button_target= "target='_blank'"; 
								}
								
								$extra_html .= "<li><div class='nifty_button'><a href='$button_url' $button_target class='nifty-button'>"."<i class='fa $button_icon'></i>"." "."$button_label"."</a></div></li>";
								$extra_html .= '</ul>';
									
								wp_nav_menu( 
									array(  
										'theme_location' => 'primary_menu',
										'container'  => '',
										'menu_class' => 'nav navbar-nav',
										'fallback_cb' => 'specia_fallback_page_menu',
										'walker' => new specia_nav_walker()
										 ) 
									);
							?>
						</div>
						
						<div class="col-md-2 col-xs-12 header-top-info-8">
						<!-- Start Social Media Icons -->
						<?php 
							$hide_show_social= get_theme_mod('hide_show_social','off'); 
							$facebook_link= get_theme_mod('facebook_link',''); 
							$linkedin_link= get_theme_mod('linkedin_link',''); 
							$twitter_link= get_theme_mod('twitter_link',''); 
							$googleplus_link= get_theme_mod('googleplus_link',''); 
							$instagram_link= get_theme_mod('instagram_link',''); 
							$dribble_link= get_theme_mod('dribble_link',''); 
							$github_link= get_theme_mod('github_link',''); 
							$bitbucket_link= get_theme_mod('bitbucket_link',''); 
							$email_link= get_theme_mod('email_link',''); 
							$skype_link= get_theme_mod('skype_link',''); 
							$skype_action_link= get_theme_mod('skype_action_link','');
							$vk_link= get_theme_mod('vk_link','');
							$pinterest_link= get_theme_mod('pinterest_link','');	
							$social_target = get_theme_mod('social_target');
						?>
						
						
						<?php if($hide_show_social == 'on') { ?>
							<ul class="social pull-left">
								<?php if($facebook_link) { ?> 
									<li><a href="<?php echo esc_url($facebook_link); ?>" <?php if(($social_target)== 1){ echo "target='_blank'"; } ?>><i class="fa fa-facebook"></i></a></li>
								<?php } ?>
								
								<?php if($linkedin_link) { ?> 
								<li><a href="<?php echo esc_url($linkedin_link); ?>" <?php if(($social_target)== 1){ echo "target='_blank'"; } ?>><i class="fa fa-linkedin"></i></a></li>
								<?php } ?>
								
								<?php if($twitter_link) { ?> 
								<li><a href="<?php echo esc_url($twitter_link); ?>" <?php if(($social_target)== 1){ echo "target='_blank'"; } ?>><i class="fa fa-twitter"></i></a></li>
								<?php } ?>
								
								<?php if($googleplus_link) { ?> 
								<li><a href="<?php echo esc_url($googleplus_link); ?>" <?php if(($social_target)== 1){ echo "target='_blank'"; } ?>><i class="fa fa-google-plus"></i></a></li>
								<?php } ?>
								
								<?php if($instagram_link) { ?> 
								<li><a href="<?php echo esc_url($instagram_link); ?>" <?php if(($social_target)== 1){ echo "target='_blank'"; } ?>><i class="fa fa-instagram"></i></a></li>
								<?php } ?>
								
								<?php if($dribble_link) { ?> 
								<li><a href="<?php echo esc_url($dribble_link); ?>" <?php if(($social_target)== 1){ echo "target='_blank'"; } ?>><i class="fa fa-dribbble"></i></a></li>
								<?php } ?>
								
								<?php if($github_link) { ?> 
								<li><a href="<?php echo esc_url($github_link); ?>" <?php if(($social_target)== 1){ echo "target='_blank'"; } ?>><i class="fa fa-github-alt"></i></a></li>
								<?php } ?>
								
								<?php if($bitbucket_link) { ?> 
								<li><a href="<?php echo esc_url($bitbucket_link); ?>" <?php if(($social_target)== 1){ echo "target='_blank'"; } ?>><i class="fa fa-bitbucket"></i></a></li>
								<?php } ?>
								
								<?php if($email_link) { ?> 
								<li><a href="mailto:<?php echo esc_attr($email_link); ?>" <?php if(($social_target)== 1){ echo "target='_blank'"; } ?>><i class="fa fa-envelope-o"></i></a></li>
								<?php } ?>
								
								<?php if($skype_link) { ?> 
								<li><a href="<?php echo esc_attr($skype_link); ?>?<?php echo esc_attr($skype_action_link); ?>"><i class="fa fa-skype"></i></a></li>
								<?php } ?>
								
								<?php if($vk_link) { ?> 
									<li><a href="<?php echo esc_url($vk_link); ?>" <?php if(($social_target)== 1){ echo "target='_blank'"; } ?>><i class="fa fa-vk"></i></a></li>
								<?php } ?>
								
								<?php if($pinterest_link) { ?> 
									<li><a href="<?php echo esc_url($pinterest_link); ?>" <?php if(($social_target)== 1){ echo "target='_blank'"; } ?>><i class="fa fa-pinterest-square"></i></a></li>
								<?php } ?>
							</ul>
						<?php } ?>
						<!-- /End Social Media Icons-->
						</div>
						
						<div class="col-md-3 col-xs-12 nifty-button-container">
							<?php echo $extra_html; ?>
						</div>
						
					</div>
			</div>
			<!-- Menu Toggle -->	
		</div>
	</nav>
</header>
<div class="clearfix"></div>