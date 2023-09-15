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
    //string
    $nome = 'Bruno Oliveira';
    //int
    $idade = 27;
    //float
    $peso = 104.9;
    //boolean
    $fumante_sn = true //(true = 1) ou (falso = vazio)
    ?>
    <h1>Ficha cadastral</h1>
    <p>Nome: <?php print $nome ?></p>
    <p>idade: <?php print $idade ?></p>
    <p>peso: <?php print $peso ?></p>
    <p>fumante: <?php print $fumante_sn ?></p>

</body>
</html>