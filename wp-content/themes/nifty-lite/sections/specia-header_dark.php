<?php 					
	$hide_show_social= get_theme_mod('hide_show_social','off'); 
	$hide_show_contact_infos= get_theme_mod('hide_show_contact_infos','off'); 
	
	
?>
<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
	</a>
<?php endif;  ?>	

<section class="header_nifty_dark">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-5 col-xs-12 contact_phone">
				<?php 
					$hide_show_contact_infos= get_theme_mod('hide_show_contact_infos','off'); 
					$header_email= get_theme_mod('header_email',''); 
					$header_contact= get_theme_mod('header_contact_num',''); 
				?>
				<?php if($hide_show_contact_infos == 'on') { ?>
					<!-- Start Contact Info -->
					
						<?php if($header_contact) { ?>
							<div class="info_details">
								<div class="icon"><i class="fa fa-phone-square"></i></div>
								<a href="tell:<?php echo esc_attr($header_contact); ?>"><?php echo $header_contact; ?></a>
							</div>
						<?php } ?>
					
					<!-- /End Contact Info -->
				<?php } ?>
			</div>
			
			<div class="col-md-6 col-sm-7 nifty-logo">
				<a class="navbar-brand" href="<?php echo home_url( '/' ); ?>" class="brand">
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
			</div>
			
			

            <div class="col-md-3 col-sm-7 contact_email">
				<?php 
					$hide_show_contact_infos= get_theme_mod('hide_show_contact_infos','off'); 
					$header_email= get_theme_mod('header_email',''); 
					$header_contact= get_theme_mod('header_contact_num',''); 
				?>
				<?php if($hide_show_contact_infos == 'on') { ?>
						<?php if($header_email) { ?> 
							<div class="info_details">
								<div class="icon"><i class="fa fa-envelope"></i></div>
								<a href="mailto:<?php echo esc_attr($header_email); ?>"><?php echo $header_email; ?></a>
							</div>
						<?php } ?>
					<!-- /End Contact Info -->
				<?php } ?>
			</div>
        </div>
    </div>
</section>

<div class="clearfix"></div>