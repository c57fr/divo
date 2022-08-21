<?php

session_start();

if(
    !empty($_POST['name'])
    && !empty($_POST['email'])
    && !empty($_POST['message'])
) {
    require_once $_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . '/models/comments.php';

    $emailAlreadyExists = getCommentByEmail($_POST['email']);

    if($emailAlreadyExists) {
        $_SESSION['message'] = 'Erreur de formulaire : L\'email existe déjà';
    } else {
        $_SESSION['message'] = 'Message posté';
        $comments = insertComment($_POST['name'], $_POST['email'], $_POST['message']);
    }
} else {
    $_SESSION['message'] = 'Erreur de formulaire';
}

header("Location: /");
