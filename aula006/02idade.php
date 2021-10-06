<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
<link rel="stylesheet" href="_css/new 1.css"/>
    <title>HTML5 + PHP</title>
</head>
<body>
    <div>
<?php
$nome= $_GET["nome"];
$ano= $_GET["ano"];
$sexo= $_GET["sexo"];
$idade= date("Y") - $ano;
echo "$nome é $sexo e tem $idade anos.";

?>
<a href="aula006.exe2.php"> voltar </a> 
   </div> 
</body>
</html>