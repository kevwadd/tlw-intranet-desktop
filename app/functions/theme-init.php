<?php 
if (!is_admin()) {

	function tlw_scripts() {
	
		global $post;
		// Load stylesheets.
		wp_enqueue_style( 'styles', get_stylesheet_directory_uri().'/app/css/styles.css', null, filemtime( get_stylesheet_directory().'/app/css/styles.css' ), 'screen' );
		
		// Load JS
		$functions_dep = array(
		'jquery',
		'bootstrap-min',
		'bootstrap-select', 
		'jquery-cookie', 
		'slim-scroll',
		'widow-fix'
		);
		wp_deregister_script('jquery-core');
		wp_deregister_script('jquery');
	    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', array(), '2.2.4', true);
	    wp_enqueue_script( 'modernizr-min', get_template_directory_uri() . '/app/js/modernizr-min.js', array(), '2.8.3', true );
		wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/app/js/bootstrap-min.js', array('jquery'), '2.8.3', true );
		wp_enqueue_script( 'slim-scroll', 'https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.6/jquery.slimscroll.min.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'bootstrap-select', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js', array('jquery'), '1.11.2', true );
		wp_enqueue_script( 'functions', get_stylesheet_directory_uri() . '/app/js/functions-min.js', $functions_dep, filemtime( get_stylesheet_directory().'/app/js/functions.js' ), true );
		
	}
	add_action( 'wp_enqueue_scripts', 'tlw_scripts' );
}
	
?>