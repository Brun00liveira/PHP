<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> p{color:brown}</style>
</head>
<body>
    <h2>Funções nativas para tarefas matemáticas</h2>
    <!-- Arrendonda o valor para cima -->
        <p>ceil($numero)</p>
        <?php 
            $numero = 7.3;

            echo $numero. '<br />';
            echo ceil($numero)
        ?>
    <!-- Arrendonda o valor para baixo -->
    <p>floor($numero)</p>
        <?php 
            $numero = 7.3;

            echo $numero. '<br />';
            echo floor($numero)
        ?>
    <!-- Arrendonda o valor com base em casas decimais -->
    <p>round($numero)</p>
        <?php 
            $numero = 7.3;
            $num = 9.6;

            echo $numero. '<br />';
            echo round($numero). '<br /><hr/>'; 
            
            echo $num. '<br />';
            echo round($num) 

        ?>
    <!-- Gera um inteiro aleatório -->
    <p>rand($numero)</p>
        <?php
            echo rand(10,20);
        ?>
    <!-- Retorna a raiz quadrada -->
    <p>sqrt($numero)</p>
        <?php 
            $numero = 16;

            echo $numero. '<br />';
            echo sqrt($numero)
        ?>

        
</body>
</html>