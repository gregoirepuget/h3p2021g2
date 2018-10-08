<?php
function specia_call_action_setting( $wp_customize ) {

	/*=========================================
	Call Action Section Panel
	=========================================*/
	$wp_customize->add_panel( 
		'call_panel', 
		array(
			'priority'      => 128,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Call To Action Section', 'specia'),
		) 
	);
	
	// Call to Action //
	$wp_customize->add_section(
        'call_action_setting',
        array(
        	'priority'      => 1,
            'title' 		=> __('Settings','specia'),
			'panel'  		=> 'call_panel',
		)
    );
	
	$wp_customize->add_setting( 
		'hide_show_call_actions' , 
			array(
			'default' => 'on',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_select',
		) 
	);
	
	$wp_customize->add_control(
	'hide_show_call_actions' , 
		array(
			'label'          => __( 'Hide / Show Section', 'specia' ),
			'section'        => 'call_action_setting',
			'settings'       => 'hide_show_call_actions',
			'type'           => 'radio',
			'choices'        => 
			array(
				'on' => __( 'Show', 'specia' ),
				'off'=> __( 'Hide', 'specia' )
			)  
		) 
	);
	
	// Call Action Settings Section // 
	$wp_customize->add_section(
        'call_action_content',
        array(
        	'priority'      => 2,
            'title' 		=> __('Content','specia'),
			'panel'  		=> 'call_panel',
		)
    );
	
	// Call Action Text// 
	
	$wp_customize->add_setting(
	'call_action_page',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);
		
	$wp_customize->add_control(
	'call_action_page',
		array(
			'type'	=> 'dropdown-pages',
			'allow_addition' => true,
			'label'	=> __('Select Page','specia'),
			'section'	=> 'call_action_content',
			'settings'  => 'call_action_page',
		)
	);
	
	// Call Button Label // 
	$wp_customize->add_setting(
    	'call_action_button_label',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_text',
		)
	);	
	
	$wp_customize->add_control( 
		'call_action_button_label',
		array(
		    'label'   => __('Button Text','specia'),
		    'section' => 'call_action_content',
			'settings'       => 'call_action_button_label',
			'type'           => 'text',
		)  
	);
	
	// Call Button link // 
	$wp_customize->add_setting(
    	'call_action_button_link',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_url',
		)
	);	
	
	$wp_customize->add_control( 
		'call_action_button_link',
		array(
		    'label'   => __('Button Link','specia'),
		    'section' => 'call_action_content',
			'settings'       => 'call_action_button_link',
			'type'           => 'text',
		)  
	);
	
	
	$wp_customize->add_setting(
		'call_action_button_target'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'call_action_button_target',
			array(
				'type' => 'checkbox',
				'label' => __('Open link in a new tab','specia'),
				'section' => 'call_action_content',
				'settings' => 'call_action_button_target',
			)
	);
	
}

add_action( 'customize_register', 'specia_call_action_setting' );
?>