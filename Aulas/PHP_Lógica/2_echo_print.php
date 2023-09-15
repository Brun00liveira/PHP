<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Aula 2 -> comando echo e print -->
<!-- Podemos utilizar caracteristicas do html dentro do codigo php -->
<?php

    echo 'impressão de texto<br/>';

    print 'impressão de texto e variavel<hr/>';
// O print tambem pode retornar uma variavel, e para declarar a variavel utilizamos conchetes    
    print ('impressão da variavel<br/>');
// Para verificar se a variavel no comando print esta correta, utilizamos um echo antes do print.
// Se o retorno for o número 1, esta correto, mas se for o 0, há algum erro na variavel
    echo print ('0 ou 1 verificar<hr/>')
?>
</body>
</html>