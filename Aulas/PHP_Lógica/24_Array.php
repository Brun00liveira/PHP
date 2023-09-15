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
        //$lista_frutas = array('banana', 'Maçã', 'Morango', 'Uva', 'abacate');
        $lista_frutas = ['banana', 'Maçã', 'Morango', 'Uva', 'abacate'];
        $lista_frutas[] = 'abacaxi';

        echo '<pre>';
            var_dump($lista_frutas);
        echo '</pre>';
        echo '<hr />';
        echo '<pre>';
            print_r($lista_frutas);
        echo '</pre>';
        echo '<hr />';
        echo $lista_frutas[2];

        echo '<hr />';
        echo '<hr />';

        //mudar o indice, ao vez de numeros, letras

        $lista_frutas = ['a' => 'banana',
                        'b' => 'Maçã',
                        'c' => 'Morango',
                        'd' => 'Uva', 
                        'e' => 'abacate'
                    ];
        $lista_frutas['f'] = 'limão';  
            echo '<pre>';
                var_dump($lista_frutas);
            echo '</pre>';
            echo '<hr />';
            echo '<pre>';
                print_r($lista_frutas);
            echo '</pre>';
            
        

    ?>
</body>
</html>