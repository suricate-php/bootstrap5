<?php

declare(strict_types=1);

namespace Suricate\Bootstrap5\Form;

use Suricate\FormItem;

/**
 * Render a bootstrap textarea
 * 
 * @author Mathieu LESNIAK <mathieu@lesniak.fr>
 */
class Textarea
{

    /**
     * Bootstrap textarea
     *
     * @param string $name           textarea name
     * @param string $value          textarea value
     * @param array  $htmlAttributes formitem htmlAttributes
     *
     * @return string
     */
    public static function render(
        string $name,
        string $value,
        array $htmlAttributes = []
    ): string {
        $label = $htmlAttributes['label'] ?: '';

        if (isset($htmlAttributes['class'])) {
            $htmlAttributes['class'] = 'form-control ' . $htmlAttributes['class'];
        } else {
            $htmlAttributes['class'] = 'form-control';
        }

        $output = '<div class="form-group mb-3">';
        $output .= FormItem::textarea($name, $value, $label, $htmlAttributes);
        $output .= '</div>';

        return $output;
    }
}
