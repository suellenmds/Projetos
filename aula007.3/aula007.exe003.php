<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="_css/new 1.css"/>
    <title>Curso de PHP</title>
    </head>
    <style>
       h1{
          color: #7F50F5; 
          text-shadow: 1px 1px 1px black;	
          text-align:center;
       }
       h2{
          color: #7F50F6;
          text-shadow: 1px 1px 1px black;	
          text-align:center;
       }
    </style>
    <h1>Como criar condições em PHP</h1>
    <h2> Parte 3</h2>


<body>
<div>
   <?php
      $nota1= isset ($_GET["nota1"])?$_GET["nota1"]:0;
      $nota2= isset ($_GET["nota2"])?$_GET["nota2"]:0;
      $m= ($nota1+$nota2)/2;
      echo "A média entre $nota1 e $nota2 é igual a $m";

      if($m <= 5){
         $sit= "REPROVADO";
      }
      else{
         $sit= "APROVADO";
      }
      echo "<br/> O aluno está: $sit";
    
   ?>
   <a href="aula007.exe03.php"><br/><input type="submit" value="Voltar"/>
</div>
</body>

</html>