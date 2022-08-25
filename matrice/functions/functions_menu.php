<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

function nav_item(string $title, string $linkClass = '')
{
	$classe = 'nav-link';
	// aff($_SERVER['SCRIPT_NAME'], 'SN');
	$link = strtolower($title);
	// aff($file, 'file');
	// if ($_SERVER['SCRIPT_NAME'] === DMN . $file) {
	// 	$classe .= ' active';
	// }

	return <<<HTML
    <li class="{$linkClass}">
      <a class="{$classe}" aria-current="page" href="./{$link}">{$title}</a>
    </li>
HTML;
}

function nav_menu(string $linkClass = ''): string
{
	return nav_item('Accueil', $linkClass) . nav_item('Jeux', $linkClass) . nav_item('Contact', $linkClass);
}

$nav = [
	'item' => nav_menu(),
	'menu' => nav_menu('nav_item'),
];

// aff($nav);
