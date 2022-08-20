<?php
$sentence = ($_POST['sentence'] ?? '');
// $sentence='Porte ce vieux Whisky au juge blond qui fume'; //z
$sentence = strtolower(trim($sentence));

function isPangram($sentence)
{
	$sentence = strtolower(trim($sentence));
	$alpha    = range('a', 'z');

	foreach ($alpha as $letter) {
		if (!strstr($sentence, $letter)) {
			return false;
		}
	}

	return true;
}
?>

<form action="08-pangram.php" method='POST'>
    <label for="sentence">Phrase</label>
    <input type="text" name="sentence"><br><br>
    <input type="submit">
</form>

<?php
if (!$sentence || !isPangram($sentence)) {
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
