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
     * @param string  $name           input name
     * @param mixed   $value          input value
     * @param boolean $checked        is it checked ?
     * @param array   $htmlAttributes formitem htmlAttributes
     *
     * @return string
     */
    public static function render(
        string $name,
        mixed $value,
        bool $checked,
        array $htmlAttributes = []
    ): string {
        $label = isset($htmlAttributes['label']) ? $htmlAttributes['label'] : '';
        unset($htmlAttributes['label']);

        if (isset($htmlAttributes['class'])) {
            $htmlAttributes['class'] = 'form-check-input ' . $htmlAttributes['class'];
        } else {
            $htmlAttributes['class'] = 'form-check-input';
        }

        $output = '<label class="form-check-label">';
        $output .= FormItem::checkbox($name, $value, $checked, '', $htmlAttributes);
        $output .= ' ' . $label;
        $output .= '</label>';

        return $output;
    }
}
