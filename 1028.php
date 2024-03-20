<?php
$N = intval(trim(fgets(STDIN)));
for ($i = 0; $i < $N; $i++) {
    list($F1, $F2) = explode(" ", trim(fgets(STDIN)));
    echo min($F1, $F2) . "\n";
}
?>
