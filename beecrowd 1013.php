<?php
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d %d",$a,$b,$c);
$maiorAB = ($a + $b + abs($a-$b))/2;
$maior = ($maiorAB + $c + abs($maiorAB-$c))/2;
printf("%d eh o maior\n", $maior);
?>
