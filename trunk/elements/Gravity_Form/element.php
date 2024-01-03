<?php

namespace Gravitydance;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

/**
\Breakdance\ElementStudio\registerElementForEditing(
    "Gravitydance\\GravityForm",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);
**/

class GravityForm extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return '<svg aria-hidden="true" focusable="false" class="svg-inline--fa fa-envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M448 64H64C28.65 64 0 92.65 0 128v256c0 35.35 28.65 64 64 64h384c35.35 0 64-28.65 64-64V128C512 92.65 483.3 64 448 64zM64 96h384c17.64 0 32 14.36 32 32v36.01l-195.2 146.4c-17 12.72-40.63 12.72-57.63 0L32 164V128C32 110.4 46.36 96 64 96zM480 384c0 17.64-14.36 32-32 32H64c-17.64 0-32-14.36-32-32V203.1L208 336c14.12 10.61 31.06 16.02 48 16.02S289.9 346.6 304 336L480 203.1V384z"></path></svg>';
    }

    static function tag()
    {
        return 'div';
    }

    static function tagOptions()
    {
        return ['section'];
    }

    static function tagControlPath()
    {
        return false;
    }

    static function name()
    {
        return esc_html__('Gravity Form', 'gravitydance');
    }

    static function className()
    {
        return 'gravitydance_form';
    }

    static function category()
    {
        return 'forms';
    }

    static function badge()
    {
        return ['backgroundColor' => 'var(--red600)', 'label' => esc_html__('Gravitydance', 'gravitydance'), 'textColor' => 'var(--white)'];
    }

    static function slug()
    {
        return get_class();
    }

    static function template()
    {
        return file_get_contents(__DIR__ . '/html.twig');
    }

    static function defaultCss()
    {
        return file_get_contents(__DIR__ . '/default.css');
    }

    static function defaultProperties()
    {
        return ['content' => ['form' => ['form' => null, 'ajax' => false, 'display_description' => null, 'display_title' => null, 'specify_default_field_values' => null, 'field_values' => null, 'theme' => 'gravity-theme']], 'design' => ['wrapper' => ['size' => ['width' => ['breakpoint_base' => ['number' => 100, 'unit' => '%', 'style' => '100%']]], 'spacing' => ['padding' => ['breakpoint_base' => ['top' => ['number' => 20, 'unit' => 'px', 'style' => '20px'], 'left' => ['number' => 20, 'unit' => 'px', 'style' => '20px'], 'right' => ['number' => 20, 'unit' => 'px', 'style' => '20px'], 'bottom' => ['number' => 20, 'unit' => 'px', 'style' => '20px']]]], 'borders' => ['shadow' => ['breakpoint_base' => ['shadows' => ['0' => ['color' => '#00000025', 'x' => '5', 'y' => '20', 'blur' => '75', 'spread' => '0', 'position' => 'outset']], 'style' => '5px 20px 75px 0px #00000025']]], 'background' => ['color' => ['breakpoint_base' => '#FFFFFFFF']], 'default_typography' => null, 'column_gap' => null, 'row_gap' => ['breakpoint_base' => ['number' => 25, 'unit' => 'px', 'style' => '25px']]], 'header' => ['title' => ['spacing' => ['margin' => ['breakpoint_base' => ['top' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'bottom' => ['number' => 0, 'unit' => 'px', 'style' => '0px']]]]], 'description' => ['spacing' => ['margin' => ['breakpoint_base' => ['top' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'bottom' => ['number' => 30, 'unit' => 'px', 'style' => '30px']]]]]], 'required_indicators' => null, 'progress_bar' => ['percentage_bar' => null, 'wrapper_spacing' => null, 'title' => null], 'progress' => null, 'label' => null, 'description' => null, 'sub_label' => null, 'inputs' => ['text_and_textarea' => null, 'spacing' => null, 'gap' => null, 'background' => null, 'placeholder' => ['color' => null], 'select' => null, 'focus' => null], 'radio' => ['checked' => null, 'typography' => null], 'datepicker' => null, 'checkbox' => ['typography' => null], 'file_upload' => null, 'products' => ['price_alignment' => null, 'price_width' => ['number' => 4, 'unit' => 'em', 'style' => '4em']], 'section_break' => ['spacing' => ['margin' => ['breakpoint_base' => ['top' => null]]], 'title' => ['spacing' => ['margin' => ['breakpoint_base' => ['top' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'bottom' => ['number' => 0, 'unit' => 'px', 'style' => '0px']]]]]], 'buttons' => ['button_section' => ['alignment' => null]], 'validation' => null]];
    }

    static function defaultChildren()
    {
        return false;
    }

    static function cssTemplate()
    {
        $template = file_get_contents(__DIR__ . '/css.twig');
        return $template;
    }

    static function designControls()
    {
        return [c(
        "wrapper",
        esc_html__("Wrapper", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\size",
      esc_html__("Size", 'gravitydance'),
      "size",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\background",
      esc_html__("Background", 'gravitydance'),
      "background",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders", 'gravitydance'),
      "borders",
       ['type' => 'popout']
     ), c(
        "default_alignment",
        esc_html__("Default Alignment", 'gravitydance'),
        [],
        ['type' => 'button_bar', 'layout' => 'inline', 'items' => ['0' => ['value' => 'left', 'text' => esc_html__('Align Left', 'gravitydance'), 'icon' => 'AlignLeftIcon'], '1' => ['value' => 'center', 'text' => esc_html__('Align Center', 'gravitydance'), 'icon' => 'AlignCenterIcon'], '2' => ['value' => 'right', 'text' => esc_html__('Align Right', 'gravitydance'), 'icon' => 'AlignRightIcon']], 'buttonBarOptions' => ['size' => 'small', 'layout' => 'default']],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography_with_nothing",
      esc_html__("Default Typography", 'gravitydance'),
      "default_typography",
       ['type' => 'popout']
     ), c(
        "row_gap",
        esc_html__("Row Gap", 'gravitydance'),
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "header",
        esc_html__("Header", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders", 'gravitydance'),
      "borders",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), c(
        "title",
        esc_html__("Title", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\typography_with_align_with_hoverable_color",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "description",
        esc_html__("Description", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\typography_with_align_with_hoverable_color",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'condition' => ['0' => ['0' => ['path' => 'content.form.display_title', 'operand' => 'is set', 'value' => '']], '1' => ['0' => ['path' => 'content.form.display_description', 'operand' => 'is set', 'value' => '']]]],
        false,
        false,
        [],
      ), c(
        "required_indicators",
        esc_html__("Required Indicators", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\typography",
      esc_html__("Indicator", 'gravitydance'),
      "indicator",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography",
      esc_html__("Legend", 'gravitydance'),
      "legend",
       ['type' => 'popout']
     ), c(
        "legend_margin",
        esc_html__("Legend Margin", 'gravitydance'),
        [],
        ['type' => 'spacing_complex', 'layout' => 'inline'],
        false,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "progress",
        esc_html__("Progress", 'gravitydance'),
        [c(
        "progress_bar",
        esc_html__("Progress Bar", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Wrapper Spacing", 'gravitydance'),
      "wrapper_spacing",
       ['type' => 'popout']
     ), c(
        "title",
        esc_html__("Title", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\typography",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "percentage_bar",
        esc_html__("Percentage Bar", 'gravitydance'),
        [getPresetSection(
      "Gravitydance\\Size",
      esc_html__("Size", 'gravitydance'),
      "size",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\background",
      esc_html__("Background", 'gravitydance'),
      "background",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\background",
      esc_html__("Background", 'gravitydance'),
      "background",
       ['type' => 'popout']
     ), c(
        "percentage",
        esc_html__("Percentage", 'gravitydance'),
        [c(
        "show_percentage",
        esc_html__("Show Percentage", 'gravitydance'),
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography_with_align",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['condition' => ['0' => ['0' => ['path' => 'design.progress_bar.percentage_bar.percentage.show_percentage', 'operand' => 'is set', 'value' => '']]], 'type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "steps",
        "Steps",
        [getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Wrapper Spacing", 'gravitydance'),
      "wrapper_spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Step Spacing", 'gravitydance'),
      "step_spacing",
       ['type' => 'popout']
     ), c(
        "pending_step",
        esc_html__("Pending Step", 'gravitydance'),
        [c(
        "step_number",
        esc_html__("Step Number", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders", 'gravitydance'),
      "borders",
       ['type' => 'popout']
     ), c(
        "background",
        esc_html__("Background", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        true,
        [],
      ), getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      esc_html__("Step Label", 'gravitydance'),
      "step_label",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "active_step",
        esc_html__("Active Step", 'gravitydance'),
        [c(
        "step_number",
        esc_html__("Step Number", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders", 'gravitydance'),
      "borders",
       ['type' => 'popout']
     ), c(
        "background",
        esc_html__("Background", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        true,
        [],
      ), getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      esc_html__("Step Label", 'gravitydance'),
      "step_label",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "completed_step",
        esc_html__("Completed Step", 'gravitydance'),
        [c(
        "step_number",
        esc_html__("Step Number", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders", 'gravitydance'),
      "borders",
       ['type' => 'popout']
     ), c(
        "background",
        esc_html__("Background", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        true,
        [],
      ), c(
        "checkmark",
        esc_html__("Checkmark", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        true,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      esc_html__("Step Label", 'gravitydance'),
      "step_label",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "label",
        "Label",
        [getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography_with_align_with_hoverable_color",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "sub_label",
        esc_html__("Sub-Label", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography_with_align_with_hoverable_color",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "description",
        esc_html__("Description", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography_with_align_with_hoverable_color",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "buttons",
        esc_html__("Buttons", 'gravitydance'),
        [c(
        "button_section",
        "Button Section",
        [getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders", 'gravitydance'),
      "borders",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\background",
      esc_html__("Background", 'gravitydance'),
      "background",
       ['type' => 'popout']
     ), c(
        "alignment",
        esc_html__("Alignment", 'gravitydance'),
        [],
        ['type' => 'button_bar', 'layout' => 'inline', 'items' => ['0' => ['value' => 'start', 'text' => esc_html__('Align Left', 'gravitydance'), 'icon' => 'FlexAlignLeftIcon'], '1' => ['value' => 'center', 'text' => esc_html__('Align Center', 'gravitydance'), 'icon' => 'FlexAlignCenterHorizontalIcon'], '2' => ['value' => 'end', 'text' => esc_html__('Align Right', 'gravitydance'), 'icon' => 'FlexAlignRightIcon']], 'buttonBarOptions' => ['size' => 'small', 'layout' => 'default']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "submit",
        esc_html__("Submit", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders", 'gravitydance'),
      "borders",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\size",
      esc_html__("Size", 'gravitydance'),
      "size",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography_with_effects_and_align",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     ), c(
        "hover",
        "Hover",
        [getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders", 'gravitydance'),
      "borders",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\size",
      esc_html__("Size", 'gravitydance'),
      "size",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography_with_effects_and_align",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "next",
        esc_html__("Next", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders", 'gravitydance'),
      "borders",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\size",
      esc_html__("Size", 'gravitydance'),
      "size",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography_with_effects_and_align",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     ), c(
        "hover",
        esc_html__("Hover", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders", 'gravitydance'),
      "borders",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\size",
      esc_html__("Size", 'gravitydance'),
      "size",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography_with_effects_and_align",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "previous",
        esc_html__("Previous", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders", 'gravitydance'),
      "borders",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\size",
      esc_html__("Size", 'gravitydance'),
      "size",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography_with_effects_and_align",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     ), c(
        "hover",
        esc_html__("Hover", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders", 'gravitydance'),
      "borders",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\size",
      esc_html__("Size", 'gravitydance'),
      "size",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography_with_effects_and_align",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "save",
        esc_html__("Save", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders", 'gravitydance'),
      "borders",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\size",
      esc_html__("Size", 'gravitydance'),
      "size",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography_with_effects",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     ), c(
        "icon",
        esc_html__("Icon", 'gravitydance'),
        [c(
        "size",
        esc_html__("Size", 'gravitydance'),
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "color",
        esc_html__("Color", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        true,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "hover",
        "Hover",
        [getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders", 'gravitydance'),
      "borders",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\size",
      esc_html__("Size", 'gravitydance'),
      "size",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography_with_effects_and_align",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     ), c(
        "icon",
        esc_html__("Icon", 'gravitydance'),
        [c(
        "size",
        esc_html__("Size", 'gravitydance'),
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "color",
        esc_html__("Color", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        true,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "inputs",
        esc_html__("Inputs", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders", 'gravitydance'),
      "borders",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\background",
      esc_html__("Background", 'gravitydance'),
      "background",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography",
      esc_html__("Placeholder", 'gravitydance'),
      "placeholder",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Focus", 'gravitydance'),
      "focus",
       ['type' => 'popout']
     )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "select",
        esc_html__("Select", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders", 'gravitydance'),
      "borders",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\background",
      esc_html__("Background", 'gravitydance'),
      "background",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     ), c(
        "option",
        esc_html__("Option", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\typography",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     ), c(
        "background",
        esc_html__("Background", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        false,
        [],
      ), c(
        "checked",
        esc_html__("Checked", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\typography",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     ), c(
        "background",
        esc_html__("Background", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "enhanced_select",
        esc_html__("Enhanced Select", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders", 'gravitydance'),
      "borders",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\background",
      esc_html("Background", 'gravitydance'),
      "background",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     ), c(
        "option",
        esc_html__("Option", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     ), c(
        "background",
        esc_html__("Background", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        true,
        [],
      ), c(
        "checked",
        esc_html__("Checked", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\typography",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     ), c(
        "background",
        esc_html__("Background", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        false,
        [],
      ), c(
        "indicator",
        esc_html__("Indicator", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "search_box",
        esc_html__("Search Box", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders", 'gravitydance'),
      "borders",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders - Focus", 'gravitydance'),
      "borders_focus",
       ['type' => 'popout']
     ), c(
        "background",
        esc_html__("Background", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "checkbox",
        esc_html__("Checkbox", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders", 'gravitydance'),
      "borders",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\size",
      esc_html__("Size", 'gravitydance'),
      "size",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\background",
      esc_html__("Background", 'gravitydance'),
      "background",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     ), c(
        "checked",
        esc_html__("Checked", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\background",
      esc_html__("Background", 'gravitydance'),
      "background",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders", 'gravitydance'),
      "borders",
       ['type' => 'popout']
     ), c(
        "checkmark",
        esc_html__("Checkmark", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Focus", 'gravitydance'),
      "focus",
       ['type' => 'popout']
     )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "radio",
        "Radio",
        [getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders", 'gravitydance'),
      "borders",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\size",
      esc_html__("Size", 'gravitydance'),
      "size",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\background",
      esc_html__("Background", 'gravitydance'),
      "background",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     ), c(
        "checked",
        esc_html__("Checked", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\background",
      esc_html__("Background", 'gravitydance'),
      "background",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders", 'gravitydance'),
      "borders",
       ['type' => 'popout']
     ), c(
        "checkmark",
        esc_html__("Checkmark", 'gravitydance'),
        [c(
        "color",
        esc_html__("Color", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "size",
        esc_html__("Size", 'gravitydance'),
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "border_radius",
        esc_html__("Border Radius", 'gravitydance'),
        [],
        ['type' => 'border_radius', 'layout' => 'inline'],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Focus", 'gravitydance'),
      "focus",
       ['type' => 'popout']
     )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "section_break",
        esc_html__("Section Break", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders", 'gravitydance'),
      "borders",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), c(
        "title",
        esc_html__("Title", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "description",
        esc_html__("Description", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "datepicker",
        esc_html__("Datepicker", 'gravitydance'),
        [c(
        "icon_color",
        esc_html__("Icon Color", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        true,
        [],
      ), c(
        "popup",
        esc_html__("Popup", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders", 'gravitydance'),
      "borders",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\background",
      esc_html__("Background", 'gravitydance'),
      "background",
       ['type' => 'popout']
     ), c(
        "header",
        esc_html__("Header", 'gravitydance'),
        [c(
        "arrows",
        esc_html__("Arrows", 'gravitydance'),
        [c(
        "color",
        esc_html__("Color", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\background",
      esc_html__("Background", 'gravitydance'),
      "background",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "dropdowns",
        esc_html__("Dropdowns", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\typography",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders", 'gravitydance'),
      "borders",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "weekday_header",
        esc_html__("Weekday Header", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     ), c(
        "background",
        esc_html__("Background", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        true,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "date",
        esc_html__("Date", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     ), c(
        "background",
        esc_html__("Background", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        true,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "date_in_other_month",
        esc_html__("Date in Other Month", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     ), c(
        "background",
        esc_html__("Background", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        true,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "date_in_weekend",
        esc_html__("Date in Weekend", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     ), c(
        "background",
        esc_html__("Background", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        true,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "selected_date",
        esc_html__("Selected Date", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     ), c(
        "background",
        esc_html__("Background", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        true,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "today",
        esc_html__("Today", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     ), c(
        "background",
        esc_html__("Background", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        true,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline'],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "list",
        esc_html__("List", 'gravitydance'),
        [c(
        "icons",
        esc_html__("Icons", 'gravitydance'),
        [c(
        "add",
        esc_html__("Add", 'gravitydance'),
        [c(
        "background",
        esc_html__("Background", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        true,
        [],
      ), c(
        "border_radius",
        esc_html__("Border Radius", 'gravitydance'),
        [],
        ['type' => 'border_radius', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "icon",
        esc_html__("Icon", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        true,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "delete",
        esc_html__("Delete", 'gravitydance'),
        [c(
        "background",
        esc_html__("Background", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        true,
        [],
      ), c(
        "border_radius",
        esc_html__("Border Radius", 'gravitydance'),
        [],
        ['type' => 'border_radius', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "icon",
        esc_html__("Icon", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        true,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "column_headers",
        esc_html__("Column Headers", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "consent",
        esc_html__("Consent", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders", 'gravitydance'),
      "borders",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "file_upload",
        esc_html__("File Upload", 'gravitydance'),
        [c(
        "single",
        esc_html__("Single", 'gravitydance'),
        [c(
        "button",
        esc_html__("Button", 'gravitydance'),
        [c(
        "background",
        esc_html__("Background", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        true,
        [],
      ), getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "field",
        esc_html__("Field", 'gravitydance'),
        [c(
        "background",
        esc_html__("Background", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        true,
        [],
      ), getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\size",
      esc_html__("Size", 'gravitydance'),
      "size",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography",
      esc_html__("Description", 'gravitydance'),
      "description",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "multi",
        esc_html__("Multi", 'gravitydance'),
        [c(
        "drop_area",
        esc_html__("Drop Area", 'gravitydance'),
        [c(
        "background",
        esc_html__("Background", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        true,
        [],
      ), c(
        "icon",
        esc_html__("Icon", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), c(
        "color",
        esc_html__("Color", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        true,
        [],
      ), c(
        "font_size",
        esc_html__("Font Size", 'gravitydance'),
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "text",
        esc_html__("Text", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "button",
        esc_html__("Button", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders", 'gravitydance'),
      "borders",
       ['type' => 'popout']
     ), c(
        "background",
        esc_html__("Background", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        true,
        [],
      ), getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     ), getPresetSection(
      "Gravitydance\\Size",
      esc_html__("Size", 'gravitydance'),
      "size",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "rules",
        esc_html__("Rules", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\typography_with_align",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "uploaded_files",
        esc_html__("Uploaded Files", 'gravitydance'),
        [c(
        "list_gap",
        esc_html__("List Gap", 'gravitydance'),
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Item Spacing", 'gravitydance'),
      "item_spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography_with_align",
      esc_html__("File Name", 'gravitydance'),
      "file_name",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography_with_align",
      esc_html__("File Size", 'gravitydance'),
      "file_size",
       ['type' => 'popout']
     ), c(
        "progress_bar",
        esc_html__("Progress Bar", 'gravitydance'),
        [c(
        "height",
        esc_html__("Height", 'gravitydance'),
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "bar_color",
        esc_html__("Bar Color", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        false,
        [],
      ), c(
        "progress_color",
        esc_html__("Progress Color", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography",
      esc_html__("Percentage", 'gravitydance'),
      "percentage",
       ['type' => 'popout']
     ), c(
        "completed_icon",
        esc_html__("Completed Icon", 'gravitydance'),
        [c(
        "font_size",
        esc_html__("Font Size", 'gravitydance'),
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "color",
        esc_html__("Color", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "border_radius",
        esc_html__("Border Radius", 'gravitydance'),
        [],
        ['type' => 'border_radius', 'layout' => 'inline'],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "delete_icon",
        esc_html__("Delete Icon", 'gravitydance'),
        [c(
        "font_size",
        esc_html__("Font Size", 'gravitydance'),
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "color",
        esc_html__("Color", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        true,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "products",
        esc_html__("Products", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\typography",
      esc_html__("Price Label", 'gravitydance'),
      "price_label",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography",
      esc_html__("Price", 'gravitydance'),
      "price",
       ['type' => 'popout']
     ), c(
        "price_alignment",
        esc_html__("Price Alignment", 'gravitydance'),
        [],
        ['type' => 'button_bar', 'layout' => 'inline', 'items' => ['0' => ['value' => 'left', 'text' => esc_html__('Align Left', 'gravitydance'), 'icon' => 'AlignLeftIcon'], '1' => ['value' => 'center', 'text' => esc_html__('Align Center', 'gravitydance'), 'icon' => 'AlignCenterIcon'], '2' => ['value' => 'right', 'text' => esc_html__('Align Right', 'gravitydance'), 'icon' => 'AlignRightIcon']], 'buttonBarOptions' => ['size' => 'small', 'layout' => 'default']],
        false,
        false,
        [],
      ), c(
        "price_width",
        esc_html__("Price Width", 'gravitydance'),
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography_with_align",
      esc_html__("Shipping Price", 'gravitydance'),
      "shipping_price",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography_with_align",
      esc_html__("Total", 'gravitydance'),
      "total",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'sectionOptions' => ['type' => 'accordion']],
        false,
        false,
        [],
      ), c(
        "validation",
        esc_html__("Validation", 'gravitydance'),
        [c(
        "invalid_input",
        esc_html__("Invalid Input", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\typography_with_align",
      esc_html__("Inline Error", 'gravitydance'),
      "inline_error",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Input Borders", 'gravitydance'),
      "input_borders",
       ['type' => 'popout']
     ), c(
        "input_background",
        esc_html__("Input Background", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "validation_summary",
        esc_html__("Validation Summary", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\borders",
      esc_html__("Borders", 'gravitydance'),
      "borders",
       ['type' => 'popout']
     ), c(
        "background",
        esc_html__("Background", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        false,
        [],
      ), c(
        "error_title",
        esc_html__("Error Title", 'gravitydance'),
        [c(
        "icon_color",
        esc_html__("Icon Color", 'gravitydance'),
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "icon_size",
        esc_html__("Icon Size", 'gravitydance'),
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "alignment",
        esc_html__("Alignment", 'gravitydance'),
        [],
        ['type' => 'button_bar', 'layout' => 'inline', 'items' => ['0' => ['value' => 'start', 'text' => esc_html__('Align Left', 'gravitydance'), 'icon' => 'FlexAlignLeftIcon'], '1' => ['value' => 'center', 'text' => esc_html__('Align Center', 'gravitydance'), 'icon' => 'FlexAlignCenterHorizontalIcon'], '2' => ['value' => 'end', 'text' => esc_html__('Align Right', 'gravitydance'), 'icon' => 'FlexAlignRightIcon']], 'buttonBarOptions' => ['size' => 'small', 'layout' => 'default']],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "error_list",
        esc_html__("Error List", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\spacing_all",
      esc_html__("Spacing", 'gravitydance'),
      "spacing",
       ['type' => 'popout']
     ), c(
        "list_item",
        esc_html__("List Item", 'gravitydance'),
        [getPresetSection(
      "EssentialElements\\typography",
      esc_html__("Typography", 'gravitydance'),
      "typography",
       ['type' => 'popout']
     ), c(
        "bullet_type",
        esc_html__("Bullet Type", 'gravitydance'),
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => ['0' => ['value' => 'disc', 'text' => esc_html__('Disc', 'gravitydance')], '1' => ['text' => esc_html__('Decimal', 'gravitydance'), 'value' => 'decimal'], '2' => ['text' => esc_html__('Square', 'gravitydance'), 'value' => 'square'], '3' => ['text' => esc_html__('Circle', 'gravitydance'), 'value' => 'circle'], '4' => ['text' => esc_html__('Disclosure Open', 'gravitydance'), 'value' => 'disclosure-open'], '5' => ['value' => 'disclosure-closed', 'text' => esc_html__('Disclosure Closed', 'gravitydance')]]],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      )];
    }

    static function contentControls()
    {
        return [c(
        "form",
        esc_html__("Form", 'gravitydance'),
        [c(
        "form",
        esc_html__("Form", 'gravitydance'),
        [],
        ['type' => 'dropdown', 'layout' => 'vertical', 'dropdownOptions' => ['populate' => ['path' => '', 'text' => '', 'value' => '', 'fetchDataAction' => 'gravitydance_get_forms', 'fetchContextPath' => '', 'refetchPaths' => []]]],
        false,
        false,
        [],
      ), c(
        "display_title",
        esc_html__("Display Title", 'gravitydance'),
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "display_description",
        esc_html__("Display Description", 'gravitydance'),
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "ajax",
        esc_html__("Ajax", 'gravitydance'),
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "tab_index",
        esc_html__("Tab Index", 'gravitydance'),
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['step' => 1]],
        false,
        false,
        [],
      ), c(
        "specify_default_field_values",
        esc_html__("Specify Default Field Values", 'gravitydance'),
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "field_values",
        esc_html__("Field Values", 'gravitydance'),
        [c(
        "parameter",
        esc_html__("Parameter", 'gravitydance'),
        [],
        ['type' => 'text', 'layout' => 'vertical', 'autofocus' => true],
        false,
        false,
        [],
      ), c(
        "value",
        esc_html__("Value", 'gravitydance'),
        [],
        ['type' => 'text', 'layout' => 'vertical'],
        false,
        false,
        [],
      )],
        ['type' => 'inline_repeater', 'layout' => 'vertical', 'condition' => ['0' => ['0' => ['path' => 'content.form.specify_default_field_values', 'operand' => 'is set', 'value' => '']]]],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "builder_label",
        esc_html__("Builder Label", 'gravitydance'),
        [c(
        "hide_label",
        esc_html__("Hide Label", 'gravitydance'),
        [],
        ['type' => 'toggle', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "custom_label",
        esc_html__("Custom Label", 'gravitydance'),
        [],
        ['type' => 'text', 'layout' => 'vertical', 'textOptions' => ['multiline' => true], 'condition' => ['0' => ['0' => ['path' => 'content.builder_label.hide_label', 'operand' => 'is not set', 'value' => '']]]],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      )];
    }

    static function settingsControls()
    {
        return [];
    }

    static function dependencies()
    {
        return false;
    }

    static function settings()
    {
        return ['dependsOnGlobalScripts' => true, 'bypassPointerEvents' => true];
    }

    static function addPanelRules()
    {
        return false;
    }

    static public function actions()
    {
        return false;
    }

    static function nestingRule()
    {
        return ["type" => "final",   ];
    }

    static function spacingBars()
    {
        return [];
    }

    static function attributes()
    {
        return false;
    }

    static function experimental()
    {
        return false;
    }

    static function order()
    {
        return -1;
    }

    static function dynamicPropertyPaths()
    {
        return ['0' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '1' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '2' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '3' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '4' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '5' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '6' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '7' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '8' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '9' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '10' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '11' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '12' => ['accepts' => 'image_url', 'path' => 'design.wrapper.background.layers[].image'], '13' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '14' => ['accepts' => 'image_url', 'path' => 'design.progress_bar.percentage_bar.progress.layers[].image'], '15' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '16' => ['accepts' => 'image_url', 'path' => 'design.inputs.text_and_textarea.background.layers[].image'], '17' => ['accepts' => 'image_url', 'path' => 'design.inputs.background.layers[].image'], '18' => ['accepts' => 'image_url', 'path' => 'design.inputs.select.background.layers[].image'], '19' => ['accepts' => 'image_url', 'path' => 'design.inputs.select.option.background.layers[].image'], '20' => ['accepts' => 'image_url', 'path' => 'design.checkbox.background.layers[].image'], '21' => ['accepts' => 'image_url', 'path' => 'design.checkbox.checked.background.layers[].image'], '22' => ['accepts' => 'image_url', 'path' => 'design.datepicker.popup.background.layers[].image'], '23' => ['accepts' => 'image_url', 'path' => 'design.datepicker.popup.header.arrows.background.layers[].image'], '24' => ['accepts' => 'image_url', 'path' => 'design.datepicker.popup.weekday_header.background.layers[].image'], '25' => ['accepts' => 'image_url', 'path' => 'design.file_upload.single.button.background.layers[].image'], '26' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '27' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '28' => ['accepts' => 'image_url', 'path' => 'design.buttons.button_section.background.layers[].image'], '29' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '30' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '31' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '32' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string']];
    }

    static function additionalClasses()
    {
        return false;
    }

    static function projectManagement()
    {
        return false;
    }

    static function propertyPathsToWhitelistInFlatProps()
    {
        return ['content.form.theme', 'content.form', 'design.progress_bar.percentage_bar.background.image', 'design.progress_bar.percentage_bar.background.overlay.image', 'design.progress_bar.percentage_bar.background.image_settings.unset_image_at', 'design.progress_bar.percentage_bar.background.image_settings.size', 'design.progress_bar.percentage_bar.background.image_settings.height', 'design.progress_bar.percentage_bar.background.image_settings.repeat', 'design.progress_bar.percentage_bar.background.image_settings.position', 'design.progress_bar.percentage_bar.background.image_settings.left', 'design.progress_bar.percentage_bar.background.image_settings.top', 'design.progress_bar.percentage_bar.background.image_settings.attachment', 'design.progress_bar.percentage_bar.background.image_settings.custom_position', 'design.progress_bar.percentage_bar.background.image_settings.width', 'design.progress_bar.percentage_bar.background.overlay.image_settings.custom_position', 'design.progress_bar.percentage_bar.background.image_size', 'design.progress_bar.percentage_bar.background.overlay.image_size', 'design.progress_bar.percentage_bar.background.overlay.type', 'design.progress_bar.percentage_bar.background.image_settings', 'design.wrapper.layout.horizontal.vertical_at', 'design.inputs.text_and_textarea.background.image', 'design.inputs.text_and_textarea.background.overlay.image', 'design.inputs.text_and_textarea.background.image_settings.unset_image_at', 'design.inputs.text_and_textarea.background.image_settings.size', 'design.inputs.text_and_textarea.background.image_settings.height', 'design.inputs.text_and_textarea.background.image_settings.repeat', 'design.inputs.text_and_textarea.background.image_settings.position', 'design.inputs.text_and_textarea.background.image_settings.left', 'design.inputs.text_and_textarea.background.image_settings.top', 'design.inputs.text_and_textarea.background.image_settings.attachment', 'design.inputs.text_and_textarea.background.image_settings.custom_position', 'design.inputs.text_and_textarea.background.image_settings.width', 'design.inputs.text_and_textarea.background.overlay.image_settings.custom_position', 'design.inputs.text_and_textarea.background.image_size', 'design.inputs.text_and_textarea.background.overlay.image_size', 'design.inputs.text_and_textarea.background.overlay.type', 'design.inputs.text_and_textarea.background.image_settings', 'design.inputs.select.option.background.image', 'design.inputs.select.option.background.overlay.image', 'design.inputs.select.option.background.image_settings.unset_image_at', 'design.inputs.select.option.background.image_settings.size', 'design.inputs.select.option.background.image_settings.height', 'design.inputs.select.option.background.image_settings.repeat', 'design.inputs.select.option.background.image_settings.position', 'design.inputs.select.option.background.image_settings.left', 'design.inputs.select.option.background.image_settings.top', 'design.inputs.select.option.background.image_settings.attachment', 'design.inputs.select.option.background.image_settings.custom_position', 'design.inputs.select.option.background.image_settings.width', 'design.inputs.select.option.background.overlay.image_settings.custom_position', 'design.inputs.select.option.background.image_size', 'design.inputs.select.option.background.overlay.image_size', 'design.inputs.select.option.background.overlay.type', 'design.inputs.select.option.background.image_settings', 'design.datepicker.popup.weekday_header.background.image', 'design.datepicker.popup.weekday_header.background.overlay.image', 'design.datepicker.popup.weekday_header.background.image_settings.unset_image_at', 'design.datepicker.popup.weekday_header.background.image_settings.size', 'design.datepicker.popup.weekday_header.background.image_settings.height', 'design.datepicker.popup.weekday_header.background.image_settings.repeat', 'design.datepicker.popup.weekday_header.background.image_settings.position', 'design.datepicker.popup.weekday_header.background.image_settings.left', 'design.datepicker.popup.weekday_header.background.image_settings.top', 'design.datepicker.popup.weekday_header.background.image_settings.attachment', 'design.datepicker.popup.weekday_header.background.image_settings.custom_position', 'design.datepicker.popup.weekday_header.background.image_settings.width', 'design.datepicker.popup.weekday_header.background.overlay.image_settings.custom_position', 'design.datepicker.popup.weekday_header.background.image_size', 'design.datepicker.popup.weekday_header.background.overlay.image_size', 'design.datepicker.popup.weekday_header.background.overlay.type', 'design.datepicker.popup.weekday_header.background.design.layout.horizontal.vertical_at', 'design.datepicker.popup.weekday_header.background.image_settings', 'design.datepicker.popup.weekday_header.background.type', 'design.file_upload.multi.drop_area.button.custom.size.full_width_at', 'design.file_upload.multi.drop_area.styles.styles.size.full_width_at', 'design.file_upload.multi.drop_area.styles.styles', 'design.file_upload.multi.drop_area.button.background.image', 'design.file_upload.multi.drop_area.button.background.overlay.image', 'design.file_upload.multi.drop_area.button.background.image_settings.unset_image_at', 'design.file_upload.multi.drop_area.button.background.image_settings.size', 'design.file_upload.multi.drop_area.button.background.image_settings.height', 'design.file_upload.multi.drop_area.button.background.image_settings.repeat', 'design.file_upload.multi.drop_area.button.background.image_settings.position', 'design.file_upload.multi.drop_area.button.background.image_settings.left', 'design.file_upload.multi.drop_area.button.background.image_settings.top', 'design.file_upload.multi.drop_area.button.background.image_settings.attachment', 'design.file_upload.multi.drop_area.button.background.image_settings.custom_position', 'design.file_upload.multi.drop_area.button.background.image_settings.width', 'design.file_upload.multi.drop_area.button.background.overlay.image_settings.custom_position', 'design.file_upload.multi.drop_area.button.background.image_size', 'design.file_upload.multi.drop_area.button.background.overlay.image_size', 'design.file_upload.multi.drop_area.button.background.overlay.type', 'design.file_upload.multi.drop_area.button.background.image_settings', 'design.buttons.button_section.layout.horizontal.vertical_at', 'design.validation.validation_summary.background.image', 'design.validation.validation_summary.background.overlay.image', 'design.validation.validation_summary.background.image_settings.unset_image_at', 'design.validation.validation_summary.background.image_settings.size', 'design.validation.validation_summary.background.image_settings.height', 'design.validation.validation_summary.background.image_settings.repeat', 'design.validation.validation_summary.background.image_settings.position', 'design.validation.validation_summary.background.image_settings.left', 'design.validation.validation_summary.background.image_settings.top', 'design.validation.validation_summary.background.image_settings.attachment', 'design.validation.validation_summary.background.image_settings.custom_position', 'design.validation.validation_summary.background.image_settings.width', 'design.validation.validation_summary.background.overlay.image_settings.custom_position', 'design.validation.validation_summary.background.image_size', 'design.validation.validation_summary.background.overlay.image_size', 'design.validation.validation_summary.background.overlay.type', 'design.validation.validation_summary.background.image_settings'];
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return ['content.form.form', 'content.form.theme', 'content.form', 'content.form.tab_index', 'content.form.ajax', 'content.form.specify_default_field_values', 'content.form.field_values', 'content.form.field_values[].parameter', 'content.form.field_values[].value', 'design.wrapper.layout', 'design.wrapper', 'design.progress.steps.pending_step.step_number', 'design.progress.steps', 'content.label.custom_label', 'content.builder_label.custom_label', 'content.builder_label'];
    }
}
