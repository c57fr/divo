<?php

$uname = ($_POST['username']??'');
$pw = ($_POST['password']??'');

function checkIfUserIsAuthenticated($uname, $pw)
{
	$username = 'admin';
	$password = '$2y$10$aBQ8EO3yTDaR/QW/7XCWFuZwtsrQxurJY6KuVCGWfPMiqCoOhB2tm';
    
    return ($uname==$username && password_verify($pw, $password));
}

$isAuthenticated = checkIfUserIsAuthenticated($uname, $pw);

if (!$isAuthenticated) {
	?>

<form action="07-auth.php" method='POST'>
    <label for="username">Pseudo</label>
    <input type="text" name="username"><br><br>

    <label for="password">Mot de passe</label>
    <input type="password" name="password"><br><br>
    <input type="submit">
</form>

<?php
} else {
	?>
<p>
    Vous êtes connecté.
</p>
<?php
}
