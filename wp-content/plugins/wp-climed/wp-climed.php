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

require_once( plugin_dir_path( __FILE__ ) .'/settings/climed.adminbar.php');

require_once( plugin_dir_path( __FILE__ ) .'/post_types/climed.costumer.php');

?>