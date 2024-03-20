<?php
$leds_por_numero = array(6, 2, 5, 5, 4, 5, 6, 3, 7, 6);

$numero_de_testes = intval(fgets(STDIN));
for ($i = 0; $i < $numero_de_testes; $i++) {
    $numero = trim(fgets(STDIN));
    $leds_necessarios = 0;
    for ($j = 0; $j < strlen($numero); $j++) {
        $leds_necessarios += $leds_por_numero[$numero[$j]];
    }
    echo $leds_necessarios . " leds\n";
}
?>
