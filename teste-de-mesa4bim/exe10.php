<?php
function modificarPorReferencia(&$valor, &$caractere) {
    $ocorrencias = substr_count($valor, $caractere);
    $valor = str_replace($caractere, '', $valor);

    echo "a quantidade de vezes que o caractere '$caractere' aparece na string é --> $ocorrencias";
    echo ". String modificada: $valor";
}

$valor = "professor Jefferson Chaves é o melhor!!!";
$caractereExemplo = 'r';

modificarPorReferencia($valor, $caractereExemplo);

?>


//console :
/**
 a quantidade de vezes que o caractere 'r' aparece na string é --> 4. String modificada: pofesso Jeffeson Chaves é o melho!!!
*/
