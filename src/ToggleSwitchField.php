<?php

namespace Naif\ToggleSwitchField;

use Laravel\Nova\Fields\Field;

class ToggleSwitchField extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'toggle-switch-field';

    public function toggleAlign($align = 'left')
    {
        $align = 'text-'.$align;
        return $this->withMeta([
            'toggle_align' => $align
        ]);
    }

    public function color($color)
    {
        if (isset($color)) {
            $isColorHexCode = preg_match('/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/', $color) === 1;
            if ($isColorHexCode) {
                return $this->withMeta([
                    'color' => $color
                ]);
            }
            return $this->withMeta([
                'color' => '#3AB95A'
            ]);
        }
    }

    public function indexToggle($show)
    {
        return $this->withMeta([
            'index_toggle' => $show
        ]);
    }
}
