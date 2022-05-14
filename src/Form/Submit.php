<?php

declare(strict_types=1);

namespace Suricate\Bootstrap5\Form;

/**
 * Render a bootstrap form submit
 * 
 * @author Mathieu LESNIAK <mathieu@lesniak.fr>
 */
class Submit
{
    /**
     * Bootstrap submit
     *
     * @param string $name     input name
     * @param string $value    input value
     * @param string $type     tag type
     * @param array  $itemData formitem params
     * 
     * @return void
     */
    public static function submit(
        string $name,
        string $value,
        string $type = 'button',
        array $itemData = []
    ) {
        return Button::render($name, $value, $type, $itemData, 'submit');
    }
}
