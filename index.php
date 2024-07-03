<?php
require_once 'function/retorna-aprovacao.inc.php';
require_once 'function/calcula-nota.inc.php';

$aviso = '';
$resultado = false;
$media = 0;


if (empty($_POST['nota1']) && !is_integer($_POST['nota1'])) {
        $aviso .= 'Insira uma nota válida';
    } else {
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $nota4 = $_POST['nota4'];

        $media = calcula_media($nota1, $nota2, $nota3, $nota4);
        $resultado = retorna_aprovacao($media, $nota3, $nota4);
    }

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
        <input type="number" step="0.1" min="0" name="nota1" id="nota1" value="
            <?php if (!empty($nota1)) : ?>
                <?php echo $nota1; ?>
            <?php endif; ?>">
    </div>
    <?php echo $aviso ?>
    <br>
    <div>
        <label for="nota2">Digite a segunda nota:</label>
        <input type="number" step="0.1" min="0" name="nota2" id="nota2" value="
            <?php if (!empty($nota2)) : ?>
                <?php echo $nota2; ?>
            <?php endif; ?>">
    </div>
    <?php echo $aviso ?>
    <br>
    <div>
        <label for="nota3">Digite a terceira nota:</label>
        <input type="number" step="0.1" min="0" name="nota3" id="nota3" value="
            <?php if (!empty($nota3)) : ?>
                <?php echo $nota3; ?>
            <?php endif; ?>">
    </div>
    <?php echo $aviso ?>
    <br>
    <div>
        <label for="nota4">Digite a quarta nota:</label>
        <input type="number" step="0.1" min="0" name="nota4" id="nota4" value="
            <?php if (!empty($nota4)) : ?>
                <?php echo $nota4; ?>
            <?php endif; ?>">
    </div>
    <?php echo $aviso ?>
    <br>
    <input type="submit" value="Enviar">
</form>
<hr>
<div>
    <span>Media:
        <?php echo $media; ?>
    </span>
    <br>
    <span>Status:
        <?php if ($resultado) : ?>
           <?php echo 'Aluno aprovado'; ?>
        <?php else : ?>
           <?php echo 'Aluno reprovado'; ?>
        <?php endif; ?>
    </span>
</div>
</body>
</html>
