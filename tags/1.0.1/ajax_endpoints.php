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

if (! function_exists('Breakdance\AjaxEndpoints\gravitydancegetforms')){
	function gravitydancegetforms(){
		$forms = \GFAPI::get_forms();
		$list = [];
		foreach ($forms as $form) {
			$id = strval(rgar($form, 'id'));
			$title = rgar($form, 'title');
			/* translators: %1$s: form ID. %2$s: form title. */
			$text = sprintf(esc_html__('#%1$s: %2$s', 'gravitydance'), $id, $title);
			$list[] = [
				'value'	=> $id,
				'text'	=> $text
			];
		}
		$list = wp_json_encode($list);
		$list = json_decode($list);
		return $list;
	}
}