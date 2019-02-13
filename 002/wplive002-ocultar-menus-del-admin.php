<?php
/**
 * Ocultar Menus del admin de WordPress
 *
 * @package     Actions and Filters
 * @author      Oh! Yeah Dev
 * @copyright   2019 Oh! Yeah Dev
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Funciones para ver los hooks en WordPress
 * Plugin URI:  https://ohyeahdev.com
 * Description: Develotips 002.
 * Version:     1.0
 * Author:      Oh! Yeah Dev
 * Author URI:  https://ohyeahdev.com
 * Text Domain: ohyeahdev
 * Domain Path: /languages
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * Prefix:      ohy
 */
defined( 'ABSPATH' ) || die( 'No script kiddies please!' );
/* Ocultar menus del admin */
add_action( 'admin_init', 'ohy_hide_menu', 999 );
function ohy_hide_menu() {
	$usuario = wp_get_current_user();
	if ( 'fgr' === $usuario->user_login ) {
		remove_menu_page( 'edit.php?post_type=acf-field-group' );
		remove_menu_page( 'plugins.php' );
	}
}
