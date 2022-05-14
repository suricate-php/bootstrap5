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
     * @param string $name     input name
     * @param array  $itemData form item params
     *
     * @return string
     */
    public static function render(string $name, $itemData = []): string
    {
        $label = isset($itemData['label']) ? $itemData['label'] : '';
        if (isset($itemData['class'])) {
            $itemData['class'] = 'form-control ' . $itemData['class'];
        } else {
            $itemData['class'] = 'form-control';
        }
        $output = '<div class="form-group mb-3">';
        $output .= FormItem::file($name, $label, $itemData);
        $output .= '</div>';

        return $output;
    }
}
