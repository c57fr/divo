<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=
  , initial-scale=1.0">
  <title>Twig</title>
  <script>
  //<![CDATA[
  document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.27.10'><\/script>"
    .replace(
      "HOST", location.hostname));
  //]]>
  </script>
</head>

<body>
  <?php

  // https://twig.symfony.com/doc/3.x/

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
  ]);

  // On charge la vue Twig
  $template = $twig->load('pages/page.htm');

  include_once ('./parts/apotres.php');
  // On rend notre vue en lui passant des variables si besoin
  echo $template->render(['arr' => $apotres]);

  ?>
</body>

</html>