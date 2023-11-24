<?php

$pessoa = [
    'nome' => 'John Doe',
    'idade' => 54,
    'altura' => '1.8',
    'formação' => 'Físico',
    'profissao'=> 'Astronauta',
];

 print "Teste 0: ";
        var_dump(count($pessoa));
    print "\nTeste 1: ";
        var_dump(in_array('Físico', $pessoa));
    print "\nTeste 2: ";
            var_dump(in_array('Detetive', $pessoa));
    print "\nTeste 3: ";
        var_dump(array_search('nome', $pessoa));
    print "\nTeste 4: ";
        var_dump(array_key_exists('profissao', $pessoa));
    print "\nTeste 5: ";
        var_dump(array_key_first($pessoa));
    print "\nTeste 6: ";
        var_dump(array_key_last($pessoa));
    print "\nTeste 7: ";
        var_dump(sort($pessoa));
?>

//console:

/*
Teste 0: int(5) --->  teste 0
Teste 1: bool(true) ---> verifyString("fisico") in array() = true.
Teste 2: bool(false) ---> verifyString("detetive") in array() = false.
Teste 3: bool(false) ---> verifyString("nome"). error: "nome" = *key
Teste 4: bool(true) ---> verifyKey("profissao")  = true.
Teste 5: string(4) "nome"  ---> echoKey("nome") string 4 caracteres
Teste 6: string(9) "profissao" ---> shoWkey("profissao") string 9 caract.
Teste 7: bool(true) ---> sort efetuado.
*/
