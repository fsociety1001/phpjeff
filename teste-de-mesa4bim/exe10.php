<?php
function modificarPorReferencia(&$valor, &$caractere) {
    $ocorrencias = substr_count($valor, $caractere);
    $valor = str_replace($caractere, '', $valor);

    echo "a quantidade de vezes que o caractere '$caractere' aparece na string é --> : $ocorrencias<br>";
    echo "String foi alterada: $valor";
}

$valor = "teste, olá eu me chamo Arthur, eu gosto de pizza...";
$caractereExemplo = 'a';

modificarPorReferencia($valor, $caractereExemplo);

?>
