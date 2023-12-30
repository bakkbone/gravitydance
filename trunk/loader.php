<?php

namespace Gravitydance;

class Loader {
	
	function __construct() {
		add_filter( 'breakdance_reusable_dependencies_urls', [$this, 'gravitydance_gf_styles'], PHP_INT_MAX );
		add_action( 'wp_head', [$this, 'head'] );
	}
	
	function gravitydance_gf_styles($urls) {
		$base_url = \GFCommon::get_base_url();
		$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG || isset( $_GET['gform_debug'] ) ? '' : '.min';
		$urls['gf_theme'] = "{$base_url}/assets/js/dist/scripts-theme{$min}.js";
		$urls['gf_utils'] = "{$base_url}/assets/js/dist/utils{$min}.js";
		$urls['gf_vendor'] = "{$base_url}/assets/js/dist/vendor-theme{$min}.js";
		return $urls;
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
			
			$urls = [];
			$urls['theme'] = "{$base_url}/assets/js/dist/scripts-theme{$min}.js";
			$urls['utils'] = "{$base_url}/assets/js/dist/utils{$min}.js";
			$urls['vendor'] = "{$base_url}/assets/js/dist/vendor-theme{$min}.js";
			
			foreach ($urls as $key => $url) {
				$script_template = '<script type="text/javascript" src="%1s" id="gravitydance_%2s"></script>';
				//echo sprintf($script_template, $url.'?ver='.$version, $key);
			} 
			
		}
	}
	
}