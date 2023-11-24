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


//console
/*
  Teste 0: int(4)     --->  q. in array
  Teste 1: bool(true)  ---> "banan" in array() == true
  Teste 2: bool(false)  ---> "alface" in array() = false
  Teste 3: int(3)     ---> "morango", in array() pos.3 (começa no 0)
  Teste 4: bool(true)  --->  funcao sort() return = true. , retornou o valor com sucesso.
  Teste 5: bool(true)  ---> sort. 2.0
