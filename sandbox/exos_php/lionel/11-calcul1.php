<?php
$status=($_POST['status'] ?? 0);
if ($status==77) {
    $status=0;
    unset($_POST['str']);
}
// $str = '1/2';
// aff($str);


$str = $_POST['str'] ?? '';
// $str='1+2';
$signs  = ['+','-','*','/','%'];
$res = '';

foreach ($signs as $sign) {
    $str2 = explode($sign, $str);
    if (count($str2) == 2) {
        switch ($sign) {
            case '+':
                $res = $str2[0] + $str2[1];
                break;
            
            case '-':
                $res = $str2[0] - $str2[1];
                break;
            
            case '*':
                $res = $str2[0] * $str2[1];
                break;
            
            case '/':
                $res = $str2[0] / $str2[1];
                break;
            
            case '%':
                $res = $str2[0] % $str2[1];
                break;
            
            default:
                break;
        }
        // aff($res);
    }
}

function aff($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}


if (empty($res)) {
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="crypt" method='POST'>
    <label for="calcul">Calcul</label>
    <input type="text" name="str" value='1+2' placeholder='Ex.: 1+2'><br><br>
    <input type="submit">
</form>


<?php } 
else {
?>
Le résultat du calcul (<?=$str ?>) est <?=$res ?>
<hr>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="reset" method='POST'>
    <input type="hidden" name="status" value=77>
    <button type="submit">Reset</button>
</form>
<?php } ?>