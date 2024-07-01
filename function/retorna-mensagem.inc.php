<?php
require_once 'calcula-nota.inc.php';

function retorna_aprovacao($media) {
    $mensagem = '';

    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];

    $peso3 = 3;
    $peso4 = 4;

    $somaPesos = 7;

    $soma_nota_tres_e_nota_quatro = ($nota3 * $peso3) + ($nota4 * $peso4);

    $resultado_formatado = number_format(
        $soma_nota_tres_e_nota_quatro / $somaPesos,
        2,
        '.',
        ','
    );

    if ($media >= 7) {
        $mensagem .= 'Aluno aprovado com média = ' . $media;
    } elseif ($media >= 6 && $nota4 >= 8) {
        $mensagem .= 'Aluno aprovado com média = ' . $media . ' e nota 4 = ' . $nota4;
    } elseif ($media >= 5 && $soma_nota_tres_e_nota_quatro / $somaPesos >= 8) {
        $mensagem .= 'Aluno aprovado com média: ' . $media . ' e soma das notas 3 e 4 = ' . $resultado_formatado;
    } else {
        $mensagem .= 'Aluno reprovado.';
    }
    return $mensagem;
}



