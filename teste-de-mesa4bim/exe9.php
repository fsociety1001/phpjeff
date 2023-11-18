<?php

$pessoa = [
    'nome' => 'John Doe',
    'idade' => 54,
    'altura' => '1.8',
    'formação' => 'Físico',
    'profissao'=> 'Astronauta',
];

print "Teste 0: ";
var_dump(in_array('Físico', $pessoa));

print "Teste 1: ";
var_dump(in_array("Detetive", $pessoa));

print "Teste 3: ";
var_dump(array_search("nome", $pessoa));

print   "Teste 4: ";
var_dump(array_key_exists("profissão", $pessoa));

print "Teste 5: ";
var_dump(array_key_first($pessoa));

print"Teste 6: ";
var_dump(array_key_last($pessoa));

print("Teste 7: ");
var_dump(sort($pessoa));

?>

//console:

/**
 Teste 0: bool(true)      
Teste 1: bool(false)     
Teste 3: bool(false)     
Teste 4: bool(false)     
Teste 5: string(4) "nome"
Teste 6: string(9) "profissao"
Teste 7: bool(true)
*/
