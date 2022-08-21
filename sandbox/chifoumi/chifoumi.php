<?php

function fight(mixed $sign, string $generated_sign): int
{
    if($sign === $generated_sign) {
        return 0;
    }

    if(DUEL[$sign] === $generated_sign) {
        return 1;
    }

    return -1;
}

function generateSign() : string
{
    return array_rand(DUEL);
}

function formatResult(int $result): string
{
    if($result === 0) {
        return '<h2>Egalité</h2>';
    }

    if($result === -1) {
        return '<h2>Perdu</h2>';
    }

    return '<h2>Gagné</h2>';
}