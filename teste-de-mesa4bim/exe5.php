<?php


    $matriz = array(
    array(1, 3, 5),
    array(7, 9, 11),
    array(13, 15, 17)
    );

    $numLinhas = count($matriz);
    $numCol = count($matriz[1]);

    for ($i = 0; $i < $numLinhas; $i++) {
        for ($j = 0; $j < $numCol; $j++) {
        echo $matriz[$i][$j] . " ";
    }
    echo "\n";
}

?>
