<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

switch ($page) {
	case 'amstrong':
		$data = amstrong();

		break;
	case 'nbrex':
		$data = nbrex();

		break;
	default:
		$data = null;

		break;
}

function amstrong()
{
	$data = [];
	for ($n = 0; $n < 1e5; ++$n) {
		$nArr = str_split($n);
		// aff($nArr);

		$Amstrong = 0;
		foreach ($nArr as $k => $v) {
			$Amstrong += $v ** (strlen($n));
		}

		// aff($Amstrong, 'AMSTRONG)');
		if ($n == $Amstrong) {
			$data[] = $n . (($n == $Amstrong) ? ' est ' : ' n\'est pas ') . 'un nombre Amstrong';
		}
	}
	// aff($data);
	return $data;
}

function nbrex()
{
	$x = 150;
	// aff($x, 'x');

	$p = htmlentities($_GET['p'] ?? '');

	// $p = 7;
	// $p = 150;
	// $p = 777;

	aff($p ?? 'vide', 'p');

	$ress = [
		-1 => 'Trop petit',
		0  => 'Gagné',
		1  => 'Trop grand',
	];

	if (is_numeric($p ?? null)) {
		$res = $ress[$p <=> $x];
		aff($res, 'res');

		if ('Gagné' != $res) {
			return '<div class="alert alert-danger"><strong>' . $res . '</strong></div>';
		}

		return '<div class="alert alert-success"><strong>' . $res . '</strong></div>';
	}

	return 'Jouer !';
}
