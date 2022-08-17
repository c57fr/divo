<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

$notes  = [];

while (true) {
	$action = readline('Note ou \'f\' ? ');
	if ('f' === $action) {
		break;
	}
	$notes[] = (int) $action;
}
foreach ($notes as $note) {
	echo ' - ' . $note . "\n";
}
