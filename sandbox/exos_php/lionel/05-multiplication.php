<?php

/**
 * (c) Online-FormaPRO - Cession 168 - 2022 - Lionel CÔTE.
 */

function multiplicationTable($n)
{
	$lg = '';
	for ($i = 1; $i++ < 12;) {
		$lg .= $n . ' x ' . $i . ' = ' . $n * $i . '<br>';
	}

	return $lg;
}

echo multiplicationTable(5);
