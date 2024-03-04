<?php
 /**
 * Plugin Name:			Gravitydance
 * Plugin URI:			https://github.com/bakkbone/gravitydance
 * Description:			Provides a Gravity Forms element for Breakdance.
 * Version:				1.0.4
 * Requires at least:	6.0
 * Requires PHP:		7.4
 * Author:				BAKKBONE Australia
 * Author URI:			https://www.bakkbone.com.au/
 * License:				GNU General Public License (GPL) 3.0 or later
 * License URI:			https://www.gnu.org/licenses/gpl.html
 * Tested up to:		6.4
 * Text Domain:			gravitydance
 * Domain Path:			/lang
**/

namespace Gravitydance;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! defined("WPINC") ) {
	die;
}

if ( ! function_exists('get_plugin_data') ) {
	require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}

function gravitydance_textdomain() {
	load_plugin_textdomain('gravitydance', false, dirname( plugin_basename( __FILE__ ) ) . '/lang');
}
add_action('init', 'gravitydance_textdomain');

function gravitydance_loader() {
    \Breakdance\ElementStudio\registerSaveLocation(
        \Breakdance\Util\getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'Gravitydance',
        'element',
        __('Gravitydance Elements', 'gravitydance'),
        true,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        \Breakdance\Util\getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'Gravitydance',
        'macro',
        __('Gravitydance Macros', 'gravitydance'),
        true,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        \Breakdance\Util\getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'Gravitydance',
        'preset',
        __('Gravitydance Presets', 'gravitydance'),
        true,
    );
    require (__DIR__ . '/loader.php');
    new Loader;
}

function gravitydance_notices() {
	$plugin_data = get_plugin_data(__FILE__);
	$bd = is_plugin_active('breakdance/plugin.php') || defined('__BREAKDANCE_PLUGIN_FILE__');
	$gf = is_plugin_active('gravityforms/gravityforms.php');
	
	if (!$bd) {
		echo '<div class="notice-error notice"><p>'. wp_kses_post(sprintf(__('<strong>%s</strong> requires Breakdance to be installed and activated on your site.','gravitydance'), $plugin_data["Name"])).'</p></div>';
	}
	if (!$gf) {
		echo '<div class="notice-error notice"><p>'. wp_kses_post(sprintf(__('<strong>%s</strong> requires Gravity Forms to be installed and activated on your site.','gravitydance'), $plugin_data["Name"])).'</p></div>';
	}
}

if (is_plugin_active('gravityforms/gravityforms.php') && (is_plugin_active('breakdance/plugin.php') || defined('__BREAKDANCE_PLUGIN_FILE__'))) {
	add_action('breakdance_loaded', 'gravitydance_loader', 9);
	require (__DIR__ . '/ajax_endpoints.php');
} else {
	add_action('admin_notices', 'gravitydance_notices');
}