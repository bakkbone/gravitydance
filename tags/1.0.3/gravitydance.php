<?php
 /**
 * Plugin Name:			Gravitydance
 * Plugin URI:			https://github.com/bakkbone/gravitydance
 * Description:			Provides a Gravity Forms element for Breakdance.
 * Version:				1.0.3
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

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if (!defined("WPINC")) {
	die;
}

if ( ! function_exists('get_plugin_data') ) {
	require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}

add_action('init', function(){
	load_plugin_textdomain('gravitydance', false, dirname( plugin_basename( __FILE__ ) ) . '/lang');
});
add_action('breakdance_loaded', function () {
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'Gravitydance',
        'element',
        __('Gravitydance Elements', 'gravitydance'),
        true, // hides path in Element Studio
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'Gravitydance',
        'macro',
        __('Gravitydance Macros', 'gravitydance'),
        true, // hides path in Element Studio
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'Gravitydance',
        'preset',
        __('Gravitydance Presets', 'gravitydance'),
        true, // hides path in Element Studio
    );
    require (__DIR__ . '/loader.php');
    new Loader;
},
    // register elements before loading them
    9
);

if ( is_plugin_active( 'breakdance/plugin.php' ) || defined('__BREAKDANCE_PLUGIN_FILE__') ) {
	require (__DIR__ . '/ajax_endpoints.php');
}