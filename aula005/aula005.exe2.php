<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/new 1.css"/>
    <title>Curso de PHP</title>
</head>
<body>
<div>
    <?php
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $m = ($nota1+$nota2)/2;
    echo " A média entre $nota1 e $nota2 é $m <br/>" ;
    echo " A situação do aluno é ". (($m<6)?" reprovado " : " Aprovado ");
    ?>
</div>
</body>
</html>