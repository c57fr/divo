<?php

function getComments() {
    require $_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR .'/db.php';
    $sql = "SELECT * FROM comments";

    $request = $connection->query($sql);
    $result = $request->fetchAll();

    return $result;
}

function insertComment(string $name, string $email, string $message) : bool {
    require $_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR .'/db.php';
    $sql = "INSERT INTO comments (name, message, email) VALUES (:name, :message, :email)";

    $request = $connection->prepare($sql);

    $request->bindValue(':name', $name, PDO::PARAM_STR);
    $request->bindValue(':message', $message, PDO::PARAM_STR);
    $request->bindValue(':email', $email, PDO::PARAM_STR);

    $request->execute();

    return true;
}

function getCommentByEmail(string $email) {
    require $_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR .'/db.php';
    $sql = "SELECT count(id) FROM comments WHERE email = :email";

    $request = $connection->prepare($sql);

    $request->bindValue(':email', $email, PDO::PARAM_STR);

    $request->execute();
    $result = $request->fetchColumn();

    return !! $result;
}
