<?php 

function dynamic_remove_home_post_type_support() {
    
    remove_post_type_support(  'home', 'editor' );
}

add_action( 'init', 'dynamic_remove_home_post_type_support' );


function dynamic_widgets_init() {

	// Homepage sections
	register_sidebar( array(
		'name'          => __( 'Homepage sections', 'dynamic' ),
		'id'            => 'dynamic-homepage-sections',
		'description'	=> '',
		'before_widget' => '<section id="%2$s" class="band section"><div class="container"><div class="row">',
		'after_widget'  => '</div><!-- row --></div><!-- container --></section><!-- section -->',
		'before_title'  => '',
		'after_title'   => '',
	) );

	
}

add_action( 'widgets_init', 'dynamic_widgets_init' );

function dynamic_theme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'dynamic', get_template_directory() . '/languages' );

	
	add_image_size( 'grid-small', 224, 168, true );
	add_image_size( 'grid-medium', 263, 197, true );


	/**
	 * Register the site menus
	 * @see inc/theme-menus.php for other template tags functions related with Menus
	 */
	register_nav_menus( array(
		'primary'  => __( 'Primary Menu', 'dynamic' ),
		'athletes_widget' => __('Athletes Menu', 'dynamic'),
	) );

}

add_action( 'after_setup_theme', 'dynamic_theme_setup' );


