<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

$x = 150;
aff($x, 'x');

$p = htmlentities($_GET['p']??'');

$p = 7;
$p = 150;
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
  if ($res!='Gagné'){
    echo '<div class="alert alert-danger"><strong>'.$res.'</strong></div>';
  } else {
    echo '<div class="alert alert-success"><strong>'.$res.'</strong></div>';
  }
} else {
	echo 'Jouer !';
}
