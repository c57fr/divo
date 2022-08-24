<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

function nav_item(string $file, string $title, string $linkClass = '')
{
    $classe = 'nav-link';
    if ($_SERVER['SCRIPT_NAME'] === '/php/tests/php/ga/html/' . $file) {
        $classe .= ' active';
    }

    return <<<HTML
    <li class="{$linkClass}">
      <a class="{$classe}" aria-current="page" href="./{$file}">{$title}</a>
    </li>
    HTML;
}

function nav_menu(string $linkClass = ''): string
{
    return nav_item('index.php', 'Accueil', $linkClass) . nav_item('jeu.php', 'Jeu', $linkClass) . nav_item('contact.php', 'Contact', $linkClass);
}
