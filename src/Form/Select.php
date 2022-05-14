<?php

declare(strict_types=1);

namespace Suricate\Bootstrap5\Form;

use Suricate\FormItem;

/**
 * Render a bootstrap select
 * 
 * @author Mathieu LESNIAK <mathieu@lesniak.fr>
 */
class Select
{
    /**
     * Bootstrap select
     *
     * @param string $name            input name
     * @param array  $availableValues select available values
     * @param mixed  $value           current value
     * @param array  $itemData        formitem params
     *
     * @return string
     */
    public static function render(
        string $name,
        array $availableValues,
        mixed $value,
        array $itemData = []
    ): string {
        $label = isset($itemData['label']) ? $itemData['label'] : '';
        if (isset($itemData['class'])) {
            $itemData['class'] = 'form-select ' . $itemData['class'];
        } else {
            $itemData['class'] = 'form-select';
        }

        $output = '<div class="form-group mb-3">';
        $output .= FormItem::select(
            $name,
            $availableValues,
            $value,
            $label,
            $itemData
        );
        $output .= '</div>';

        return $output;
    }
}
