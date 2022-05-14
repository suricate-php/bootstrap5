<?php

declare(strict_types=1);

namespace Suricate\Bootstrap5;

/**
 * Render a bootstrap pagination
 * 
 * @author Mathieu LESNIAK <mathieu@lesniak.fr>
 */
class Pagination
{
    public static function render($data = [])
    {
        $nbPages = (int) dataGet($data, 'nb-pages', 1);
        $currentPage = (int) dataGet($data, 'page', 1);
        $link = dataGet($data, 'link', '');
        if ($nbPages === 1) {
            return;
        }
        $link .= '%s';
        $output = '<nav>' . "\n";
        $output .= '<ul class="pagination justify-content-center">' . "\n";

        if ($currentPage > 1) {
            $output .=
                str_replace(
                    '%s',
                    (string) ($currentPage - 1),
                    '<li class="page-item prev"><a class="page-link" href="' . $link . '">&laquo;</a></li>'
                );
        }

        if ($nbPages > 10) {
            for ($i = 1; $i <= 3; $i++) {
                if ($i == $currentPage) {
                    $output .=
                        str_replace(
                            '%s',
                            (string) $i,
                            '<li class="page-item active"><a class="page-link" href="#">' . $i . '</a></li>'
                        );
                } else {
                    $output .=
                        str_replace(
                            '%s',
                            (string) $i,
                            '<li class="page-item"><a class="page-link" href="' . $link . '">' . $i . '</a></li>'
                        );
                }
            }

            if ($currentPage >= 6) {
                $output .= '<li class="page-item disabled"><span class="page-link">...</span></li>';
            }

            for ($i = $currentPage - 1; $i <= $currentPage + 1; $i++) {
                if ($i <= 3 || $i >= $nbPages - 2) {
                    continue;
                }

                if ($i == $currentPage) {
                    $output .=
                        '<li class="active page-item"><a class="page-link" href="#">' . $i . '</a></li> ';
                } else {
                    $output .=
                        str_replace(
                            '%s',
                            (string) $i,
                            '<li class="page-item"><a class="page-link" href="' . $link . '">' . $i . '</a></li>'
                        );
                }
            }

            if ($currentPage <= $nbPages - 5) {
                $output .= '<li class="page-item disabled"><span class="page-link">...</span></li>';
            }

            for ($i = $nbPages - 2; $i <= $nbPages; $i++) {
                if ($i == $currentPage) {
                    $output .=
                        '<li class="page-item active"><a class="page-link">' . $i . '</a></li> ';
                } else {
                    $output .=
                        str_replace(
                            '%s',
                            (string) $i,
                            '<li class="page-item"><a class="page-link" href="' . $link . '">' . $i . '</a></li>'
                        );
                }
            }
        } else {
            for ($i = 1; $i <= $nbPages; $i++) {
                if ($i == $currentPage) {
                    $output .=
                        '<li class="page-item active"><a class="page-link">' . $i . '</a></li> ';
                } else {
                    $output .=
                        str_replace(
                            '%s',
                            (string) $i,
                            '<li class="page-item"><a class="page-link" href="' . $link . '">' . $i . '</a></li>'
                        );
                }
            }
        }

        if ($currentPage + 1 <= $nbPages) {
            $output .=
                str_replace(
                    '%s',
                    (string) ($currentPage + 1),
                    '<li class="page-item next"><a class="page-link" href="' . $link . '">&raquo;</a></li>'
                );
        }
        $output .= '</ul>';
        $output .= '</nav>';

        return $output;
    }
}
