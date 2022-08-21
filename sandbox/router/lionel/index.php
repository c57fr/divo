<!DOCTYPE html>
<html lang="fr">
<?php

  require 'functions/functions.php';
include_once 'functions/uri.php';

?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Router</title>
  <!--
	<script>
		//<![CDATA[
		document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.27.10'><\/script>"
			.replace(
				"HOST", location.hostname));
		//]]>
	</script>
  -->
  <link rel="icon" href="./" <?php echo DMN; ?>"favicon.ico">
  <link rel="stylesheet" href="<?php echo DMN; ?>assets/css/style.css">

<body>

  <?php

  include_once 'parts/nav.php';

?>

  <main>
    <?php
		include './page/' . $page . '.php';
    ?>

</body>

</html>