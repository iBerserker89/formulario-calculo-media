<?php

function retorna_aprovacao($media, $nota3, $nota4) {
    $somaPesos = 7;
    $soma_nota_tres_e_nota_quatro = ($nota3 * 3) + ($nota4 * 4);

    if ($media >= 7) {
        return true;
    }

    if ($media >= 6 && $nota4 >= 8) {
        return true;
    }

    if ($media >= 5 && $soma_nota_tres_e_nota_quatro / $somaPesos >= 8) {
        return true;
    }

    return false;
}
