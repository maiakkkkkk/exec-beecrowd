<?php
// velocidade da lesma
function determinarNivelVelocidade($velocidades)
{
    $maiorVelocidade = max($velocidades);

    if ($maiorVelocidade < 10) {
        return 1;
    } elseif ($maiorVelocidade < 20) {
        return 2;
    } else {
        return 3;
    }
}

// leitura dos casos de teste
while ($linha = fgets(STDIN)) {
    $numLesmas = intval(trim($linha));
    $velocidades = array_map('intval', explode(' ', trim(fgets(STDIN))));

    // nível de velocidade da lesma mais rápida
    $nivel = determinarNivelVelocidade($velocidades);
    echo "$nivel\n";
}
?>
