<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

define('DMN', dirname($_SERVER['SCRIPT_NAME']) . '/');
define('URI', strtolower($_SERVER['REQUEST_URI']));
// aff(DMN, 'DMN');
// aff(URI, 'URI');

$validPages = [
	'Accueil',
	'Jeux',
	'Amstrong',
	'NbreX',
	'User',
	'Contact',
];

$uri = explode('/', URI);
// aff(count($uri), 'cpt()');
$page = array_pop($uri) ?: 'accueil';
$pagesup=(count($uri)>=3) ? array_pop($uri) : '';
// aff($pagesup);
$page = parse_url($page, PHP_URL_PATH);
$uri  = implode('/', $uri) . '/';

$params = $_GET??null;


if ('jeux' == $pagesup) {
	include '../controllers/traitement_jeux.php';
}

if ('contact' == $page) {
	$data = 'Johnny';
}

// aff($params);

// if (in_array($page, $validPages)) {
// 	if (is_numeric($page)) {
// 		$page = './user/user' . $page;
// 	}
// } else {
// 	$page = '404';
// }

// aff($pagesup, 'PageSup');
// aff($page, 'Page');
// $affUri = '<p class="ar">URI : ' . URI . '</p>';
