<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
         $txt= isset($_GET["t"])? $_GET["t"]: "Texto Genérico";
         $tam= isset($_GET["tam"])? $_GET["tam"]: "12pt";
         $cor= isset($_GET["cor"])? $_GET["cor"]: "#000000";    
    ?>
    <meta charset="UTF-8">
<link rel="stylesheet" href="_css/new 1.css"/>
    <title>Formulário</title>
    <style>
        span.texto {
            font-size: <?php echo $tam;?>;
            color: <?php echo $cor;?>;
        }
 </style>
</head>
<body>
<div>
    <?php
        echo "<span class= 'texto'>$txt</span>";

    ?>
<a href="aula006.exe3.php"> voltar </a>
</div>
</body>
    
</html>