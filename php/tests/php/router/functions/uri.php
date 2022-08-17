<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

// $uri = $uri_ori = strtolower($_SERVER['REQUEST_URI'] ?? '/');

define('ROOT', $_SERVER['HTTP_HOST'] . '/');
define('URI', strtolower($_SERVER['REQUEST_URI']));
// define('URI','https://divo/php/tests/php/router/1');
$validPages = ['home', 'pier', 'pol', 'jack', 1, 2];

$prof = '';
$uri  = explode('/', URI);
// aff(count($uri), 'cpt()');
$page = array_pop($uri) ?: 'home';
$uri  = implode('/', $uri) . '/';
aff(dirname($uri), 'Dirname uri');

// $arr = explode('/', $uri);
// array_shift($arr);

// aff($arr, 'Arr');

if (in_array($page, $validPages)) {
	if (is_numeric($page)) {
		aff($uri, 'uri');
		echo 'oui';
		$page = './user/user'.$page;
		$prof='./../';
	}
} else {
	$page = '404';
	$prof = '../';
}

aff($page, 'page');
// $affUri = '<p class="ar">URI : ' . URI . '</p>';
