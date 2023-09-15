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
    <h2>Funções nativas para manipular strings</h2>
    <!-- transforma todos os caracteres em minusculos -->
        <p>Strtolower($texto)</p>
        <?php 
            $texto = 'curso completo de PHP';

            echo $texto. '<br />';
            echo strtolower($texto)
        ?>
    <!-- transforma todos os caracteres em maiúsculos -->
        <p>Strtoupper($texto)</p>
        <?php 

        $texto = 'curso completo de PHP';

        echo $texto. '<br />';
        echo strtoupper($texto)

        ?>
    <!-- transforma o primeiro caracter da string em maiúsculos -->
        <p>ucfirst($texto)</p>
        <?php 

        $texto = 'curso completo de PHP';

        echo $texto. '<br />';
        echo ucfirst($texto);

        ?>
    <!-- Conta a quantidade de caracteres de uma string -->
        <p>strlen($texto)</p>
        <?php 
            $texto = 'curso completo de PHP';

            echo $texto. '<br />';
            echo strlen($texto)
        ?>
    <!-- Substitui uma cadeia de caracteres por outra dentro de uma string -->
        <p>str_replace($texto)</p>
        <?php 

            $texto = 'curso completo de PHP';

            echo $texto. '<br />';
            echo str_replace('PHP', 'Javascript', $texto);
        ?>

    <!-- Retorna parte de uma string -->
        <p>substr($texto)</p>
        <?php

            $texto = 'curso completo de PHP';

            echo $texto. '<br />';
            echo substr($texto, 0, 14) . "...";

        ?>
</body>
</html>