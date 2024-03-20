<?php

$X = intval(fgets(STDIN));
$Y = intval(fgets(STDIN));


$somaImpares = 0;


for ($i = $X; $i <= $Y; $i++) {
    
    if ($i % 2 != 0) {
        
        $somaImpares += $i;
    }
}


echo "$somaImpares\n";
?>
