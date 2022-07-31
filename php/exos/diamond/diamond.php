<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

$letter = 'e';

if (!function_exists('aff')) {
	function aff($var, $txt = null)
	{
		echo '<pre>' . (($txt) ? $txt . ' : ' : '');
		var_dump($var);
		echo '</pre>';
	}
}

/** Répète n fois le '-'
 *
 * @param mixed $n
 */
function srn($n)
{
	return str_repeat(' - ', $n);
}

function diamond(string $letter): array
{	
	echo '<h1 class="centered">' . strtoupper($letter) . '</h1><hr>';
	$letter = strtoupper($letter);
	
	$alpha  = range('A', 'Z');
	if (in_array($letter, $alpha)) {
		
		$k      = array_search($letter, $alpha);
		aff(strtoupper($letter) . ' - ' . $k, 'Letter - Key.');
		
		$alpha = array_slice($alpha, 0, $k + 1);
		
		$n = ($k * 2 - 1); // Nbre de points
		$i = 0;
		while ($k--) {
			$arrL[] = srn($i) . $alpha[$k + 1] . srn($n - $i * 2) . $alpha[$k + 1] . srn($i) . '<br>';
		++$i;
	}
	$arrL[] = srn($i) . $alpha[$k + 1] . srn($i) . '<br>';
	
	$arrH = $arrL;
	array_shift($arrH);
	$arrH = array_reverse($arrH);
}

	return array_merge($arrH, $arrL);
}

echo join('<br>', diamond($letter));
