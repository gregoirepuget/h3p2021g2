<?php
function specia_service_setting( $wp_customize ) {

	/*=========================================
	Service Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'service_panel', 
		array(
			'priority'      => 128,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Service Section', 'specia'),
		) 
	);
	
	// Service Settings Section // 
	$wp_customize->add_section(
        'service_setting',
        array(
        	'priority'      => 1,
            'title' 		=> __('Settings','specia'),
			'panel'  		=> 'service_panel',
		)
    );
	
	$wp_customize->add_setting( 
		'hide_show_service' , 
			array(
			'default' => 'on',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_select',
		) 
	);
	
	$wp_customize->add_control(
	'hide_show_service' , 
		array(
			'label'          => __( 'Hide / Show Section', 'specia' ),
			'section'        => 'service_setting',
			'settings'   	 => 'hide_show_service',
			'type'           => 'radio',
			'choices'        => 
			array(
				'on' => __( 'Show', 'specia' ),
				'off' => __( 'Hide', 'specia' )
			)
		) 
	);
	
	// Service Header Section // 
	$wp_customize->add_section(
        'service_header',
        array(
        	'priority'      => 2,
            'title' 		=> __('Header','specia'),
			'panel'  		=> 'service_panel',
		)
    );
	
	// Service Title // 
	$wp_customize->add_setting(
    	'service_title',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_html',
		)
	);	
	
	$wp_customize->add_control( 
		'service_title',
		array(
		    'label'   => __('Title','specia'),
		    'section' => 'service_header',
			'settings'   	 => 'service_title',
			'type'           => 'text',
		)  
	);
	
	// Service Description // 
	$wp_customize->add_setting(
    	'service_description',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_text',
		)
	);	
	
	$wp_customize->add_control( 
		'service_description',
		array(
		    'label'   => __('Description','specia'),
		    'section' => 'service_header',
			'settings'   	 => 'service_description',
			'type'           => 'textarea',
		)  
	);
	
	// Service Content Section // 
	$wp_customize->add_section(
        'service_content',
        array(
        	'priority'      => 3,
            'title' 		=> __('Content','specia'),
			'panel'  		=> 'service_panel',
		)
    );
	
	// Service 1 //
	$wp_customize->add_setting(
	'service-page1',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);
		
	$wp_customize->add_control(
	'service-page1',
		array(
			'type'	=> 'dropdown-pages',
			'allow_addition' => true,
			'label'	=> __('Select Page','specia'),
			'section'	=> 'service_content',
			'settings'   	 => 'service-page1',
		)
	);	
	
	// Service 2 //
	$wp_customize->add_setting(
	'service-page2',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);
		
	$wp_customize->add_control(
	'service-page2',
		array(
			'type'	=> 'dropdown-pages',
			'allow_addition' => true,
			'label'	=> __('Select Page','specia'),
			'section'	=> 'service_content',
			'settings'   	 => 'service-page2',
		)
	);	
	
	// Service 3 //
	$wp_customize->add_setting(
	'service-page3',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);
		
	$wp_customize->add_control(
	'service-page3',
		array(
			'type'	=> 'dropdown-pages',
			'allow_addition' => true,
			'label'	=> __('Select Page','specia'),
			'section'	=> 'service_content',
			'settings'   	 => 'service-page3',
		)
	);
	
}

add_action( 'customize_register', 'specia_service_setting' );
?>