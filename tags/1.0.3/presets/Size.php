<?php

namespace Gravitydance;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

\Breakdance\Elements\PresetSections\PresetSectionsController::getInstance()->register(
    "Gravitydance\\Size",
    c(
        "size",
        __("Size", 'gravitydance'),
        [c(
        "height",
        __("Height", 'gravitydance'),
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "max_height",
        __("Max Height", 'gravitydance'),
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "width",
        __("Width", 'gravitydance'),
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "max_width",
        __("Max Width", 'gravitydance'),
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout', 'preset' => ['slug' => 'Gravitydance\\Size']]],
        false,
        false,
        [],
      ),
    true,
    ['codeHelp' => '{{ macros.gdsize(%%TWIGPATH%%) }}']
);

