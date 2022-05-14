<?php

declare(strict_types=1);

namespace Suricate\Bootstrap5;

/**
 * Render a bootstrap alert
 * 
 * @author Mathieu LESNIAK <mathieu@lesniak.fr>
 */
class Alert
{
    /**
     * Render alert widget
     *
     * @param string      $content Alert text
     * @param string      $level   Alert level according to bootstrap color scheme
     * @param string|null $icon    Icon to display in alert, nullable
     * 
     * @return string
     */
    public static function alert(string $content, $level = 'success', $icon = null): string
    {
        $output = '<div class="alert alert-' . $level . '" role="alert">';
        if ($icon !== null) {
            $output .= Icon($icon);
        }
        $output .= $content;
        $output .= '</div>';

        return $output;
    }
}
