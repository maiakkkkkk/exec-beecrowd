<?php
// Lê os valores de entrada
$X = intval(trim(fgets(STDIN)));
$Y = intval(trim(fgets(STDIN)));

// x menor que y
if ($X > $Y) {
    $temp = $X;
    $X = $Y;
    $Y = $temp;
}

//  x e y (exclusivo) e verifica o rivide por 5
for ($i = $X + 1; $i < $Y; $i++) {
    if ($i % 5 == 2 || $i % 5 == 3) {
        echo $i . "\n";
    }
}
?>
