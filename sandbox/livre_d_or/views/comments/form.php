<?php

session_start();

echo array_key_exists('message', $_SESSION)? $_SESSION['message']:'';

$_SESSION['message'] = '';

?>

<form method="POST" action="/controller/comments/form.php">
    <input type="email" placeholder="Email" name="email">
    <input type="text" placeholder="Nom" name="name">
    <textarea name="message" id="message" cols="30" rows="10"></textarea>
    <input type="submit" value="valider">
</form>
