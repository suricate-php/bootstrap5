<?php

declare(strict_types=1);

namespace Suricate\Bootstrap5\Form;

use Suricate\FormItem;

/**
 * Render a bootstrap checkbox
 * 
 * @author Mathieu LESNIAK <mathieu@lesniak.fr>
 */
class Checkbox
{
    /**
     * Bootstrap checkbox
     *
     * @param string  $name     input name
     * @param mixed   $value    input value
     * @param boolean $checked  is it checked ?
     * @param array   $itemData formitem params
     *
     * @return string
     */
    public static function render(
        string $name,
        mixed $value,
        bool $checked,
        array $itemData = []
    ): string {
        $label = isset($itemData['label']) ? $itemData['label'] : '';
        unset($itemData['label']);

        if (isset($itemData['class'])) {
            $itemData['class'] = 'form-check-input ' . $itemData['class'];
        } else {
            $itemData['class'] = 'form-check-input';
        }

        $output = '<label class="form-check-label">';
        $output .= FormItem::checkbox($name, $value, $checked, '', $itemData);
        $output .= ' ' . $label;
        $output .= '</label>';

        return $output;
    }
}
