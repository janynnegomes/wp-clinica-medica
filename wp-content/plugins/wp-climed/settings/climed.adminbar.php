<?php

// Add Toolbar Menus
function climed_toolbar() {
	global $wp_admin_bar;

	$args = array(
		'id'     => 'time_grid',
		'title'  => __( 'Time Grid', 'climed' ),
		'group'  => true,
	);
	$wp_admin_bar->add_menu( $args );

	$args = array(
		'id'     => 'today_schedules',
		'title'  => __( 'Schedules of the day', 'climed' ),
		'group'  => true,
	);
	$wp_admin_bar->add_menu( $args );

}

// Hook into the 'wp_before_admin_bar_render' action
add_action( 'wp_before_admin_bar_render', 'climed_toolbar', 999 );
?>