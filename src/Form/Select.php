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
     * @param array  $htmlAttributes  formitem params
     *
     * @return string
     */
    public static function render(
        string $name,
        array $availableValues,
        mixed $value,
        array $htmlAttributes = []
    ): string {
        $label = isset($htmlAttributes['label']) ? $htmlAttributes['label'] : '';
        if (isset($htmlAttributes['class'])) {
            $htmlAttributes['class'] = 'form-select ' . $htmlAttributes['class'];
        } else {
            $htmlAttributes['class'] = 'form-select';
        }

        $output = '<div class="form-group mb-3">';
        $output .= FormItem::select(
            $name,
            $availableValues,
            $value,
            $label,
            $htmlAttributes
        );
        $output .= '</div>';

        return $output;
    }
}
