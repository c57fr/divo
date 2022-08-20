<?php

// var_dump($_POST);
// echo '<hr>';
// $key='The Online \'s cession 168 will be the best because uses Git with Johnny C. !';

$sentence = ($_POST['sentence'] ?? '');
$key = ($_POST['key'] ?? '');
$status=($_POST['status'] ?? 0);
if ($status==2) {
    $status=0;
    unset($_POST['sentence']);
}

$ciphering = "AES-128-CTR";

if ($status <= 1) {
    $encryption = openssl_encrypt($sentence, $ciphering,
            $key,0,str_repeat('.',16));
}

if (!$status) {
?>

<form action="09-vigenere.php" name="crypt" method='POST'>
    <label for="sentence">Phrase</label>
    <input type="text" name="sentence"'><br><br>
    <label for="key">Clé</label>
    <input type="text" name="key"><br><br>
    <input type="hidden" name="status" value=1>
    <input type="submit">
</form>
<?php }
else { ?>

Votre phrase est : <?=$sentence ?>
<br>
Votre clé est : <?=$key ?>
<br>
Votre phrase cryptée est :<?=$encryption ?>

<hr>

Votre phrase cryptée est : <?=$encryption ?>
<br>
Votre phrase est :<?=$sentence ?>
<br>
Votre clé est :<?=$key ?>

<?php } ?>

<hr>
<form action="09-vigenere.php" name="reset" method='POST'>
    <input type="hidden" name="status" value=2>
    <button type="submit">Reset</button>
</form>
