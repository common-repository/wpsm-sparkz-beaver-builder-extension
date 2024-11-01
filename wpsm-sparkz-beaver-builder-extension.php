<?php
/**
 * Plugin Name: WPSM Sparkz Beaver Builder Extension
 * Plugin URI: http://www.wpsparkz.com
 * Version: 1.1.1
 * Author: WPSM Sparkz Team
 * Author URI: http://www.wpsparkz.com
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Description: It is Beaver Builder module extension to develope pages more easy..
 */
define( 'WPSM_BBE_DIR', plugin_dir_path( __FILE__ ) );
define( 'WPSM_BBE_URL', plugins_url( '/', __FILE__ ) );

/**
 * Custom modules
 */
function wpsm_bbe_load_modules() {
	if ( class_exists( 'FLBuilder' ) ) {
	    require_once 'modules/all-elements.php';
	}
}
add_action( 'init', 'wpsm_bbe_load_modules' );