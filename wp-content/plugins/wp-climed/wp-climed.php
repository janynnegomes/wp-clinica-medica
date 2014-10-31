<?php 

/**
 * @package wp_climed
 * @version 0.1
 */
/*
Plugin Name: WP Clinica Médica
Plugin URI: http://wordpress.org/plugins/wp-climed/
Description: Agendamento de atendimento em clínicas médicas 
Author: Janynne Gomes
Version: 0.1
Author URI: http://fb.com/DiarioDeUmaProgramadorA
*/


if(!defined('PLUGIN_PATH'))
{ 
	define('PLUGIN_PATH',  plugin_dir_path( __FILE__ ) );	
}

if(!defined('PLUGIN_URL'))
{ 
	define('PLUGIN_URL',   plugin_dir_url( __FILE__ ) );	
}

function load_climed_wp_admin_style() {
    
    wp_register_style( 'climed_admin_css', PLUGIN_URL. '/adminstyle.css', false, '1.0.0' );
    
    wp_enqueue_style( 'climed_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'load_climed_wp_admin_style' );


function load_climed_wp_admin_script() {
    
    wp_enqueue_script( 'metro-calendar', PLUGIN_URL. '/js/metro-calendar.js', array(), '1.0.0', true );
    wp_enqueue_script( 'metro', PLUGIN_URL. '/js/metro.min.js', array(), '1.0.0', true );
}
add_action( 'admin_enqueue_scripts', 'load_climed_wp_admin_script' );


require_once(PLUGIN_PATH.'/settings/settings.main.php');
require_once(PLUGIN_PATH.'/widgets/widgets.load.php');

require_once(PLUGIN_PATH.'/post_types/costumer.php');
require_once(PLUGIN_PATH.'/post_types/doctors.php');
require_once(PLUGIN_PATH.'/post_types/medical_examinations.php');
require_once(PLUGIN_PATH.'/post_types/member_companies.php');
require_once(PLUGIN_PATH.'/post_types/schedules.php');

//*************** User roles

function climed_add_roles_on_plugin_activation()
{
    add_role( 'climeddoctor', 'Climed Doctor', array( 
    	'read'         => true,  
        'edit_posts'   => true,
        'delete_posts' => true, 
        'activate_plugins' => false,				
		'create_users' => true,
		'delete_plugins' => false,
		'promote_users'=> false,
    ));
}

register_activation_hook( __FILE__, 'climed_add_roles_on_plugin_activation' ); ?>