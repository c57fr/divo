<?php
$status=($_POST['status'] ?? 0);
if ($status==77) {
    $status=0;
    unset($_POST['word_1']);
    unset($_POST['word_2']);
}
$word_1 = $_POST['word_1']??'';
$word_2 = $_POST['word_2']??'';

/**
 * Tri d'une chaine.
 *
 * $w Chaine initiale
 *
 * @param mixed $w
 */
function tri($w)
{
	$w = str_split(strtolower(trim($w)));
	natcasesort($w);

	return implode($w);
}
/**
 * return bool
 */
function isAnagramm(...$words)
{  
    $words = array_map('tri', $words);
    return (bool) (1 == count(array_keys(array_flip($words))) ? 1 : 0);
}
if (empty($word_1) && empty($word_2)) {
?>

<form action="10-anagram.php" name="crypt" method='POST'>
    <label for="word_1"></label>
    <input type="text" name="word_1">
    <label for="word_2"></label>
    <input type="text" name="word_2">
    <input type="submit">
</form>

<?php } 
else {
?>
Le mot <?= $word_1 ?> et le mot <?= $word_2 ?> <?= (isAnagramm($word_1, $word_2)? 'sont':' ne sont pas ') ?> des anagrammes.
<hr>
<form action="10-anagram.php" name="reset" method='POST'>
    <input type="hidden" name="status" value=2>
    <button type="submit">Reset</button>
</form>
<?php } ?>