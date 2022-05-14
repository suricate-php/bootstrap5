<?php

declare(strict_types=1);

namespace Suricate\Bootstrap5;

/**
 * Render a bootstrap panel (render by a card)
 * 
 * @author Mathieu LESNIAK <mathieu@lesniak.fr>
 */
class Panel
{

    /**
     * Render a panel
     *
     * @param string $title      panel title
     * @param string $content    panel content
     * @param string $titleAddon content added on right of the header
     * 
     * @return string
     */
    public static function render(string $title, string $content, string $titleAddon = ''): string
    {
        $output = '    <div class="card">';
        $output .= '        <div class="card-header d-flex justify-content-between">';
        $output .= '            <b>' . $title . '</b>';
        if ($titleAddon !== '') {
            $output .= $titleAddon;
        }
        $output .= '        </div>';
        $output .= '        <div class="card-body">';
        $output .= $content;
        $output .= '        </div>';
        $output .= '    </div>';

        return $output;
    }
}
