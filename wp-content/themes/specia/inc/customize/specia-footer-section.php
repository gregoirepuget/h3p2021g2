<?php
function specia_footer( $wp_customize ) {

	// Footer Panel // 
	$wp_customize->add_panel( 
		'footer_section', 
		array(
			'priority'      => 131,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Footer Section', 'specia'),
		) 
	);

	// Footer Setting Section // 
	$wp_customize->add_section(
        'footer_copyright',
        array(
            'title' 		=> __('Copyright Content','specia'),
            'description' 	=>'',
			'panel'  		=> 'footer_section',
		)
    );
	

	// Copyright Content Hide/Show Setting // 
	$wp_customize->add_setting( 
		'hide_show_copyright' , 
			array(
			'default' => 'on',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_select',
		) 
	);

	$wp_customize->add_control(
	'hide_show_copyright' , 
		array(
			'label'          => __( 'Copyright Content', 'specia' ),
			'section'        => 'footer_copyright',
			'settings'   	 => 'hide_show_copyright',
			'type'           => 'radio',
			'choices'        => 
			array(
				'on' => __( 'Show', 'specia' ),
				'off' => __( 'Hide', 'specia' )
			)
		) 
	);

	// Copyright Content Setting // 
	$wp_customize->add_setting(
    	'copyright_content',
    	array(
	        'default'			=> __('Your Copyright Text','specia'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_html',
		)
	);	

	$wp_customize->add_control( 
		'copyright_content',
		array(
		    'label'   		=> __('Copyright Content','specia'),
		    'section'		=> 'footer_copyright',
			'settings'   	 => 'copyright_content',
			'type' 			=> 'textarea',
		)  
	);


	/*=========================================
	Footer Payment Icon Section
	=========================================*/
	// Footer Setting Section // 
	$wp_customize->add_section(
        'footer_icon',
        array(
            'title' 		=> __('Payment Icon','specia'),
            'description' 	=>'',
			'panel'  		=> 'footer_section',
		)
    );
	

	// Payment Icon Hide/Show Setting // 
	$wp_customize->add_setting( 
		'hide_show_payment' , 
			array(
				'default' => 'on',
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'specia_sanitize_select',
		) 
	);

	$wp_customize->add_control(
	'hide_show_payment' , 
		array(
			'label'          => __( 'Payment Icon', 'specia' ),
			'section'        => 'footer_icon',
			'settings'   	 => 'hide_show_payment',
			'type'           => 'radio',
			'choices'        => 
			array(
				'on' => __( 'Show', 'specia' ),
				'off' => __( 'Hide', 'specia' )
			) 
		) 
	);

	// Payment Icon One Setting // 
	$wp_customize->add_setting(
    	'icon_one',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_url',
		)
	);	

	$wp_customize->add_control( 
		'icon_one',
		array(
		    'label'   		=> __('PayPal','specia'),
		    'section'		=> 'footer_icon',
			'settings'   	 => 'icon_one',
			'type' 			=> 'text',
		)  
	);


	// Payment Icon Two Setting // 
	$wp_customize->add_setting(
    	'icon_two',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_url',
		)
	);	

	$wp_customize->add_control( 
		'icon_two',
		array(
		    'label'   		=> __('Visa','specia'),
		    'section'		=> 'footer_icon',
			'settings'   	 => 'icon_two',
			'type' 			=> 'text',
		)  
	);

	// Payment Icon Three Setting // 
	$wp_customize->add_setting(
    	'icon_three',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_url',
		)
	);	

	$wp_customize->add_control( 
		'icon_three',
		array(
		    'label'   		=> __('MasterCard','specia'),
		    'section'		=> 'footer_icon',
			'settings'   	 => 'icon_three',
			'type' 			=> 'text',
		)  
	);

	// Payment Icon Four Setting // 
	$wp_customize->add_setting(
    	'icon_four',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_url',
		)
	);	

	$wp_customize->add_control( 
		'icon_four',
		array(
		    'label'   		=> __('AmEx','specia'),
		    'section'		=> 'footer_icon',
			'settings'   	 => 'icon_four',
			'type' 			=> 'text',
		)  
	);

	// Payment Icon Five Setting // 
	$wp_customize->add_setting(
    	'icon_five',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_url',
		)
	);	

	$wp_customize->add_control( 
		'icon_five',
		array(
		    'label'   		=> __('Stripe','specia'),
		    'section'		=> 'footer_icon',
			'settings'   	 => 'icon_five',
			'type' 			=> 'text',
		)  
	);
		
}

add_action( 'customize_register', 'specia_footer' );
?>