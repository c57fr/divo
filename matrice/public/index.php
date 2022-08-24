<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

// On charge l'autoload qui contient les packages de composer
include_once '../functions/functions.php';
require_once '../vendor/autoload.php';
// $loader = new \Twig\Loader\ArrayLoader([
// 	'index' => "Hello, {{ name }}<br><br>
//   {{ ['Rémi', 'Pierre', 'Paul', 'Jacques'] | join(', ',' & ') }} !",
// ]);
// $twig = new \Twig\Environment($loader);
// echo $twig->render('index', ['name' => 'Lionel']);

// On charge le loader Twig et on lui indique où se trouvent les templates HTML
$loader = new \Twig\Loader\FilesystemLoader('./views/pages/');
// On desactive le cache
$twig = new \Twig\Environment($loader, [
    'cache' => false,
    'debug' => true,
    ]);


// On charge la vue Twig
$template = $twig->load('./views/pages/home1.htm');
die('123456');

$title = 'Home';

// On rend notre vue en lui passant des variables si besoin
echo $template->render(
    [
        'titre' => $title,
    ]
);
