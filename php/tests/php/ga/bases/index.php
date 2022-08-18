<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

include_once '../functions/functions.php';

function repondre_oui_non($q)
{
	while (true) {
		$rep = readline($q);
		if ('n' === $rep) {
			return false;
		}
	}
}

$resultat = repondre_oui_non('Voulez-vous continuer (o/n) ? ');

var_dump($resultat);
