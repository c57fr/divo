<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

define('ROOT', $_SERVER['HTTP_HOST'] . '/');

$uri = $uri_ori = strtolower($_SERVER['REQUEST_URI'] ?? '/');

$arr = explode('/', $uri);
array_shift($arr);

aff($arr);

if ('/' !== $uri) {
	if (!(count($arr) - 1)) {
		$uri = substr($uri, 1);
		$uri = implode('', $arr) ?? 'index';
		include $uri . '.php';
	} else {
		include './user/user' . $arr[1] . '.php';
	}
}

echo '<p class="ar">URI : ' . $uri_ori . '</p>';