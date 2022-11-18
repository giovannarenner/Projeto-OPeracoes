<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Operacao</title>
</head>
<body>
<form  method="POST">

<h1>Digite os valores</h1>
<div class=" container">
<input type="number" class="input" name="numero1" id="numero1"> <br>
<p></p>
<input type="number" class="input" name="numero2" id="numero2"> <br>

<input type="radio" name="operacao" class="op" id="adicao" value="adicao">+</input>
<input type="radio" name="operacao" class="op" id="subtracao" value="subtracao">-</input>
<input type="radio" name="operacao" class="op" id="multiplicacao" value="multiplicacao">x</input>
<input type="radio" name="operacao" class="op" id="divisao" value="divisao">/</input> <br>
</div>
<input class="resultado" type="submit" value="resultado">

</form>
<?php
if((!empty($_POST['numero1'])|| !empty($_POST['numero2']))){
$op = $_POST['operacao'];
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
   

    if ($op == 'adicao') {
        echo "<div class ='resul'> Resultado da adição: " . ($numero1 + $numero2) . "</div>";
    } else if ($op == 'subtracao') {
        echo "<div class ='resul'> Resultado da subtração: " . ($numero1 - $numero2). "</div>";
    } else if ($op == 'multiplicacao') {
        echo "<div class ='resul'> Resultado da multiplicação: " . ($numero1 * $numero2). "</div>";
    } else if ($op == 'divisao') {
        if($numero2!=0){
            $resul = $numero1/$numero2;
            echo "<div class ='resul'> Resultado da divisão: " . ($resul). "</div>";
        }else{
            echo "<div class ='resul'> Resultado da divisão: Impossivel resolver </div>";
        }
    }
}
?>
</div>

</body>
</html>