<?php

namespace Gravitydance;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

\Breakdance\Elements\PresetSections\PresetSectionsController::getInstance()->register(
    "Gravitydance\\Size",
    c(
        "size",
        "Size",
        [c(
        "height",
        "Height",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "max_height",
        "Max Height",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "width",
        "Width",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "max_width",
        "Max Width",
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
    ['codeHelp' => 'width: %%TWIG_PATH%%.width;;
max-width: %%TWIG_PATH%%.max_width;;
height: %%TWIG_PATH%%.height;;
max-height: %%TWIG_PATH%%.max_height;;']
);

