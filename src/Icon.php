<?php

declare(strict_types=1);

namespace Suricate\Bootstrap5;

/**
 * Render a bootstrap icon
 * 
 * @author Mathieu LESNIAK <mathieu@lesniak.fr>
 */
class Icon
{
    /**
     * Render icon
     * 
     * @param string $type Icon name
     * 
     * @return string
     */
    public static function render(string $type): string
    {
        return '<i class="bi bi-' . $type . '"></i> ';
    }
}
