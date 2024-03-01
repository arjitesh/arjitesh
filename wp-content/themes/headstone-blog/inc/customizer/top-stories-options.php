<?php

// Top Stories section
$wp_customize->add_section('top_stories_section', array(    
	'title'       => __('Top Stories Options', 'headstone-blog'),
	'panel'       => 'theme_option_panel'    
));

$wp_customize->add_setting('top_stories', 
	array(
		'default' 			=> true,
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'cube_blog_sanitize_checkbox',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control('top_stories', 
	array(		
		'label' 	=> __('Top Stories', 'headstone-blog'),
		'section' 	=> 'top_stories_section',
		'settings'  => 'top_stories',
		'type' 		=> 'checkbox',
	)
);

$wp_customize->add_setting('top_stories_section_title', 
	array(
		'default'           => esc_html__('Top Stories', 'headstone-blog'),
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('top_stories_section_title', 
	array(
		'label'       => __('Section Title', 'headstone-blog'),
		'section'     => 'top_stories_section',   
		'settings'    => 'top_stories_section_title',	
		'type'        => 'text'
	)
);

$wp_customize->add_setting('top_stories_category', 
	array(
		'default' 			=> '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'cube_blog_sanitize_select',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control('top_stories_category', 
	array(		
		'label' 	=> __('Select Categories', 'headstone-blog'),
		'section' 	=> 'top_stories_section',
		'settings'  => 'top_stories_category',
		'type' 		=> 'select',
		'choices' 	=> headstone_blog_get_post_categories(),
	)
);