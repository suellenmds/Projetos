<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Operacoes aritimetica</title>
    <link rel="stylesheet" href="_css/new 1.css"/>
</head>
<body>
<div>
    <?php
    $v1 = $_GET ["x"];
    $v2 = $_GET ["y"];
    echo " <h2>valores recebidos: $v1 e $v2</h2>" ;
    echo "o valor absoluto de $v2 é ". abs($v2);
    echo "<br/> o valor de $v1<sup>$v2</sup> é ". pow($v1, $v2);
    echo "<br/> a raiz de $v1 e". sqrt($v1);  
    ?>
</div>
</body>
</html>