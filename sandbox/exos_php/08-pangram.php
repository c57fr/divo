<?php

$word = null;

$isPangram= false;

?>

<form action="08-pangram.php">
    <label for="word"></label>
    <input type="text" id="word">
    <input type="submit">
</form>

<?php
if(!$word || !$isPangram)  {
?>
    <p>
        Le mot n'est pas un pangramme.
    </p>
<?php

} else {
    ?>
<p>
    Le mot est un pangramme.
</p>
<?php
}
