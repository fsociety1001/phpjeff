<?php

$sete_maravilhas = [
"Cristo Redentor",
"Chichén Itzá",
"Coliseu",
"Muralha da China",
"Petra",
"Machu Picchu",
"Taj Mahal"
];

    $valor_buscado = "Taj Mahal";

    for($i=0; $i<7; $i++){
        if($sete_maravilhas[$i] == $valor_buscado) {
            print("o valor buscado está entre as maravilhas");
            break;
        }
}
?>
