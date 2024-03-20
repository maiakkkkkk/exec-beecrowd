<?php

$X = intval(fgets(STDIN));
$Y = intval(fgets(STDIN));


$diferencaMinutos = abs(($X * 60 + $Y) - (7 * 60));


echo "$diferencaMinutos\n";
?>
