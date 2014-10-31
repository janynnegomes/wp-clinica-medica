<?php 
if ( ! function_exists('climed_register_customer') ) {

// Register Custom Post Type
function climed_register_customer() {

	$labels = array(
		'name'                => _x( 'Customers', 'Post Type General Name', 'climed' ),
		'singular_name'       => _x( 'Customer', 'Post Type Singular Name', 'climed' ),
		'menu_name'           => __( 'Customers', 'climed' ),
		'parent_item_colon'   => __( 'Parent Costumer:', 'climed' ),
		'all_items'           => __( 'All Costumers', 'climed' ),
		'view_item'           => __( 'View Costumer Info.', 'climed' ),
		'add_new_item'        => __( 'Add New Costumer', 'climed' ),
		'add_new'             => __( 'Add New', 'climed' ),
		'edit_item'           => __( 'Edit Costumer', 'climed' ),
		'update_item'         => __( 'Update Costumer', 'climed' ),
		'search_items'        => __( 'Search Costumers', 'climed' ),
		'not_found'           => __( 'Not found', 'climed' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'climed' ),
	);

	$rewrite = array(
		'slug'                => 'customers',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);

	$args = array(
		'label'               => __( 'Customers', 'climed' ),
		'description'         => __( 'People wich receives care', 'climed' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
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

	register_post_type( 'cm_customers', $args );

}

// Hook into the 'init' action
add_action( 'init', 'climed_register_customer', 0 );
}?>