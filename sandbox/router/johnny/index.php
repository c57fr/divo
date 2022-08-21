<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

$uri = $_SERVER['REQUEST_URI'];

// on déclare toutes nos routes
const ROUTING = [
	''            => '/home.php',
	'/products'   => 'products/list.php',
	'/products/*' => 'products/show.php',
	'/users/*'    => 'users/show.php',
	'/users'      => 'users/list.php',
	'/errors'     => 'errors/404.php',
];

function getMatchAndParamFromUri(string $uri): array
{
	// On découpe la chaine de l'URI en tableau
	$path = preg_split('#/#', $uri);

	// matching va contenir la chaine que l'on a trouvé
	// en substituant le param s'il y en a un dans l'URI
	$matching = '';

	// param contiendra la parametre potentiel
	$param = '';

	// on boucle sur notre URI découpé
	foreach ($path as $p) {
		// si le morceau d'URI est un numériaue alors c'est un ID, et donc
		// c'est un param
		if (is_numeric($p)) {
			// on le stock dans notre variable dédié
			$param = $p;

			// on le substitue par une étoile pour
			// matcher avec les routes déclarées
			$p = '*';
		}

		// on reconstitue la chaine
		$matching .= $p . '/';
	}

	// on retourne l'URI reconstitué en supprimant le slash finla
	// et on retourne le param
	return [rtrim($matching, '/'), $param];
}

function getErrorIfNotExists(string $matching): string
{
	// si la route qu'on passe dans l'URI n'existe pas
	// on indique aue notre route est une page d'erreur
	if (!array_key_exists($matching, ROUTING)) {
		$matching = '/errors';
	}

	return $matching;
}

// on récupère la route sans param et le param s'il y en avait un
list($matching, $param) = getMatchAndParamFromUri($uri);

// on regarde si la route existe
$matching = getErrorIfNotExists($matching);

// on inclue la page selon le tableau associatif
include ROUTING[$matching];
