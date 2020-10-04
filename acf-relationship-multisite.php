<?php
/*
Plugin Name: ACF: Relationship Network Posts
Plugin URI: https://github.com/shafaat/acf-network-relationship
Description: Posts / Pages / Any Post Type from Multisite WP Network. This plugin needs the installation/activation of Advanced Custom Fields V5.
Version: 1.1.02 (>= ACF 5.2.7)
Author: Shafayat Ali
Author URI: https://facebook.com/shafaat.syed
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/
// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-relationship-multisite', false, dirname( plugin_basename(__FILE__) ) . '/lang/' ); 
// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_relationship_multisite( $version ) {
	include_once('acf-relationship-multisite-v5.php');	
}
add_action('acf/include_field_types', 'include_field_types_relationship_multisite');	
?>
