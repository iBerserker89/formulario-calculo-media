<?php
require_once 'function/calcula-nota.inc.php';
require_once 'function/retorna-mensagem.inc.php';
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
    <form method="POST" action="index.php">
        <div>
            <label for="nota1">Digite a primeira nota:</label>
            <input type="number" step="0.1" name="nota1" id="nota1" value="<?php if (isset($nota1)) {
                echo $nota1;
            } ?>">
        </div>
        <br>
        <div>
            <label for="nota2">Digite a segunda nota:</label>
            <input type="number" step="0.1" name="nota2" id="nota2" value="<?php if (isset($nota2)) {
                echo $nota2;
            } ?>">
        </div>
        <br>
        <div>
            <label for="nota3">Digite a terceira nota:</label>
            <input type="number" step="0.1" name="nota3" id="nota3" value="<?php if (isset($nota3)) {
                echo $nota3;
            } ?>">
        </div>
        <br>
        <div>
            <label for="nota4">Digite a quarta nota:</label>
            <input type="number" step="0.1" name="nota4" id="nota4" value="<?php if (isset($nota4)) {
                echo $nota4;
            } ?>">
        </div>
        <input type="submit" value="submit">
    </form>
    <hr>
    <div>
        <span>Resultado: <?php print $media; ?></span>
        <br>
        <span>Status: <?php print $mensagem_aprovacao; ?></span>
    </div>
</body>
</html>
