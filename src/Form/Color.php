<?php

declare(strict_types=1);

namespace Suricate\Bootstrap5\Form;

use Suricate\FormItem;

/**
 * Render a bootstrap input color
 *
 * @author Mathieu LESNIAK <mathieu@lesniak.fr>
 */
class Color
{
    /**
     * Bootstrap input color
     *
     * @param string $name           input name
     * @param string $value          input value
     * @param array  $htmlAttributes form item params
     *
     * @return string
     */
    public static function render(string $name, $value, array $htmlAttributes = []): string
    {
        $label = isset($htmlAttributes['label']) ? $htmlAttributes['label'] : '';
        if (isset($htmlAttributes['class'])) {
            $htmlAttributes['class'] = 'form-control ' . $htmlAttributes['class'];
        } else {
            $htmlAttributes['class'] = 'form-control';
        }

        $output = '<div class="mb-3">';
        $output .= FormItem::color($name, $value, $label, $htmlAttributes);
        $output .= '</div>';

        return $output;
    }
}
