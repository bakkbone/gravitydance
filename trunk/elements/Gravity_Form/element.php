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
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "header",
        "Header",
        [getPresetSection(
      "EssentialElements\\typography_with_align_with_hoverable_color",
      "Title",
      "title",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography_with_align_with_hoverable_color",
      "Description",
      "description",
       ['type' => 'popout']
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
      ), c(
        "theme",
        "Theme",
        [],
        ['type' => 'dropdown', 'layout' => 'vertical', 'items' => ['0' => ['value' => 'orbital', 'text' => 'Orbital Theme (Recommended)'], '1' => ['text' => 'Gravity Forms 2.5 Theme', 'value' => 'gravity-theme']]],
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
        return ['0' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '1' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '2' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '3' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '4' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '5' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '6' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '7' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '8' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '9' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '10' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '11' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '12' => ['accepts' => 'image_url', 'path' => 'design.wrapper.background.layers[].image']];
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
        return ['content.form.theme', 'content.form', 'design.wrapper.layout.horizontal.vertical_at'];
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return ['content.form.form', 'content.form.theme', 'content.form', 'content.form.tab_index', 'content.form.ajax', 'content.form.specify_default_field_values', 'content.form.field_values', 'content.form.field_values[].parameter', 'content.form.field_values[].value', 'design.wrapper.layout', 'design.wrapper'];
    }
}
