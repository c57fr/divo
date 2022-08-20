<?php

/**
 * (c) Online-FormaPRO - Cession 168 - 2022 - Lionel CÔTE.
 */

$age    = 18;
$name   = 'Caroline';
$isMale = false;

echo $name . ' est un' . ($isMale ? ' homme ' : 'e femme') . ' ' . ($age > 17 ? 'majeur' : 'mineur') . ($isMale ? '' : 'e');

echo '<hr>';
// Tableau
$arr = [
	'',
	'Micro-séisme impossible à ressentir.',
	'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.',
	'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.',
	'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.',
	'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.',
	'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.',
	'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.',
	'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.',
	'Séisme capable de tout détruire sur une très vaste zone.',
];
unset($arr[0]);
// $arr : [Magnitude => Phase]

foreach ($arr as $key => $value) {
	echo $value . '<br>';
}

$magnitude = 7;
if ($magnitude) {
	echo $arr[$magnitude];
}

switch ($magnitude) {
	case 1:
		echo $arr[1];

		break;
	case 2:
		echo $arr[2];

		break;
	case 3:
		echo $arr[3];

		break;
	case 4:
		echo $arr[4];

		break;
	case 5:
		echo $arr[5];

		break;
	case 6:
		echo $arr[6];

		break;
	case 7:
		echo $arr[7];

		break;
	case 8:
		echo $arr[8];

		break;
	default:
		break;
}

echo match ($magnitude) {
	1       => $arr[1],
	2       => $arr[2],
	3       => $arr[3],
	4       => $arr[4],
	5       => $arr[5],
	6       => $arr[6],
	7       => $arr[7],
	8       => $arr[8],
	default => ''
};

// Ternary
// echo ($job === 'webmaster')?'Je crée des sites':'Je ne crée pas de site';

if ('webmaster' === $job) {
	echo 'Je crée des sites';
}
echo 'Je ne crée pas de site';

echo 21000 === $zip_code ? 'Je suis Dijonnais' : 'Je ne suis pas Dijonnais';

// Loop
for ($i = 0; ++$i < 10;) {
	echo $i;
}

$var = rand(1, 100);
for ($i = 0; $i++ < 20;) {
	$result = $i * $var;
	echo $result . '<br>';
}

$var = rand(1, 100);
for ($i = 100; $i-- > 10;) {
	$result = $i * $var;
	echo $result . '<br>';
}

for ($i = 1; $i < 10; $i += $i / 2) {
	echo $i . '<br>';
}

for ($i = 1; $i++ < 15;) {
	echo 'On y arrive presque<br>';
}

for ($i = 20; $i-- > 0;) {
	echo 'C\'est presque bon<br>';
}

for ($i = 1; $i < 100; $i += 15) {
	echo 'On tient le bon bout<br>';
}

for ($i = 200; $i > 0; $i -= 12) {
	echo $i . ' Enfin !!!!<br>';
}
