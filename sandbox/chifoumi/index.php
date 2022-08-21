<!--

<form action="index.php" method="post">
    <label for="sign">Votre signe</label>
    <select name="sign" id="sign">
        <option value="random">Aléatoire</option>
        <option value="pierre">Pierre</option>
        <option value="feuille">Feuille</option>
        <option value="ciseaux">Ciseaux</option>
    </select>
    <input type="submit" value="Jouer">
</form>

-->

<?php

$_POST['sign'] = 'ciseaux';

require 'chifoumi.php';

const DUEL = [
	'pierre'  => 'ciseaux',
	'feuille' => 'pierre',
	'ciseaux' => 'feuille',
];

$sign = $_POST['sign'] ?? null;

if (is_null($sign)) {
	echo 'Selectionner votre signe';
	exit;
}

if ('random' === $sign) {
	$sign = generateSign();
}

if (!array_key_exists($sign, DUEL)) {
	echo "Le signe n'existe pas";
	exit;
}

$generated_sign = generateSign();

$result = fight($sign, $generated_sign);

$view = formatResult($result);

echo "Vous avez joué {$sign} <br>";
echo "L'ordinateur a joué {$generated_sign}";
echo $view;
