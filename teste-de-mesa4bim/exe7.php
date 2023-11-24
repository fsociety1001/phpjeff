<?php

    $matrix = [];

    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 5; $j++) {
            $matrix[$i][$j] = lerNumeroUsuario();
        }
    }
    print "num e pos: \n";
    for ($i = 0; $i < 3; $i++){
        for ($j = 0; $j < 5; $j++) {
            if ($matrix[$i][$j] % 2 == 0) {
            
                print "num par: {$matrix[$i][$j]}\n";
                print "pos: ($i, $j)\n";
            }
        }
    }
    function lerNumeroUsuario() {
        $numero = readline("digite um num --> ");

        while (!is_numeric($numero) || intval($numero) != $numero) {
            print "num invalidado, o num precisa ser inteiro\n";
            $numero = readline("digite novamente : ");
        }
        
        return $numero; 
    }
