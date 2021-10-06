<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/new 1.css"/>
    <meta charset="UTF-8">
    <title><exercícios></title>
    
</head>
<body>
<style>
    h2{
            color: #fAb219;
    }
</style>
<div>
    <?php
        $preco = $_GET["p"];
        echo "o preço do produto é R$ $preco";
        $preco += ($preco*10/100);
        echo "<br/> E o novo preço com 10% de aumento será R$ $preco";
    ?>
</div>
</body>
</html>