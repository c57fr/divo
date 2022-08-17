<?php

require '../vendor/autoload.php';

require '../elements/header.php';
echo $_SERVER['REQUEST_URI'].'<hr>';
define('URI', $_SERVER['QUERY_STRING']);

if (URI == 'nc') {
    require 'views/contact.php';
} elseif (empty(URI)) {
    require 'views/home.php';
} else {
    require 'errors/404.php';
}

require '../elements/footer.php';

// dump($_SERVER);
