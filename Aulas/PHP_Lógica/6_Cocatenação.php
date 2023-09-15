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
        $nome = 'Carlos';
        $cor = 'Rosa';
        $idade = 12;
        $jogo = 'Valorant';

        echo 'Olá Bruno, sua cor preferida é preto, você tem 27 anos e gosta de jogar um League of legends <br/><br/>';
        // Cocatenção é quando se inseri uma variavel no echo e para isso utiliza (.$variavel.)
        echo 'Olá ' .$nome. ',sua cor preferida é ' .$cor. ',você tem ' .$idade. 'anos e gosta de jogar um ' .$jogo;
        echo '<br/><br/>';
        // Nas aspas duplas não tem necessidade de utilizar este comando
        echo "oie $nome, sua cor preferida é $cor, você tem $idade anos e gosta de jogar um $jogo"
    ?>
</body>
</html>