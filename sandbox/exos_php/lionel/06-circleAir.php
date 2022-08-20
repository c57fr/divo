<?php
function circleAir($n)
{
    return number_format(pi() * $n * $n, 2,',',' ');
}

if (!($_POST['n']??0))
$n   =500; else $n = $_POST['n'];
$air = circleAir($n);

?>

<form action="06-circleAir.php" method='POST'>
    <label for="n">Rayon: </label>
    <input type="number" name="n" id='n' value=100>
    <input type="submit">
</form>

<style>
    .circle {
        width: <?php echo $n; ?>px;
        height: <?php echo $n; ?>px;
        background-color: #f00;
        border-radius:<?php echo $n; ?>px;
    }
</style>

Le dessin du cercle de rayon <?php echo $n; ?> px :

<div class="circle"></div>

L'aire du cercle : <?=$air ?> px²