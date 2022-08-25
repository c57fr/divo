<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

function nav_item(string $file, string $title, string $linkClass = '')
{
	$classe = 'nav-link';
	aff($_SERVER['SCRIPT_NAME'], 'SN');
	if ($_SERVER['SCRIPT_NAME'] === '/matrice/public/' . $file) {
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

$nav_item = nav_menu('nav_item');
$nav_menu = nav_menu('nav_item');
aff($nav_item);
aff($nav_menu);
