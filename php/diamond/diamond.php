<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

$letter = 'c';

function diamond(string $letter): array
{
	// echo '<h1>' . strtoupper($letter) . '</h1><hr>';
	$alpha = range('a', 'z');
	$k     = array_search($letter, $alpha);
	// aff($k, 'Key.');
	while ($k) {
		echo $alpha[$k-1] . ' - ' . ($k*2-1) . '<br>';
		--$k;
	}

	exit;
	if (!in_array(strtolower($letter), ['a..z'])) {
		// echo 'on peut pas';
	}
	// echo 'on peut ';

	return ['A'];
}

// aff(diamond('c'));
diamond('e');