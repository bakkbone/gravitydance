<?php

namespace Gravitydance;

class Loader {
	
	function __construct() {
		add_action( 'wp_head', [$this, 'head'] );
	}
	
	function head() {
		
		if (isset($_GET['breakdance_iframe']) && $_GET['breakdance_iframe'] == 'true') {
			$base_url = \GFCommon::get_base_url();
			$version  = \GFForms::$version;
			$min      = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG || isset( $_GET['gform_debug'] ) ? '' : '.min';
			
			$disable_css = apply_filters( 'gform_disable_css', get_option( 'rg_gforms_disable_css' ) );
			
			$style_template = '<link rel="stylesheet" href="%s">';
			
			$styles = [
				"{$base_url}/assets/css/dist/gravity-forms-theme-reset{$min}.css",
				"{$base_url}/assets/css/dist/gravity-forms-theme-foundation{$min}.css",
				"{$base_url}/assets/css/dist/gravity-forms-theme-framework{$min}.css",
				"{$base_url}/assets/css/dist/gravity-forms-orbital-theme{$min}.css",
				"{$base_url}/assets/css/dist/basic{$min}.css",
				"{$base_url}/assets/css/dist/theme-components{$min}.css",
				"{$base_url}/assets/css/dist/theme-ie11{$min}.css",
				"{$base_url}/assets/css/dist/theme{$min}.css",
			];
			
			if ( ! $disable_css ) {
				foreach ($styles as $style) {
					echo sprintf($style_template, $style.'?ver='.$version);
				} 
			}
			
		}
	}
	
}