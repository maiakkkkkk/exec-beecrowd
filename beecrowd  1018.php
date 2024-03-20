<?php
// Lê o valor inteiro
$valor = intval(fgets(STDIN));

// Inicializa as variáveis para contar as notas
$notas100 = 0;
$notas50 = 0;
$notas20 = 0;
$notas10 = 0;
$notas5 = 0;
$notas2 = 0;
$notas1 = 0;

// Calcula a quantidade de cada nota
while ($valor > 0) {
    if ($valor >= 100) {
        $notas100++;
        $valor -= 100;
    } elseif ($valor >= 50) {
        $notas50++;
        $valor -= 50;
    } elseif ($valor >= 20) {
        $notas20++;
        $valor -= 20;
    } elseif ($valor >= 10) {
        $notas10++;
        $valor -= 10;
    } elseif ($valor >= 5) {
        $notas5++;
        $valor -= 5;
    } elseif ($valor >= 2) {
        $notas2++;
        $valor -= 2;
    } else {
        $notas1++;
        $valor -= 1;
    }
}

// Imprime o resultado
echo "$valor\n";
echo "$notas100 nota(s) de R$ 100,00\n";
echo "$notas50 nota(s) de R$ 50,00\n";
echo "$notas20 nota(s) de R$ 20,00\n";
echo "$notas10 nota(s) de R$ 10,00\n";
echo "$notas5 nota(s) de R$ 5,00\n";
echo "$notas2 nota(s) de R$ 2,00\n";
echo "$notas1 nota(s) de R$ 1,00\n";
?>
