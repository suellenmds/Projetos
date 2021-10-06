<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="_css/new 1.css"/>
    <title>Curso de PHP</title>
    </head>
    <h1>Como criar condições em PHP</h1>
    <h2></br> Parte 2</h2>

<div>
<body>
   <?php
   $a= isset($_GET["ano"])? $_GET["ano"]:1900;
   $i= date("Y") - $a;
   echo "Você nasceu em $a e terá $i anos. <br/>";
	if($i <16) {
        $tipoVoto= "não vota.";
}
    else{
            if(($i >=16 && $i <18)|| ($i>65)){ // Essas '||' quer dizer 'Ou Então'
               $tipoVoto="voto opcional.";
            }
            else{
                $tipoVoto="voto obrigatório.";
            }
        }
        echo "Para essa idade, $tipoVoto";
   ?>
   <a href="aula007.exe02.php"> voltar </a>
</body>
</div>
</html>