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
//1° vem function e depois o nome da função

        //Função Void (sem retorno)
        function exibirBoasVindas() {
            echo "Bem-vindo ao curso! <br />";
        }

        exibirBoasVindas();
        exibirBoasVindas();


//Neste caso entre os parenteses existem parâmetros, afim de solucionar o que a função requere

        //Função return (com retorno)
        function calcularAreaTerreno($largura, $comprimento) {
            $area = $largura * $comprimento;
            return $area;
        }

        echo calcularAreaTerreno(30,50);
    ?>
</body>
</html>