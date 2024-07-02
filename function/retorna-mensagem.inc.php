<?php

function retorna_aprovacao($media) {
    $mensagem = '';
    $somaPesos = 7;
    $soma_nota_tres_e_nota_quatro = ($_POST['nota3'] * 3) + ($_POST['nota4'] * 4);

    $resultado_formatado = number_format(
        $soma_nota_tres_e_nota_quatro / $somaPesos,
        1,
        '.',
        ','
    );

    if ($media >= 7) {
        $mensagem .= 'Aluno aprovado com média = ' . $media;
    } elseif ($media >= 6 && $_POST['nota4'] >= 8) {
        $mensagem .= 'Aluno aprovado com média = ' . $media . ' e nota 4 = ' . $_POST['nota4'];
    } elseif ($media >= 5 && $soma_nota_tres_e_nota_quatro / $somaPesos >= 8) {
        $mensagem .= 'Aluno aprovado com média: ' . $media . ' e soma das notas 3 e 4 = ' . $resultado_formatado;
    } else {
        $mensagem .= 'Aluno reprovado.';
    }

    return $mensagem;
}



