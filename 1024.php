<?php
$N = intval(fgets(STDIN));

for ($i = 0; $i < $N; $i++) {
    $linha = trim(fgets(STDIN));
    $mensagemCriptografada = "";

    foreach (str_split($linha) as $caractere) {
        if (ctype_upper($caractere)) {
            $novoCaractere = chr(((ord($caractere) - ord('A') + 3) % 26) + ord('A'));
        } else {
            $novoCaractere = $caractere;
        }
        $mensagemCriptografada .= $novoCaractere;
    }

    echo "$mensagemCriptografada\n";
}
?>
