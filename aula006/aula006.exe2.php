<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
<link rel="stylesheet" href="_css/new 1.css"/>
    <title>HTML5 + PHP</title>
</head>
<body>
   <div>
       
       <form method="get" action="02idade.php">
       Nome:<input type="text" name="nome"/><br/>
       Ano de nascimento: <input type="number"name="ano"/><br/>
       <fieldset><legend>Sexo</legend>
       <input type="radio" name="sexo" id="masc" value=" homem "checked/>
       <label for="masc">Masculino</label><br/>
       <input type="radio" name="sexo"id="fem" value=" mulher "/>
       <label for="fem">Feminino</label>
       </fieldset><br/>
       <input type="submit" value="Enviar"/>
   </form>
   </div> 
</body>
</html>