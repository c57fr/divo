<?php
/**
 * (c) Online-FormaPRO - Cession 168 - 2022 - Lionel CÔTE.
 */

const BOB    = 'Bob DYLAN';
const PARIS2 = 'PARIS 02';
const GD_REX = 'Grand Rex';
const TDS    = '</td><td>';

$concerts = [
    ['COLLINS', 'DIJON', 'Zenith', '22/03/2023'],
    ['SPRINGTEEN', 'VALENCIENNES', 'Le Phenix', '22/03/2023'],
    ['ORELSAN', 'PARIS', 'ARENA', '10/12/2022'],
    ['ORELSAN', 'TOULOUSE', 'Zenith', '20/11/2022'],
    [BOB, PARIS2, GD_REX, '11/10/2022'],
    [BOB, PARIS2, GD_REX, '12/10/2022'],
    [BOB, PARIS2, GD_REX, '13/10/2022'],
    ['The CURE', 'TOULOUSE', 'Zenith', '13/11/2022'],
];


$q = $_POST['q'] ?? '';
$q = strtolower(trim($q));

$dates = [$_POST['deb'] ?? '', $_POST['fin'] ?? ''];

foreach ($dates as $value) {
    if ($value) {
        $datesUS[] = DateTime::createFromFormat('d/m/Y', $value)->format('Y-m-d');
    }
}


function searchInArr($q, $dates, $concerts)
{
    $matches = [];
    foreach ($concerts as $k => $c) {
        // Search By txt
        if (!empty($q)) {
            for ($i = 0; $i < 3; ++$i) {
                preg_match('/' . $q . '/', strtolower($concerts[$k][$i]), $m);
                if ($m) {
                    $matches[] = $k;
                }
            }
        }
        // Search By date
        if ($dates[0] && $dates[1]) {
            foreach ($dates as $value) {
                $datesUS[] = DateTime::createFromFormat('d/m/Y', $value)->format('Y-m-d');
            }
            $datesConcert = DateTime::createFromFormat('d/m/Y', $concerts[$k][3])->format('Y-m-d');
            if ($datesConcert >= $datesUS[0] && $datesConcert <= $datesUS[1]) {
                $matches[] = $k;
            }
        }
    }

    return array_unique($matches);
}

$matches = searchInArr($q, $dates, $concerts);
// aff([$q, $dates, $matches], 'Filtrés:');
?>
<style>
	td {
		padding: 3px 5px;
	}
</style>

<form
	action="<?php echo $_SERVER['PHP_SELF']; ?>"
	name="reset" method='POST'>
	<label for="site-search">Rechercher :</label>
	<input type="search" id="site-search" name="q"><br><br>
	Recherche aussi des concerts par date :<br><br>
	<label for="deb">Entre le :</label>
	<input type="text" id="deb" name="deb" value='20/03/2023'><br><br>
	<label for="deb">Et le <?= str_repeat('&nbsp', 5) ?>:</label>
	<input type="text" id="fin" name="fin" value='20/04/2023'><br><br>
	<button>Search</button>
</form>

<hr>

<?php

if (empty($matches) && empty($q) && empty($datesUS)) {
    $matches = range(0, count($concerts));
}
if ($matches) {
    echo '<div style="text-align:center">';
    echo '<table border=1  style="margin: 0 auto">';
    echo '<tr>';
    echo '<th>ARTISTE</th><th>VILLE</th><th>SALLE</td><th>DATE</td><tr>
<td colspan=4>&nbsp;</td></tr>';
    echo '</tr>';

    foreach ($concerts as $k => $concert) {
        if (in_array($k, $matches)) {
            echo '<tr>';
            echo '<td>' . $concert[0] . TDS . $concert[1] . TDS . $concert[2] . TDS . $concert[3] . '</td><br>';
            echo '</tr>';
        }
    }
    echo '</table></div>';
} else {
    echo 'Pas de concerts selon vos selections';
}

function aff($var, $txt = null)
{
    echo '<hr><strong>' . $txt . '</strong><pre>';
    var_dump($var);
    echo '</pre>';
}
?>
<hr>
<form
	action="<?php echo $_SERVER['PHP_SELF']; ?>"
	name="reset" method='POST'>
	<input type="hidden" name="status" value=77>
	<button type="submit">Reset</button>
</form>