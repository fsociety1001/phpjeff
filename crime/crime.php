<?php

    $sus = 0;
    $respo = [];
    $resp = [];

    readline("Telefonou para a vítima ? ");
    readline("Esteve no local do crime ? ");
    readline("Mora perto do vítima ? ");
    readline("Devia para a vítima ? ");
    readline("Já trabalhou com a vítima ? ");

    foreach($respo as $resp) {
        if($respo[$i] == "sim") {
            $sus++;
        }
    }

    if($sus < 2) {
        print "inno";
    }
    else if($sus == 2) {
        print "sus -_-";
    }
    else if($sus == 3 || $sus == 4){
        print "murder1!!1!1!!";
    }
