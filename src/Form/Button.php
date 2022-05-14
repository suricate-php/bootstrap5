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
     * @param string $name           input name
     * @param string $value          input value
     * @param array  $htmlAttributes FormItem html attributes
     * @param string $type           type (button or submit)
     * 
     * @return void
     */
    public static function render(
        string $name,
        string $value,
        array $htmlAttributes = [],
        string $type = 'button'
    ): string {
        if (isset($htmlAttributes['class'])) {
            $htmlAttributes['class'] = 'btn ' . $htmlAttributes['class'];
        } else {
            $htmlAttributes['class'] = 'btn';
        }

        if ($type === 'submit') {
            return FormItem::submit($name, $value, null, $htmlAttributes);
        }

        return FormItem::button($name, $value, null, $htmlAttributes);
    }
}
