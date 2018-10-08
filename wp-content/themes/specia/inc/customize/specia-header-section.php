<?php
function specia_header_setting( $wp_customize ) {

	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'header_section', 
		array(
			'priority'      => 127,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Header Section', 'specia'),
		) 
	);
	
	/*=========================================
	Header Settings Section
	=========================================*/
	// Header Settings Section // 
	$wp_customize->add_section(
        'header_setting',
        array(
        	'priority'      => 1,
            'title' 		=> __('Social Media','specia'),
			'panel'  		=> 'header_section',
		)
    );
	
	// Social Icons Hide/Show Setting // 
	$wp_customize->add_setting( 
		'hide_show_social' , 
			array(
			'default' => 'on',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_select',
		) 
	);

	$wp_customize->add_control(
	'hide_show_social' , 
		array(
			'label'          => __( 'Hide / Show Section', 'specia' ),
			'section'        => 'header_setting',
			'settings' 		 => 'hide_show_social',
			'type'           => 'radio',
			'choices'        => 
			array(
				'on' => __( 'Show', 'specia' ),
				'off' => __( 'Hide', 'specia' )
			)
		) 
	);
	
	
	// Social Icon Link One // 
	$wp_customize->add_setting(
    	'facebook_link',
    	array(
	        'default'			=> '',
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'facebook_link',
		array(
		    'label'   		=> __('Facebook','specia'),
		    'section' 		=> 'header_setting',
			'settings' 		 => 'facebook_link',
		)  
	);


	// Social Icon Link Two // 
	$wp_customize->add_setting(
    	'linkedin_link',
    	array(
	        'default'			=> '',
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'linkedin_link',
		array(
		    'label'   		=> __('LinkedIn','specia'),
		    'section' 		=> 'header_setting',
			'settings' 		 => 'linkedin_link',
		)  
	);


	// Social Icon Link Three // 
	$wp_customize->add_setting(
    	'twitter_link',
    	array(
	        'default'			=> '',
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'twitter_link',
		array(
		    'label'   		=> __('Twitter','specia'),
		    'section' 		=> 'header_setting',
			'settings' 		 => 'twitter_link',
		)  
	);

	// Social Icon Link Four // 
	$wp_customize->add_setting(
    	'googleplus_link',
    	array(
	        'default'			=> '',
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'googleplus_link',
		array(
		    'label'   		=> __('Google Plus','specia'),
		    'section' 		=> 'header_setting',
			'settings' 		 => 'googleplus_link',
		)  
	);

	// Social Icon Link Five // 
	$wp_customize->add_setting(
    	'instagram_link',
    	array(
	        'default'			=> '',
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'instagram_link',
		array(
		    'label'   		=> __('Instagram','specia'),
		    'section' 		=> 'header_setting',
			'settings' 		 => 'instagram_link',
		)  
	);

	// Social Icon Link Six // 
	$wp_customize->add_setting(
    	'dribble_link',
    	array(
	        'default'			=> '',
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'dribble_link',
		array(
		    'label'   		=> __('Dribbble','specia'),
		    'section' 		=> 'header_setting',
			'settings' 		 => 'dribble_link',
		)  
	);

	// Social Icon Link Seven // 
	$wp_customize->add_setting(
    	'github_link',
    	array(
	        'default'			=> '',
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'github_link',
		array(
		    'label'   		=> __('GitHub','specia'),
		    'section' 		=> 'header_setting',
			'settings' 		 => 'github_link',
		)  
	);

	// Social Icon Link Eight // 
	$wp_customize->add_setting(
    	'bitbucket_link',
    	array(
			'default'			=> '',
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'bitbucket_link',
		array(
		    'label'   		=> __('Bitbucket','specia'),
		    'section' 		=> 'header_setting',
			'settings' 		 => 'bitbucket_link',
		)  
	);

	// Social Icon Link Nine // 
	$wp_customize->add_setting(
    	'skype_link',
    	array(
	        'default'			=> '',
			'sanitize_callback' => 'specia_sanitize_text',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'skype_link',
		array(
		    'label'   		=> __('Skype','specia'),
		    'section' 		=> 'header_setting',
			'settings' 		 => 'skype_link',
			'description'   => __( 'Username', 'specia' ),
		)  
	);

	// Social Icon Link Ten // 
	$wp_customize->add_setting(
    	'skype_action_link',
    	array(
	        'default'			=> '',
			'sanitize_callback' => 'specia_sanitize_text',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'skype_action_link',
		array(
		    'label'   		=> __('Skype Action','specia'),
		    'section' 		=> 'header_setting',
			'settings' 		 => 'skype_action_link',
			'description'   => __( 'Enter your Skype action, for e.g: skype:echo123?call (call, chat, voicemail, sendfile, userinfo, add)', 'specia' ),
		)  
	);

	// Social Icon Link Eleven // 
	$wp_customize->add_setting(
    	'email_link',
    	array(
	        'default'			=> '',
			'sanitize_callback' => 'sanitize_email',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'email_link',
		array(
		    'label'   		=> __('Email','specia'),
		    'section' 		=> 'header_setting',
			'settings' 		 => 'email_link',
		)  
	);
	
	// Social Icon Link Twlve // 
	$wp_customize->add_setting(
    	'vk_link',
    	array(
	        'default'			=> '',
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'vk_link',
		array(
		    'label'   		=> __('VKontakte','specia'),
		    'section' 		=> 'header_setting',
			'settings' 		 => 'vk_link',
		)  
	);
	
	// Social Icon Link Thirteen // 
	$wp_customize->add_setting(
    	'pinterest_link',
    	array(
	        'default'			=> '',
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'pinterest_link',
		array(
		    'label'   		=> __('Pinterest','specia'),
		    'section' 		=> 'header_setting',
			'settings' 		 => 'pinterest_link',
		)  
	);

	/*=========================================
	Header Contact Settings Section
	=========================================*/
	// Header Contact Setting Section // 
	$wp_customize->add_section(
        'header_contact',
        array(
        	'priority'      => 2,
            'title' 		=> __('Header Contact Info','specia'),
            'description' 	=>'',
			'panel'  		=> 'header_section',
		)
    );
	
	// Header Contact Indo Hide/Show Setting // 
	$wp_customize->add_setting( 
		'hide_show_contact_infos' , 
			array(
			'default' => 'on',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_select',
		) 
	);

	$wp_customize->add_control(
	'hide_show_contact_infos' , 
		array(
			'label'          => __( 'Hide / Show Section', 'specia' ),
			'section'        => 'header_contact',
			'settings' 		 => 'hide_show_contact_infos',
			'type'           => 'radio',
			'choices'        => 
			array(
				'on' => __( 'Show', 'specia' ),
				'off' => __( 'Hide', 'specia' )
			)
		) 
	);
	
	// Header Email Setting // 
	$wp_customize->add_setting(
    	'header_email',
    	array(
	        'default'			=> '',
			'sanitize_callback' => 'sanitize_email',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'header_email',
		array(
		    'label'   => __('Email','specia'),
		    'section' => 'header_contact',
			'settings'=> 'header_email',
			'type' => 'text'
		)  
	);

	// Header Contact Number Setting // 
	$wp_customize->add_setting(
    	'header_contact_num',
    	array(
	        'default'			=> '',
			'sanitize_callback' => 'specia_sanitize_text',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( 
		'header_contact_num',
		array(
		    'label'   => __('Contact Number','specia'),
		    'section' => 'header_contact',
			'settings'=> 'header_contact_num',
			'type' => 'text'
		)  
	);

	
	/*=========================================
	Sticky Header Section
	=========================================*/
	$wp_customize->add_section(
        'sticky_header',
        array(
        	'priority'      => 3,
            'title' 		=> __('Sticky Header','specia'),
            'description' 	=>'',
			'panel'  		=> 'header_section',
		)
    );
	
	
	$wp_customize->add_setting( 
		'sticky_header_setting' , 
			array(
			'default' => 'on',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_select',
		) 
	);

	$wp_customize->add_control(
	'sticky_header_setting' , 
		array(
			'label'          => __( 'Sticky Header', 'specia' ),
			'section'        => 'sticky_header',
			'settings'		 => 'sticky_header_setting',
			'type'           => 'radio',
			'choices'        => 
			array(
				'on' => __( 'Show', 'specia' ),
				'off' => __( 'Hide', 'specia' )
			)
		) 
	);
	
}

add_action( 'customize_register', 'specia_header_setting' );
?>