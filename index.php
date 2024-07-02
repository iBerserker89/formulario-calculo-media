<?php
require_once 'function/controlador.inc.php';
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cálculo de Média</title>
</head>
<body>
    <h1>Formulário para Cálculo de Média do Aluno</h1>
    <p>Insira as notas no formulário abaixo. O resultado será a média de todas as notas levando em consideração os seguintes pesos:</p>
    <ul>
        <li>Nota 1 = Peso 1</li>
        <li>Nota 2 = Peso 2</li>
        <li>Nota 3 = Peso 3</li>
        <li>Nota 4 = Peso 4</li>
    </ul>
    <hr>
    <h3>O aluno será aprovado nos seguintes casos:</h3>
    <ul>
        <li>Média >= 7</li>
        <li>Média >= 6 e Nota 4 >= 8</li>
        <li>Média >= 5 e Média das Notas 3 e 4 (Mantendo os pesos) >= 8</li>
    </ul>
    <hr>
    <form method="POST" action="index.php">
        <div>
            <label for="nota1">Digite a primeira nota:</label>
            <input type="number" step="0.1" name="nota1" id="nota1" value="
                <?php if (!empty($nota1)) :
                    echo $nota1;
                endif; ?>">
        </div>
        <br>
        <div>
            <label for="nota2">Digite a segunda nota:</label>
            <input type="number" step="0.1" name="nota2" id="nota2" value="
                <?php if (!empty($nota2)) :
                    echo $nota2;
                endif; ?>">
        </div>
        <br>
        <div>
            <label for="nota3">Digite a terceira nota:</label>
            <input type="number" step="0.1" name="nota3" id="nota3" value="
                <?php if (!empty($nota3)) :
                    echo $nota3;
                endif; ?>">
        </div>
        <br>
        <div>
            <label for="nota4">Digite a quarta nota:</label>
            <input type="number" step="0.1" name="nota4" id="nota4" value="
                <?php if (!empty($nota4)) :
                    echo $nota4;
                endif; ?>">
        </div>
        <input type="submit" value="Enviar">
    </form>
    <hr>
    <div>
        <span>Resultado:
            <?php if (isset($media)):
                echo $media;
            endif; ?>
        </span>
        <br>
        <span>Status:
            <?php if (isset($mensagem_aprovacao)):
                echo $mensagem_aprovacao;
            endif; ?>
        </span>
    </div>
</body>
</html>
