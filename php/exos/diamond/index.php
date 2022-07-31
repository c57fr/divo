<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Diamond</title>
	<script>
		//<![CDATA[
		document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.27.10'><\/script>"
			.replace(
				"HOST", location.hostname));
		//]]>
	</script>
	<link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>

	<main class="diamond center">
		<?php
	function aff($var, $txt = null)
	{
		echo '<pre>' . (($txt) ? $txt . ' : ' : '');
		var_dump($var);
		echo '</pre>';
	}
	include_once 'diamond.php'; ?>
	</main>

</body>

</html>