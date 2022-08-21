<?php

require_once $_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . 'db.php';

$sql = 'CREATE TABLE comments (
    id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    email varchar(255) UNIQUE NOT NULL,
    name varchar(50) NOT NULL,
    message text NOT NULL
);';

$request = $connection->prepare($sql);
$request->execute();

