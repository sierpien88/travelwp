<?php

function homepage_customizer($wp_customize) {

	 $wp_customize->add_panel( 'homempage_menu', array(
        'priority'       => 10,
        'capability'     => 'edit_theme_options',
        'title'          => __('Homepage Options', 'travel'),
        'description'    => __('Homepage options', 'travel'),
    ) );
	$wp_customize->add_section('sec_blog', array(
		'title' => 'Blog section',
		'panel'=> 'homempage_menu',
	));

// ****************************************
// Add blog section to admin appearance customize screen
// ****************************************	

// Select if section is display or not
	$wp_customize->add_setting('set_callout_blog', array(
		'default' => 'No'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_callout_blog', array(
			'label' => __('Display this section?', 'travel'),
			'section' => 'sec_blog',
			'settings' => 'set_callout_blog',
			'type' => 'select',
			'choices' => array('No' => 'No', 'Yes' => 'Yes')
		)));


// Headline text
	$wp_customize->add_setting('set_headline_blog', array(
		'default' => 'My lovely trips'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_headline_blog', array(
			'label' => __('Headline', 'travel'),
			'section' => 'sec_blog',
			'settings' => 'set_headline_blog'
		)));


// ****************************************
// Add quote section to admin appearance customize screen
// ****************************************


	$wp_customize->add_section('sec_quote', array(
		'title' => 'Quote section',
		'panel'=> 'homempage_menu',
		'priority'       => 10
	));
// Select if section is display or not
	$wp_customize->add_setting('set_callout', array(
		'default' => 'No'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_callout', array(
			'label' => __('Display this section?', 'travel'),
			'section' => 'sec_quote',
			'settings' => 'set_callout',
			'type' => 'select',
			'choices' => array('No' => 'No', 'Yes' => 'Yes')
		)));
// Headline text
	$wp_customize->add_setting('set_headline', array(
		'default' => 'Example Headline Text!'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_headline', array(
			'label' => __('Headline', 'travel'),
			'section' => 'sec_quote',
			'settings' => 'set_headline'
		)));

// Headline text color
	$wp_customize->add_setting('set_link_color', array(
		'default' => '#000'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'ctrl_link_color', array(
		'label' => __('headline color', 'travel'),
		'section' => 'sec_quote',
		'settings' => 'set_link_color'

	)));

// Paragraph text
	$wp_customize->add_setting('set_text', array(
		'default' => 'Example paragraph text.'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_text', array(
			'label' => __('Text', 'travel'),
			'section' => 'sec_quote',
			'settings' => 'set_text',
			'type' => 'textarea'
		)));

//Text color
	$wp_customize->add_setting('set_text_color', array(
		'default' => '#000'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'ctrl_text_color', array(
		'label' => __('Text color', 'travel'),
		'section' => 'sec_quote',
		'settings' => 'set_text_color'

	)));

// Link text
	$wp_customize->add_setting('set_link',array(
		'default' => 'http://stepnikagata.pl/'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_link', array(
			'label' => __('Put your link', 'travel'),
			'section' => 'sec_quote',
			'settings' => 'set_link',
			'type' => 'text'
		)));


// Image	
	$wp_customize->add_setting('set_image');

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_image', array(
			'label' => __('Image', 'travel'),
			'section' => 'sec_quote',
			'settings' => 'set_image',
			'flex_width'  => true,
        	'flex_height' => true,
		)));

// ****************************************
// Add about me section to admin appearance customize screen
// ****************************************

	$wp_customize->add_section('sec_about', array(
		'title' => 'About me',
		'panel'=> 'homempage_menu'
	));

	// Select if section is display or not
	$wp_customize->add_setting('set_callout_about', array(
		'default' => 'No'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_callout_about', array(
			'label' => __('Display this section?', 'travel'),
			'section' => 'sec_about',
			'settings' => 'set_callout_about',
			'type' => 'select',
			'choices' => array('No' => 'No', 'Yes' => 'Yes')
		)));

	// Person mage	
	$wp_customize->add_setting('set_image_about');

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_image_about', array(
			'label' => __('Person image (150x150)', 'travel'),
			'section' => 'sec_about',
			'settings' => 'set_image_about'
		)));


	// Paragraph text
	$wp_customize->add_setting('set_text_about', array(
		'default' => 'Caramels lemon drops pie. Donut gingerbread lollipop. Tart marzipan icing candy canes. Biscuit cheesecake sugar plum sugar plum toffee caramels brownie brownie powder. Chocolate croissant donut gummies liquorice.'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ctrl_text_about', array(
			'label' => __('Text', 'travel'),
			'section' => 'sec_about',
			'settings' => 'set_text_about',
			'type' => 'textarea'
		)));

	// Person mage	
	$wp_customize->add_setting('set_image_about_bg');

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_image_abou_bg', array(
			'label' => __('Image background', 'travel'),
			'section' => 'sec_about',
			'settings' => 'set_image_about_bg',
			'width' => '800',
			'height' => '400'
		)));

// ****************************************
//  Add copywrite section to admin appearance customize screen
// ****************************************

	// Copyright
	$wp_customize-> add_section( 'sec_copyright', array(
		'title' => 'Copyright',
		'description' => 'Please, type here your copyright',
		'panel'=> 'homempage_menu',
	) ); 

	$wp_customize-> add_setting( 'set_copyright', array(
		'type' => 'theme_mod',
		'default' => 'Copyright X - All Rights Reserved',
		'sanitize_callback' => 'esc_attr'
	) );

	$wp_customize-> add_control( 'ctrl_copyright', array(
		'label' => 'Copyright Information',
		'description' => 'Please, type your copyright here.',
		'section' => 'sec_copyright',
		'settings' => 'set_copyright',
		'type' => 'text'

	) );

}

add_action('customize_register', 'homepage_customizer');
