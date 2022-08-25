<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

include_once '../functions/functions.php';
include_once '../functions/router.php';
include_once '../functions/functions_menu.php';
// On charge l'autoload qui contient les packages de composer
require_once '../vendor/autoload.php';

// On charge le loader Twig et on lui indique où se trouvent les templates HTML
$loader = new \Twig\Loader\FilesystemLoader('views');
// On desactive le cache
$twig = new \Twig\Environment($loader, [
	'cache' => false,
	'debug' => true,
]);

// On charge la vue Twig
$template = $twig->load('./pages/' . $pagesup . '/' . $page . '.twig');
// aff($page);

// On rend notre vue en lui passant des variables si besoin
echo $template->render(
	[
		'nav'  => $nav,
		'data' => $data ?? null,
	]
);
