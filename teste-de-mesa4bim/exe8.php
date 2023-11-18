<?php

$lista_frutas = ['banana', 'abacaxi', 'melão', 'morango'];

    echo 'Teste 0:';
    var_dump(count($lista_frutas));

    echo 'Teste 1:';
    var_dump(in_array('banana', $lista_frutas));

    echo 'Teste 2:';
    var_dump(in_array('alface', $lista_frutas));

    echo 'Teste 3:';
    var_dump(array_search('morango', $lista_frutas));

    echo 'Teste 4:';
    var_dump(shuffle($lista_frutas));

    echo 'Teste 5:';
    var_dump(shuffle($lista_frutas));

?>

/**
Teste 0:int(4)
\nTeste 1:bool(true)       
\nTeste 2:bool(false)      
\nTeste 3:int(3)
\nTeste 4:bool(true)       
\nTeste 5:bool(true)       
*/
