<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

define('DMN', dirname($_SERVER['SCRIPT_NAME']).'/');
define('URI', strtolower($_SERVER['REQUEST_URI']));
// aff(DMN, 'DMN');
// aff(URI, 'URI');
// define('URI','https://divo/php/tests/php/router/1');

$validPages = ['home', 'pier', 'pol', 'jack', 1, 2];

$uri  = explode('/', URI);
// aff(count($uri), 'cpt()');
$page = array_pop($uri) ?: 'home';
$uri  = implode('/', $uri) . '/';

if (in_array($page, $validPages)) {
	if (is_numeric($page)) {
		$page = './user/user' . $page;
	}
} else {
	$page = '404';
}

// aff($page, 'page');
// $affUri = '<p class="ar">URI : ' . URI . '</p>';
