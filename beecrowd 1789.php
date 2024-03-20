<?php
while (true) {
    fscanf(STDIN, "%d %d", $M, $N);
    if ($M <= 0 || $N <= 0) {
        break;
    }
    $menor = min($M, $N);
    $maior = max($M, $N);
    $soma = 0;
    $sequencia = '';
    for ($x = $menor; $x <= $maior; $x++) {
        $soma += $x;
        $sequencia .= "$x ";
    }
    echo "$sequencia Sum=$soma\n";
}
?>
