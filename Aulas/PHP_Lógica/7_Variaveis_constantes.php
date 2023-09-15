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
    //Nas variáveis normais, temos o problema de que qualquer momento ela pode ser substituida por outra com o mesmo nome
    //Com a constante, temos a segurança de que nunca será substituida
        define('BD_NOME', 'Bruno');
        define('BD_USUARIO', 'brunobromo');
        define('BD_SENHA', 'Xxbrun@xx1');

        echo BD_NOME . '<br/>';
        echo BD_USUARIO . '<br/>';
        echo BD_SENHA ;
 
    ?>
    
</body>
</html>