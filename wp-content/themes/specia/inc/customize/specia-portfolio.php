<?php
function specia_portfolio_setting( $wp_customize ) {
	
	/*=========================================
	Portfolio Section Panel
	=========================================*/
	$wp_customize->add_panel( 
		'portfolio_panel', 
		array(
			'priority'      => 128,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Portfolio Section', 'specia'),
		) 
	);
	
	// Portfolio Settings Section // 
	$wp_customize->add_section(
        'portfolio_setting',
        array(
        	'priority'      => 1,
            'title' 		=> __('Settings','specia'),
			'panel'  		=> 'portfolio_panel',
		)
    );
	
	$wp_customize->add_setting( 
		'hide_show_portfolio' , 
			array(
			'default' => 'on',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_select',
		) 
	);
	
	$wp_customize->add_control(
	'hide_show_portfolio' , 
		array(
			'label'          => __( 'Hide / Show Section', 'specia' ),
			'section'        => 'portfolio_setting',
			'type'           => 'radio',
			'choices'        => 
			array(
				'on' => __( 'Show', 'specia' ),
				'off' => __( 'Hide', 'specia' )
			) 
		) 
	);
	
	// Portfolio Header Section // 
	$wp_customize->add_section(
        'portfolio_header',
        array(
        	'priority'      => 2,
            'title' 		=> __('Header','specia'),
			'panel'  		=> 'portfolio_panel',
		)
    );
	
	// Portfolio Title // 
	$wp_customize->add_setting(
    	'portfolio_title',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_html',
		)
	);	
	
	$wp_customize->add_control( 
		'portfolio_title',
		array(
		    'label'   => __('Title','specia'),
		    'section' => 'portfolio_header',
			'settings' => 'portfolio_title',
			'type'           => 'text',
		)  
	);
	
	// Service Description // 
	$wp_customize->add_setting(
    	'portfolio_description',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_text',
		)
	);	
	
	$wp_customize->add_control( 
		'portfolio_description',
		array(
		    'label'   => __('Description','specia'),
		    'section' => 'portfolio_header',
			'settings' => 'portfolio_description',
			'type'           => 'textarea',
		)  
	);
	
	// Portfolio Header Section // 
	$wp_customize->add_section(
        'portfolio_content',
        array(
        	'priority'      => 3,
            'title' 		=> __('Content','specia'),
			'panel'  		=> 'portfolio_panel',
		)
    );
	
	// Portfolio 1 //
	$wp_customize->add_setting(
	'portfolio-page1',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);
		
	$wp_customize->add_control(
	'portfolio-page1',
		array(
			'type'	=> 'dropdown-pages',
			'allow_addition' => true,
			'label'	=> __('Select Page','specia'),
			'section'	=> 'portfolio_content',
			'settings'   	 => 'portfolio-page1',
		)
	);	
	
	// Portfolio 2 //
	$wp_customize->add_setting(
	'portfolio-page2',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);
		
	$wp_customize->add_control(
	'portfolio-page2',
		array(
			'type'	=> 'dropdown-pages',
			'allow_addition' => true,
			'label'	=> __('Select Page','specia'),
			'section'	=> 'portfolio_content',
			'settings'   	 => 'portfolio-page2',
		)
	);	
	
	// Portfolio 3 //
	$wp_customize->add_setting(
	'portfolio-page3',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);
		
	$wp_customize->add_control(
	'portfolio-page3',
		array(
			'type'	=> 'dropdown-pages',
			'allow_addition' => true,
			'label'	=> __('Select Page','specia'),
			'section'	=> 'portfolio_content',
			'settings'  => 'portfolio-page3',
		)
	);	
	
}

add_action( 'customize_register', 'specia_portfolio_setting' );
?>