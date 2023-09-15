<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $peso = 80;
        $idade = 60;
    ?>
    <p>Qual seu peso ? <br> <?=$peso?></p>
    <p>Qual sua idade ? <br> <?=$idade?></p>
    <p>A pessoas Atende aos requisitos?</p>
    <?php
        if(($idade >= 16 && $idade <= 69) && $peso >= 50){
            echo 'Atende aos requisitos';
        }
        else {
            echo 'Não atende aos requisitos';
        }
    ?>
    
</body>
</html> 