<?php

$matriz = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

$numLinhas = count($matriz);
$numColunas = count($matriz[0]);

$soma = 0;
for ($i = 0; $i < $numLinhas; $i++) {
    for ($j = 0; $j < $numColunas; $j++) {
        $soma += $matriz[$i][$j];
    }
}

echo "A soma dos elementos da matriz é --> " . $soma;

?>
