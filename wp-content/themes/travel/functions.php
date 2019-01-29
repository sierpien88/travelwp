<?php
// Requiring Theme Customizer
require get_template_directory(). '/inc/customizer.php';

// inluding stylesheet and script files
function load_scripts(){
	// Load our main stylesheet.
	
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/burger.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), '4.1.3', 'all' );	
	wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), '4.1.3', true);
	wp_enqueue_style( 'template', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), '4.1.3', 'all' );
	wp_enqueue_script( 'main-javascript', get_template_directory_uri() . '/js/main.js', array( 'jquery','customize-preview' ), '1.0', true );
	wp_enqueue_style( 'travel-style', get_stylesheet_uri(), array(), '1.0', 'all' );
	
	

}

add_action( 'wp_enqueue_scripts', 'load_scripts' );

// Main configuration function
function travelblog_config(){

	// Registering our menus
	register_nav_menus(
		array(
			'main_menu' => 'Main Menu',
			'footer_menu' => 'Footer Menu'
		)
	);

	$args = array(
		'height' => 110,
		'width' => 200
	);
	add_theme_support( 'custom-header', $args );
	add_theme_support( 'post-thumbnails' );
	
	add_theme_support( 'custom-logo', array(
		'height' => 110,
		'width' => 200
	) );

}
add_action( 'after_setup_theme', 'travelblog_config', 0 );


function jhwd_blog_theme_customize_css()
{
?>
    <style type="text/css">
        #quote-section { 
            background-image:url('<?php echo wp_get_attachment_url(get_theme_mod('set_image')) ?>');   
             
        }
        
        #quote-section h2 a, #quote-section h2{
        	color:<?php echo get_theme_mod('set_link_color'); ?>;  
        }

        #quote-section .callout-subtext{
        	color:<?php echo get_theme_mod('set_text_color'); ?>; 
        }
        
        
    </style>
<?php
}
add_action( 'wp_head', 'jhwd_blog_theme_customize_css');