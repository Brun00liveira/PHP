<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Comparação
        Igual (==)
        idêntico (===)
        Diferente (<> ou !=)
        Não idêntico (!==)
        Menor (<)
        Maior (>)
        Maior igual (>=)   
        Menor igual (<=)      
    -->
    <!-- Lógicos
        Operador E (and ou &&) -> retorna verdadeiro se os dois forem verdadeiros
        Operador ou (Or ou ll) -> retorna verdadeiro um for verdadeiro
        Operador Xor (XOR)- verdade se e somente se uma das expressões forem verdadeiras
        Operador negação (!) - Inverte o resultado da expressão  
    -->
    <?php
        if(3 == 3 && 10 > 2) {
            echo 'verdadeiro';
        } else{
            echo 'falso';
        };
        echo '<br/>';

        if(3 == 3 || 10 > 2) {
            echo 'verdadeiro';
        } else{
            echo 'falso';
        };
        echo '<br/>';

        if(3 != 3 xor 10 > 2) {
            echo 'verdadeiro';
        } else{
            echo 'falso';
        };
        echo '<br/>';
// ele inverte o resultado da condição
        if(!(3 == 3 && 10 > 2)) {
            echo 'verdadeiro';
        } else{
            echo 'falso';
        };
        echo '<br/>';

//() estabele prioridade
if((3 != 4 || 10 > 2) && 2 > 5) {
    echo 'verdadeiro';
} else{
    echo 'falso';
};
echo '<br/>';
    ?>
</body>
</html>