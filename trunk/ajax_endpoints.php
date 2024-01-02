<?php

namespace Breakdance\AjaxEndpoints;

add_action('breakdance_loaded', function () {
    \Breakdance\AJAX\register_handler(
        'gravitydance_get_forms',
        'Breakdance\AjaxEndpoints\gravitydancegetforms',
        'edit',
        true
    );
});

function gravitydancegetforms(){
	
	$forms = \GFAPI::get_forms();
	$list = [];
	foreach ($forms as $form) {
		$id = strval(rgar($form, 'id'));
		$title = rgar($form, 'title');
		/* translators: %1s: form ID. %2s: form title. */
		$text = sprintf(esc_html__('#%1s: %2s', 'gravitydance'), $id, $title);
		$list[] = [
			'value'	=> $id,
			'text'	=> $text
		];
	}
	$list = wp_json_encode($list);
	$list = json_decode($list);
	return $list;
}