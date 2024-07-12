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

    public function detailToggle($show)
    {
        return $this->withMeta([
            'detail_toggle' => $show
        ]);
    }
}
