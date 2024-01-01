<?php

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

echo do_shortcode($shortcode);