<?php 
	
	function loadThemeResources(){
		wp_enqueue_style('style', get_stylesheet_uri());
	}

	function wpdocs_excerpt_more( $the_excerpt ) {
    return  $the_excerpt . ( '<a href="'. get_permalink( get_the_ID() ). '"</a>');
        
	}
	add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
	add_action('wp_enqueue_scripts',loadThemeResources());
	register_nav_menu('primary', 'Navigation in the header');
	register_nav_menu('secundary', 'Navigation in the footer');
?>