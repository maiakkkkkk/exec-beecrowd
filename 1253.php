<?php
function decodificarCifraDeCesar($textoCodificado, $deslocamento) {
    $alfabeto = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $tamanhoAlfabeto = strlen($alfabeto);
    $textoDecodificado = '';

    foreach (str_split($textoCodificado) as $caractereCodificado) {
        if (ctype_upper($caractereCodificado)) {
            $indiceCodificado = strpos($alfabeto, $caractereCodificado);
            $indiceDecodificado = ($indiceCodificado - $deslocamento + $tamanhoAlfabeto) % $tamanhoAlfabeto;
            $textoDecodificado .= $alfabeto[$indiceDecodificado];
        } else {
            $textoDecodificado .= $caractereCodificado;
        }
    }

    return $textoDecodificado;
}

// Ainda não entendi AAAAAAAAAAAAAAAA decodificar é mto buga mto
$textoCodificado = 'VQREQFGT';
$deslocamento = 2;
$textoDecodificado = decodificarCifraDeCesar($textoCodificado, $deslocamento);

echo "Texto decodificado: $textoDecodificado";
?>
