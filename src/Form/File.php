<?php

declare(strict_types=1);

namespace Suricate\Bootstrap5\Form;

use Suricate\FormItem;

/**
 * Render a bootstrap input file
 * 
 * @author Mathieu LESNIAK <mathieu@lesniak.fr>
 */
class File
{
    /**
     * Bootstrap input file
     *
     * @param string $name           input name
     * @param array  $htmlAttributes form item htmlAttributes
     *
     * @return string
     */
    public static function render(string $name, array $htmlAttributes = []): string
    {
        $label = isset($htmlAttributes['label']) ? $htmlAttributes['label'] : '';
        if (isset($htmlAttributes['class'])) {
            $htmlAttributes['class'] = 'form-control ' . $htmlAttributes['class'];
        } else {
            $htmlAttributes['class'] = 'form-control';
        }
        $output = '<div class="form-group mb-3">';
        $output .= FormItem::file($name, $label, $htmlAttributes);
        $output .= '</div>';

        return $output;
    }
}
