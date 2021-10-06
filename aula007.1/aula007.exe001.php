<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/new 1.css"/>
    <title>Condições</title>

</head>
    <h1>Como criar condições em PHP</h1>
    <h2></br> Parte 1</h2>

<div>
<body>
   <?php
   $a= isset($_GET["ano"])?$_GET["ano"]: 1900;
   $i= date("Y") - $a;
   echo"Você nasceu em $a e terá $i anos.<br/>";
   if($i>=18){
       $v= "Já pode votar";
       $d= "<br/>Já pode dirigir";
   }
   else{
       $v= "Não pode votar";
       $d= "<br/>Não pode dirigir";
   }
   echo"<br/>Com essa idade você $v e também $d";
   
   ?>
</body>
</div>
</html>