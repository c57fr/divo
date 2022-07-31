<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

$letter = 'm';

if (!function_exists('aff')) {
	function aff($var, $txt = null)
	{
		echo '<pre>' . (($txt) ? $txt . ' : ' : '');
		var_dump($var);
		echo '</pre>';
	}
}

/** Répète n fois le '-'.
 *
 * @param mixed $n
 */
function srn($n)
{
	return str_repeat(' - ', $n);
}

function diamond(string $letter): array
{
	echo '<h1 class="center">' . strtoupper($letter) . '</h1><hr>';
	$letter = strtoupper($letter);

	$alpha = range('A', 'Z');
	if (in_array($letter, $alpha)) {
		$k = array_search($letter, $alpha);

		$alpha = array_slice($alpha, 0, $k + 1);

		$n = ($k * 2 - 1); // Nbre de points
		$i = 0;
		while ($k--) {
			$arrL[] = srn($i) . $alpha[$k + 1] . srn($n - $i * 2) . $alpha[$k + 1] . srn($i) . '<br>';
			++$i;
		}
		$arrL[] = srn($i) . $alpha[$k + 1] . srn($i) . '<br>';
		++$i;

		$arrH = $arrL;
		array_shift($arrH);
		$arrH = array_reverse($arrH);
	} else {
		$arrH = [];
		$arrL = ['<p class="err">Seule une lettre doit-être donnée...</p>'];
	}

	return array_merge($arrH, $arrL);
}

echo join('<br>', diamond($letter));
