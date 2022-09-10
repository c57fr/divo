<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

define('DS', DIRECTORY_SEPARATOR);
define('DMN', dirname($_SERVER['SCRIPT_NAME']) . DS);
define('URI', strtolower($_SERVER['REQUEST_URI']));
aff(DS, 'DS');
aff(DMN, 'DMN');
aff(URI, 'URI');

$validPages = [
	'Accueil',
	'Jeux',
	'Amstrong',
	'Nbre_x',
	'Users',
	'Contact',
];

$uri = explode('/', URI);
// aff(count($uri), 'cpt()');
$page    = array_pop($uri) ?: 'accueil';
$pagesup = (count($uri) >= 3) ? array_pop($uri) : '';
// aff($pagesup);
$page = parse_url($page, PHP_URL_PATH);
$uri  = implode('/', $uri) . '/';

$params = $_GET ?? null;

aff($pagesup, 'PageSup');
aff($page, 'Page');

if (in_array(ucfirst($page), $validPages) && is_file('views/pages/' . $pagesup . '/' . $page . '.twig')) {
	if ('jeux' == $pagesup) {
		include '../controllers/traitement_jeux.php';
	}

	if ('contact' == $page) {
		$data = 'Johnny';
	}
} else {
	$page = '404';
}

// aff($params);

// if (in_array($page, $validPages)) {
// 	if (is_numeric($page)) {
// 		$page = './user/user' . $page;
// 	}
// } else {
// 	$page = '404';
// }

// $affUri = '<p class="ar">URI : ' . URI . '</p>';
