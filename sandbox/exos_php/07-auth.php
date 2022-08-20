<?php

$username = "admin";
$password = '$2y$10$aBQ8EO3yTDaR/QW/7XCWFuZwtsrQxurJY6KuVCGWfPMiqCoOhB2tm'; // passw0rd

function checkIfUserIsAuthenticated()

$isAuthenticated = checkIfUserIsAuthenticated();


if(!$isAuthenticated){
?>

<form action="07-auth.php">
    <label for="username"></label>
    <input type="text" id="username">
    
    <label for="password"></label>
    <input type="password" id="password">
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
