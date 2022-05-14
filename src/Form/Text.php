<?php

declare(strict_types=1);

namespace Suricate\Bootstrap5\Form;

use Suricate\FormItem;

/**
 * Render a bootstrap input text
 * 
 * @author Mathieu LESNIAK <mathieu@lesniak.fr>
 */
class Text
{
    /**
     * Bootstrap input text
     *
     * @param string $name     input name
     * @param string $value    input value
     * @param array  $itemData form item params
     * 
     * @return string
     */
    public static function render(string $name, $value, $itemData = []): string
    {
        $label = isset($itemData['label']) ? $itemData['label'] : '';
        if (isset($itemData['class'])) {
            $itemData['class'] = 'form-control ' . $itemData['class'];
        } else {
            $itemData['class'] = 'form-control';
        }

        $output = '<div class="mb-3">';
        $output .= FormItem::text($name, $value, $label, $itemData);
        $output .= '</div>';

        return $output;
    }
}
