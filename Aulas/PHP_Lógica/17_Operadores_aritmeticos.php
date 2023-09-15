<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- adição (+) 
         subtração (-)    
         divisão (/)
         multiplicação (*)
         módulo (%) -> resto de uma divisão
-->
<?php 
    $num1 = 5;
    $num2 = 2;

    echo "A soma entre $num1 e $num2 é igual a : " . ($num1 + $num2);
    echo "<br/>";
    echo "A subtração entre $num1 e $num2 é igual a : " . ($num1 - $num2);
    echo "<br/>";
    echo "A divisão entre $num1 e $num2 é igual a : " . ($num1 / $num2);
    echo "<br/>";
    echo "A multiplicação entre $num1 e $num2 é igual a : " . ($num1 * $num2);
    echo "<br/>";
    echo "O módulo entre $num1 e $num2 é igual a : " . ($num1 % $num2); //25/30 = 
    ?>
<hr/>
<p> atribuições em operadores aritméticos</p>

    <?php
    
        $x = 10;
        $y = 20;

        $x *= $y;

        echo $x;

    ?>
</body>
</html>