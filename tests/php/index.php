<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script>
  //<![CDATA[
  document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.27.10'><\/script>"
    .replace(
      "HOST", location.hostname));
  //]]>
  </script>
  <link rel="stylesheet" href="../style.css">
</head>

<body>

  <?php
	include_once 'nav.php';
  include_once 'uri.php';
  ?>

  <main>
    <h1>Router</h1>

    <?php if ('/' == $uri) {
    	echo '<h2>Page Accueil</h2>';
    } else {
    	if (file_exists($inc)) {
    		include $inc;
    	} else {
    		echo '<p class="err404">ERROR 404</p>';
    	}
    }
	  echo $affUri;
  ?>
  </main>

</body>

</html>