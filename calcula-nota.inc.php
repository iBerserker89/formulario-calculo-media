<?php


if (isset($_POST['nota1'])) {
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];

    function calcula_media($n1, $n2, $n3, $n4) {
        $peso1 = 1;
        $peso2 = 2;
        $peso3 = 3;
        $peso4 = 4;

        $somaResultado = ($n1 * $peso1) + ($n2 * $peso2) + ($n3 * $peso3) + ($n4 * $peso4);

        $somaPesos = $peso1 + $peso2 + $peso3 + $peso4;

        return $somaResultado / $somaPesos;
    }
    $media = calcula_media($nota1, $nota2, $nota3, $nota4);

}





