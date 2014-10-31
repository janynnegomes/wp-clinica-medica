<?php 
if ( ! function_exists('climed_register_doctors') ) {

// Register Custom Post Type
function climed_register_doctors() {

	$labels = array(
		'name'                => _x( 'Doctors', 'Post Type General Name', 'climed' ),
		'singular_name'       => _x( 'Doctor', 'Post Type Singular Name', 'climed' ),
		'menu_name'           => __( 'Doctors', 'climed' ),
		'parent_item_colon'   => __( 'Parent Doctor:', 'climed' ),
		'all_items'           => __( 'All Doctors', 'climed' ),
		'view_item'           => __( 'View Doctor Info.', 'climed' ),
		'add_new_item'        => __( 'Add New Doctor', 'climed' ),
		'add_new'             => __( 'Add New', 'climed' ),
		'edit_item'           => __( 'Edit Doctor', 'climed' ),
		'update_item'         => __( 'Update Doctor', 'climed' ),
		'search_items'        => __( 'Search Doctors', 'climed' ),
		'not_found'           => __( 'Not found', 'climed' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'climed' ),
	);

	$rewrite = array(
		'slug'                => 'doctors',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);

	$args = array(
		'label'               => __( 'Doctors', 'climed' ),
		'description'         => __( 'People wich cares', 'climed' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon' 		  => 'dashicons-businessman',
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);

	register_post_type( 'cm_doctors', $args );

}

// Hook into the 'init' action
add_action( 'init', 'climed_register_doctors', 0 );
}?>