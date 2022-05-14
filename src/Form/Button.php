<?php

declare(strict_types=1);

namespace Suricate\Bootstrap5\Form;

use Suricate\FormItem;

/**
 * Render a bootstrap form button
 * 
 * @author Mathieu LESNIAK <mathieu@lesniak.fr>
 */
class Button
{
    /**
     * Bootstrap form button
     *
     * @param string $name     input name
     * @param string $value    input value
     * @param array  $itemData formitem params
     * @param string $type     type (button or submit)
     * 
     * @return void
     */
    public static function render(
        string $name,
        string $value,
        $itemData = [],
        $type = 'button'
    ): string {
        if (isset($itemData['class'])) {
            $itemData['class'] = 'btn ' . $itemData['class'];
        } else {
            $itemData['class'] = 'btn';
        }

        if ($type == 'submit') {
            return FormItem::button($name, $value, null, $itemData);
        }

        return FormItem::submit($name, $value, null, $itemData);
    }
}
