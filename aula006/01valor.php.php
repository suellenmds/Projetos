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
$valor= $_GET["v"];
$rq= sqrt($valor);
echo " A raiz de $valor é igual ". number_format($rq,2); /* o number_format foi para deixar a resposta com apenas
duas casas decimais, assim não deixando o valor grande */

?>
<a href="aula006.php "> voltar </a> 
   </div> 
</body>
</html>
