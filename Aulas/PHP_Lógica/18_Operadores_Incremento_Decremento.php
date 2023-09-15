<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Operadores</h3>
    <p>Pré-incremento (++$a) - Adiciona uma unidade antes de retornar $a</p>
    <p>Pós-incremento ($a++) - Retorna $a e depois adiciona uma unidade</p>
    <p>Pré-Decremento (--$a) - Diminui uma unidade antes de retornar $a</p>
    <p>Pós-Decremento ($a--) - Retorna $a e depois diminui uma unidade</p>
<hr/>
    <h3>Pós Incremento</h3>
    <?php 

        $a = 7;

        echo "O valor contido em a é $a <br />";
        echo 'O valor de incremento só é lido na proxima linha de codigo = ' . $a++. '<br />';
        echo "O valor atualizado é $a";

    ?>

    <h3>Pré Incremento</h3>
    <?php 

        $a = 7;

        echo "O valor contido em a é $a <br />";
        echo 'O valor de incremento só é lido nesta linha de codigo = ' . ++$a. '<br />';
        
    ?>

    <h3>Pós Decremento</h3>

    <?php 

        $a = 7;

        echo "O valor contido em a é $a <br />";
        echo 'O valor de incremento só é lido na proxima linha de codigo = ' . $a--. '<br />';
        echo "O valor atualizado é $a";

    ?>

<h3>Pré Decremento</h3>

    <?php 

        $a = 7;

        echo "O valor contido em a é $a <br />";
        echo 'O valor de incremento só é lido nesta linha de codigo = ' . --$a. '<br />';
    ?>

</body>
</html>