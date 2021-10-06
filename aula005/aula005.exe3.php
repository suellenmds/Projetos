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
$ano = $_GET["an"];
$idade = 2021 - $ano;
echo " Quem nasceu em $ano tem idade de $idade anos";
$tipo= ($idade>18 && $idade<65)? "obrigatório": "não obrigatório"; // o && é um operador lógico
echo "<br/> E desssa forma seu voto é $tipo";
    ?>
</div>
</body>
</html>