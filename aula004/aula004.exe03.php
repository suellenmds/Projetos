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
$a = 3;
$b = &$a;
$b += 5;
echo "A variável A vale $a ";
echo "<br/> A variável B vale $b";
?>
</div>
</body>
</html>