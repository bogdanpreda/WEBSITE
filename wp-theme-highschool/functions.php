<?php 
remove_action('init', 'wp_admin_bar_init' );
add_filter('show_admin_bar', '__return_false' );
add_theme_support('post-thumbnails' );


set_post_thumbnail_size( 293, 175, array( 'top', 'left')  ); // 50 pixels wide by 50 pixels tall, crop from the top left corner
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

function register_my_widgets() {
	$args = array(
		'name' 			=> 'Facebook Search',
		'id' 			=> 'sidebar1',
		'description' 	=> 'Facebook box',
		'class'			=> '',
		'before_widget' => '<div>',
		'after_widget'  => '</div>'
	);
	   
	register_sidebar($args);
	
}
add_action('init', 'register_my_widgets');
?>