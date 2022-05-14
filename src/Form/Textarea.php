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
     * @param string $name     textarea name
     * @param string $value    textarea value
     * @param array  $itemData formitem params
     *
     * @return string
     */
    public static function render(string $name, string $value, array $itemData = []): string
    {
        $label = $itemData['label'] ?: '';

        if (isset($itemData['class'])) {
            $itemData['class'] = 'form-control ' . $itemData['class'];
        } else {
            $itemData['class'] = 'form-control';
        }

        $output = '<div class="form-group mb-3">';
        $output .= FormItem::textarea($name, $value, $label, $itemData);
        $output .= '</div>';

        return $output;
    }
}
