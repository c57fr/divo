<?php

die('Oki 21');
/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

const ROOT = './mysql/';
// On charge l'autoload qui contient les packages de composer
require_once './vendor/autoload.php';

// $loader = new \Twig\Loader\ArrayLoader([
// 	'index' => "Hello, {{ name }}<br><br>
//   {{ ['Rémi', 'Pierre', 'Paul', 'Jacques'] | join(', ',' & ') }} !",
// ]);
// $twig = new \Twig\Environment($loader);
// echo $twig->render('index', ['name' => 'Lionel']);

// On charge le loader Twig et on lui indique où se trouvent les templates HTML
$loader = new \Twig\Loader\FilesystemLoader('./views');
// On desactive le cache
$twig = new \Twig\Environment($loader, [
    'cache' => false,
    'debug' => true,
]);

include_once './parts/functions.php';

include_once './parts/req.php';

//2do Put MySQL code 4 DB in repository
// On charge la vue Twig
$template = $twig->load('./pages/page.htm');

$title = 'MySQL';

// On rend notre vue en lui passant des variables si besoin
echo $template->render(
    [
        'users' => $users,
        'titre' => $title,
    ]
);
