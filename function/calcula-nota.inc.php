<?php

function calcula_media($n1, $n2, $n3, $n4) {
    $peso1 = 1;
    $peso2 = 2;
    $peso3 = 3;
    $peso4 = 4;

    $somaResultado = ($n1 * $peso1) + ($n2 * $peso2) + ($n3 * $peso3) + ($n4 * $peso4);
    $somaPesos = $peso1 + $peso2 + $peso3 + $peso4;

    return $somaResultado / $somaPesos;
}