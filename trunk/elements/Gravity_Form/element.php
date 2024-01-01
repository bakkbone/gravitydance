<?php

namespace Gravitydance;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "Gravitydance\\GravityForm",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class GravityForm extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return '<svg aria-hidden="true" focusable="false"   class="svg-inline--fa fa-envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M448 64H64C28.65 64 0 92.65 0 128v256c0 35.35 28.65 64 64 64h384c35.35 0 64-28.65 64-64V128C512 92.65 483.3 64 448 64zM64 96h384c17.64 0 32 14.36 32 32v36.01l-195.2 146.4c-17 12.72-40.63 12.72-57.63 0L32 164V128C32 110.4 46.36 96 64 96zM480 384c0 17.64-14.36 32-32 32H64c-17.64 0-32-14.36-32-32V203.1L208 336c14.12 10.61 31.06 16.02 48 16.02S289.9 346.6 304 336L480 203.1V384z"></path></svg>';
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
        return 'Gravity Form';
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
        return ['backgroundColor' => 'var(--red600)', 'label' => 'Gravitydance', 'textColor' => 'var(--white)'];
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
        return false;
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
        "Wrapper",
        [getPresetSection(
      "EssentialElements\\size",
      "Size",
      "size",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      "Spacing",
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\background",
      "Background",
      "background",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\borders",
      "Borders",
      "borders",
       ['type' => 'popout']
     ), c(
        "default_alignment",
        "Default Alignment",
        [],
        ['type' => 'button_bar', 'layout' => 'inline', 'items' => ['0' => ['value' => 'left', 'text' => 'Align Left', 'icon' => 'AlignLeftIcon'], '1' => ['value' => 'center', 'text' => 'Align Center', 'icon' => 'AlignCenterIcon'], '2' => ['value' => 'right', 'text' => 'Align Right', 'icon' => 'AlignRightIcon']], 'buttonBarOptions' => ['size' => 'small', 'layout' => 'default']],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography_with_nothing",
      "Default Typography",
      "default_typography",
       ['type' => 'popout']
     )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "header",
        "Header",
        [c(
        "title",
        "Title",
        [getPresetSection(
      "EssentialElements\\typography_with_align_with_hoverable_color",
      "Typography",
      "typography",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      "Spacing",
      "spacing",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "description",
        "Description",
        [getPresetSection(
      "EssentialElements\\typography_with_align_with_hoverable_color",
      "Typography",
      "typography",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      "Spacing",
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
        "Required Indicators",
        [getPresetSection(
      "EssentialElements\\typography",
      "Indicator",
      "indicator",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography",
      "Legend",
      "legend",
       ['type' => 'popout']
     ), c(
        "legend_margin",
        "Legend Margin",
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
        "Progress",
        [c(
        "progress_bar",
        "Progress Bar",
        [getPresetSection(
      "EssentialElements\\spacing_all",
      "Wrapper Spacing",
      "wrapper_spacing",
       ['type' => 'popout']
     ), c(
        "title",
        "Title",
        [getPresetSection(
      "EssentialElements\\typography",
      "Typography",
      "typography",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      "Spacing",
      "spacing",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "percentage_bar",
        "Percentage Bar",
        [getPresetSection(
      "Gravitydance\\Size",
      "Size",
      "size",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\background",
      "Background",
      "background",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\background",
      "Progress",
      "progress",
       ['type' => 'popout']
     ), c(
        "percentage",
        "Percentage",
        [c(
        "show_percentage",
        "Show Percentage",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography_with_align",
      "Typography",
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
      "Wrapper Spacing",
      "wrapper_spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      "Step Spacing",
      "step_spacing",
       ['type' => 'popout']
     ), c(
        "pending_step",
        "Pending Step",
        [c(
        "step_number",
        "Step Number",
        [getPresetSection(
      "EssentialElements\\borders",
      "Borders",
      "borders",
       ['type' => 'popout']
     ), c(
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        true,
        [],
      ), getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      "Typography",
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      "Step Label",
      "step_label",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "active_step",
        "Active Step",
        [c(
        "step_number",
        "Step Number",
        [getPresetSection(
      "EssentialElements\\borders",
      "Borders",
      "borders",
       ['type' => 'popout']
     ), c(
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        true,
        [],
      ), getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      "Typography",
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      "Step Label",
      "step_label",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "completed_step",
        "Completed Step",
        [c(
        "step_number",
        "Step Number",
        [getPresetSection(
      "EssentialElements\\borders",
      "Borders",
      "borders",
       ['type' => 'popout']
     ), c(
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        true,
        [],
      ), c(
        "checkmark",
        "Checkmark",
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
      "Step Label",
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
      "Spacing",
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography_with_align_with_hoverable_color",
      "Typography",
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "sub_label",
        "Sub-Label",
        [getPresetSection(
      "EssentialElements\\spacing_all",
      "Spacing",
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography_with_align_with_hoverable_color",
      "Typography",
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "description",
        "Description",
        [getPresetSection(
      "EssentialElements\\spacing_all",
      "Spacing",
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography_with_align_with_hoverable_color",
      "Typography",
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "inputs",
        "Inputs",
        [getPresetSection(
      "EssentialElements\\spacing_all",
      "Spacing",
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\borders",
      "Borders",
      "borders",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\background",
      "Background",
      "background",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography",
      "Typography",
      "typography",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography",
      "Placeholder",
      "placeholder",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\borders",
      "Focus",
      "focus",
       ['type' => 'popout']
     )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "select",
        "Select",
        [getPresetSection(
      "EssentialElements\\borders",
      "Borders",
      "borders",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\background",
      "Background",
      "background",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography",
      "Typography",
      "typography",
       ['type' => 'popout']
     ), c(
        "option",
        "Option",
        [getPresetSection(
      "EssentialElements\\typography",
      "Typography",
      "typography",
       ['type' => 'popout']
     ), c(
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        false,
        [],
      ), c(
        "checked",
        "Checked",
        [getPresetSection(
      "EssentialElements\\typography",
      "Typography",
      "typography",
       ['type' => 'popout']
     ), c(
        "background",
        "Background",
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
        "checkbox",
        "Checkbox",
        [getPresetSection(
      "EssentialElements\\borders",
      "Borders",
      "borders",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\size",
      "Size",
      "size",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      "Spacing",
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\background",
      "Background",
      "background",
       ['type' => 'popout']
     ), c(
        "checked",
        "Checked",
        [getPresetSection(
      "EssentialElements\\background",
      "Background",
      "background",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\borders",
      "Borders",
      "borders",
       ['type' => 'popout']
     ), c(
        "checkmark",
        "Checkmark",
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
      ), getPresetSection(
      "EssentialElements\\borders",
      "Focus",
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
      "Borders",
      "borders",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\size",
      "Size",
      "size",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      "Spacing",
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\background",
      "Background",
      "background",
       ['type' => 'popout']
     ), c(
        "checked",
        "Checked",
        [getPresetSection(
      "EssentialElements\\background",
      "Background",
      "background",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\borders",
      "Borders",
      "borders",
       ['type' => 'popout']
     ), c(
        "checkmark",
        "Checkmark",
        [c(
        "color",
        "Color",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "size",
        "Size",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "border_radius",
        "Border Radius",
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
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\borders",
      "Focus",
      "focus",
       ['type' => 'popout']
     )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "section_break",
        "Section Break",
        [getPresetSection(
      "EssentialElements\\borders",
      "Borders",
      "borders",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      "Spacing",
      "spacing",
       ['type' => 'popout']
     ), c(
        "title",
        "Title",
        [getPresetSection(
      "EssentialElements\\spacing_all",
      "Spacing",
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography",
      "Typography",
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "description",
        "Description",
        [getPresetSection(
      "EssentialElements\\spacing_all",
      "Spacing",
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography",
      "Typography",
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline'],
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
        "Datepicker",
        [c(
        "icon_color",
        "Icon Color",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        true,
        [],
      ), c(
        "popup",
        "Popup",
        [getPresetSection(
      "EssentialElements\\borders",
      "Borders",
      "borders",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      "Spacing",
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\background",
      "Background",
      "background",
       ['type' => 'popout']
     ), c(
        "header",
        "Header",
        [c(
        "arrows",
        "Arrows",
        [c(
        "color",
        "Color",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\background",
      "Background",
      "background",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "dropdowns",
        "Dropdowns",
        [getPresetSection(
      "EssentialElements\\typography",
      "Typography",
      "typography",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      "Spacing",
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\borders",
      "Borders",
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
        "Weekday Header",
        [getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      "Typography",
      "typography",
       ['type' => 'popout']
     ), c(
        "background",
        "Background",
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
        "Date",
        [getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      "Typography",
      "typography",
       ['type' => 'popout']
     ), c(
        "background",
        "Background",
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
        "date_other_month_",
        "Date (Other Month)",
        [getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      "Typography",
      "typography",
       ['type' => 'popout']
     ), c(
        "background",
        "Background",
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
        "date_weekend_",
        "Date (Weekend)",
        [getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      "Typography",
      "typography",
       ['type' => 'popout']
     ), c(
        "background",
        "Background",
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
        "date_selected_",
        "Date (Selected)",
        [getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      "Typography",
      "typography",
       ['type' => 'popout']
     ), c(
        "background",
        "Background",
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
        "date_today_",
        "Date (Today)",
        [getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      "Typography",
      "typography",
       ['type' => 'popout']
     ), c(
        "background",
        "Background",
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
        "List",
        [c(
        "icons",
        "Icons",
        [c(
        "add",
        "Add",
        [c(
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        true,
        [],
      ), c(
        "border_radius",
        "Border Radius",
        [],
        ['type' => 'border_radius', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "icon",
        "Icon",
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
        "Delete",
        [c(
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        true,
        [],
      ), c(
        "border_radius",
        "Border Radius",
        [],
        ['type' => 'border_radius', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "icon",
        "Icon",
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
        "Column Headers",
        [getPresetSection(
      "EssentialElements\\spacing_all",
      "Spacing",
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography",
      "Typography",
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
      )];
    }

    static function contentControls()
    {
        return [c(
        "form",
        "Form",
        [c(
        "form",
        "Form",
        [],
        ['type' => 'dropdown', 'layout' => 'vertical', 'dropdownOptions' => ['populate' => ['path' => '', 'text' => '', 'value' => '', 'fetchDataAction' => 'gravitydance_get_forms', 'fetchContextPath' => '', 'refetchPaths' => []]]],
        false,
        false,
        [],
      ), c(
        "display_title",
        "Display Title",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "display_description",
        "Display Description",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "ajax",
        "Ajax",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "tab_index",
        "Tab Index",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['step' => 1]],
        false,
        false,
        [],
      ), c(
        "specify_default_field_values",
        "Specify Default Field Values",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "field_values",
        "Field Values",
        [c(
        "parameter",
        "Parameter",
        [],
        ['type' => 'text', 'layout' => 'vertical', 'autofocus' => true],
        false,
        false,
        [],
      ), c(
        "value",
        "Value",
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
        return ['0' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '1' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '2' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '3' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '4' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '5' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '6' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '7' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '8' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '9' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '10' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '11' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '12' => ['accepts' => 'image_url', 'path' => 'design.wrapper.background.layers[].image'], '13' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '14' => ['accepts' => 'image_url', 'path' => 'design.progress_bar.percentage_bar.progress.layers[].image'], '15' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '16' => ['accepts' => 'image_url', 'path' => 'design.inputs.text_and_textarea.background.layers[].image'], '17' => ['accepts' => 'image_url', 'path' => 'design.inputs.background.layers[].image'], '18' => ['accepts' => 'image_url', 'path' => 'design.inputs.select.background.layers[].image'], '19' => ['accepts' => 'image_url', 'path' => 'design.inputs.select.option.background.layers[].image'], '20' => ['accepts' => 'image_url', 'path' => 'design.checkbox.background.layers[].image'], '21' => ['accepts' => 'image_url', 'path' => 'design.checkbox.checked.background.layers[].image'], '22' => ['accepts' => 'image_url', 'path' => 'design.datepicker.popup.background.layers[].image'], '23' => ['accepts' => 'image_url', 'path' => 'design.datepicker.popup.header.arrows.background.layers[].image'], '24' => ['accepts' => 'image_url', 'path' => 'design.datepicker.popup.weekday_header.background.layers[].image']];
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
        return ['content.form.theme', 'content.form', 'design.progress_bar.percentage_bar.background.image', 'design.progress_bar.percentage_bar.background.overlay.image', 'design.progress_bar.percentage_bar.background.image_settings.unset_image_at', 'design.progress_bar.percentage_bar.background.image_settings.size', 'design.progress_bar.percentage_bar.background.image_settings.height', 'design.progress_bar.percentage_bar.background.image_settings.repeat', 'design.progress_bar.percentage_bar.background.image_settings.position', 'design.progress_bar.percentage_bar.background.image_settings.left', 'design.progress_bar.percentage_bar.background.image_settings.top', 'design.progress_bar.percentage_bar.background.image_settings.attachment', 'design.progress_bar.percentage_bar.background.image_settings.custom_position', 'design.progress_bar.percentage_bar.background.image_settings.width', 'design.progress_bar.percentage_bar.background.overlay.image_settings.custom_position', 'design.progress_bar.percentage_bar.background.image_size', 'design.progress_bar.percentage_bar.background.overlay.image_size', 'design.progress_bar.percentage_bar.background.overlay.type', 'design.progress_bar.percentage_bar.background.image_settings', 'design.wrapper.layout.horizontal.vertical_at', 'design.inputs.text_and_textarea.background.image', 'design.inputs.text_and_textarea.background.overlay.image', 'design.inputs.text_and_textarea.background.image_settings.unset_image_at', 'design.inputs.text_and_textarea.background.image_settings.size', 'design.inputs.text_and_textarea.background.image_settings.height', 'design.inputs.text_and_textarea.background.image_settings.repeat', 'design.inputs.text_and_textarea.background.image_settings.position', 'design.inputs.text_and_textarea.background.image_settings.left', 'design.inputs.text_and_textarea.background.image_settings.top', 'design.inputs.text_and_textarea.background.image_settings.attachment', 'design.inputs.text_and_textarea.background.image_settings.custom_position', 'design.inputs.text_and_textarea.background.image_settings.width', 'design.inputs.text_and_textarea.background.overlay.image_settings.custom_position', 'design.inputs.text_and_textarea.background.image_size', 'design.inputs.text_and_textarea.background.overlay.image_size', 'design.inputs.text_and_textarea.background.overlay.type', 'design.inputs.text_and_textarea.background.image_settings', 'design.inputs.select.option.background.image', 'design.inputs.select.option.background.overlay.image', 'design.inputs.select.option.background.image_settings.unset_image_at', 'design.inputs.select.option.background.image_settings.size', 'design.inputs.select.option.background.image_settings.height', 'design.inputs.select.option.background.image_settings.repeat', 'design.inputs.select.option.background.image_settings.position', 'design.inputs.select.option.background.image_settings.left', 'design.inputs.select.option.background.image_settings.top', 'design.inputs.select.option.background.image_settings.attachment', 'design.inputs.select.option.background.image_settings.custom_position', 'design.inputs.select.option.background.image_settings.width', 'design.inputs.select.option.background.overlay.image_settings.custom_position', 'design.inputs.select.option.background.image_size', 'design.inputs.select.option.background.overlay.image_size', 'design.inputs.select.option.background.overlay.type', 'design.inputs.select.option.background.image_settings', 'design.datepicker.popup.weekday_header.background.image', 'design.datepicker.popup.weekday_header.background.overlay.image', 'design.datepicker.popup.weekday_header.background.image_settings.unset_image_at', 'design.datepicker.popup.weekday_header.background.image_settings.size', 'design.datepicker.popup.weekday_header.background.image_settings.height', 'design.datepicker.popup.weekday_header.background.image_settings.repeat', 'design.datepicker.popup.weekday_header.background.image_settings.position', 'design.datepicker.popup.weekday_header.background.image_settings.left', 'design.datepicker.popup.weekday_header.background.image_settings.top', 'design.datepicker.popup.weekday_header.background.image_settings.attachment', 'design.datepicker.popup.weekday_header.background.image_settings.custom_position', 'design.datepicker.popup.weekday_header.background.image_settings.width', 'design.datepicker.popup.weekday_header.background.overlay.image_settings.custom_position', 'design.datepicker.popup.weekday_header.background.image_size', 'design.datepicker.popup.weekday_header.background.overlay.image_size', 'design.datepicker.popup.weekday_header.background.overlay.type', 'design.datepicker.popup.weekday_header.background.design.layout.horizontal.vertical_at', 'design.datepicker.popup.weekday_header.background.image_settings', 'design.datepicker.popup.weekday_header.background.type'];
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return ['content.form.form', 'content.form.theme', 'content.form', 'content.form.tab_index', 'content.form.ajax', 'content.form.specify_default_field_values', 'content.form.field_values', 'content.form.field_values[].parameter', 'content.form.field_values[].value', 'design.wrapper.layout', 'design.wrapper', 'design.progress.steps.pending_step.step_number', 'design.progress.steps'];
    }
}
