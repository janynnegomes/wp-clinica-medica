<?php

require_once(PLUGIN_PATH.'/settings/climed.adminbar.php');

// Create the function to use in the action hook
function climed_remove_dashboard_widget() {
	remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
} 
 
// Hook into the 'wp_dashboard_setup' action to register our function
add_action('wp_dashboard_setup', 'climed_remove_dashboard_widget' );



//**************** Menu Controller

add_action( 'admin_menu', 'climed_control_menu_pages' );

function climed_control_menu_pages() {

	// Check if the user is doctor
    remove_menu_page('edit.php');
    remove_menu_page('edit-comments.php');  
    remove_menu_page('tools.php');  
}




/**********************************************

// Add capability for specific user

$user = new WP_User( $user_id );
$user->add_cap( 'can_edit_posts' );

***********************************************/

?>