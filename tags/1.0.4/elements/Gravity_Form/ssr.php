<?php

if ( ! defined( 'ABSPATH' ) ) exit;

if ($isBuilder && !$propertiesData['content']['builder_label']['hide_label']){
	$label = $propertiesData['content']['builder_label']['custom_label'] ? $propertiesData['content']['builder_label']['custom_label'] : esc_html__('Gravity Form', 'gravitydance').'<br>'.esc_html__('(some forms may not display in builder)', 'gravitydance');
	echo '<div style="padding: 20px; margin-bottom:15px;background: repeating-linear-gradient(145deg, #eff6ff, #eff6ff 10px, #d8e3f9 10px, #d8e3f9 20px); width: 100%; color: black; font-weight: bold;">'.wp_kses_post($label).'</div>';
}

$firstform = rgar(\GFAPI::get_forms()[0], 'id');

$formid = isset( $propertiesData['content']['form']['form']) ? $propertiesData['content']['form']['form'] : $firstform;

$title = $propertiesData['content']['form']['display_title'] ? 'true' : 'false';
$description = $propertiesData['content']['form']['display_description'] ? 'true' : 'false';
$ajax = $propertiesData['content']['form']['ajax'] ? 'true' : 'false';
$tabindex = $propertiesData['content']['form']['tab_index'];
$dovalues = $propertiesData['content']['form']['specify_default_field_values'];
$values = '';
if ($dovalues) {
	foreach ($propertiesData['content']['form']['field_values'] as $value) {
		$values .= $value['parameter'].'='.$value['value'].'&';
	} 
}

$shortcode = '[gravityform id="'.$formid.'"';
$shortcode .= ' title="'.$title.'"';
$shortcode .= ' description="'.$description.'"';
$shortcode .= ' ajax="'.$ajax.'"';
if (isset( $propertiesData['content']['form']['tab_index'])) {
	$shortcode .= ' tabindex="'.$tabindex.'"';
}
if ($dovalues) {
	$shortcode .= ' field_values="'.$values.'"';
}
$shortcode .= ' theme="orbital"]';

echo do_shortcode(wp_kses_post($shortcode));