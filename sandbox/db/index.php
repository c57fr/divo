<?php

require_once 'db.php';

$queries = [
    'CREATE TABLE users (id INT NOT NULL AUTO_INCREMENT, name VARCHAR(255) NOT NULL UNIQUE, PRIMARY KEY (id))',
    'INSERT INTO users (name) VALUES ("jcharcosset")',
    // your own sql request
];

foreach ($queries as $query) {
    try {
        $statement = $connection->prepare($query);
        $statement->execute();
    } catch (Exception $e) {
        echo 'Erreur : ' . $e->getMessage() .'<br/>';
    }
}
