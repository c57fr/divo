<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

function fight(mixed $sign, string $generated_sign): int
{
	if ($sign === $generated_sign) {
		return 0;
	}

	if (DUEL[$sign] === $generated_sign) {
		return 1;
	}

	return -1;
}

function generateSign(): string
{
	// return array_rand(DUEL);
	return 'feuille';
}

function formatResult(int $result): string
{
	if (0 === $result) {
		return '<h2>Egalité</h2>';
	}

	if (-1 === $result) {
		return '<h2>Perdu</h2>';
	}

	return '<h2>Gagné</h2>';
}
