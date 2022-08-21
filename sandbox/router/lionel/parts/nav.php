<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

echo '<nav><a href=' . DMN . '>Accueil</a>';

$links = ['Pier', 'Pol', 'Jack'];

foreach ($links as $link) {
	echo ' <a href="' . strtolower($link) . '">' . $link . '</a>';
}
echo '<a href="./user/1">User 1</a>';
echo '<a href="./user/2">User 2</a>';

echo '</nav>';
