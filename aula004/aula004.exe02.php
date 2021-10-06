<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/new 1.css"/>
    <meta charset="UTF-8">
    <title><exercícios></title>
    
</head>
<body>
<div>
    <?php
       $atual = $_GET["aa"]; // essa linha vai pegar o ano na URL
       echo "o ano atual é $atual e o ano anterior é ". --$atual; #esse -- é pré-incremento 
   ?>
</div>
</body>
</html>