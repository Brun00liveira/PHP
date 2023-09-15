<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> <strong>In_array </strong> ou false para existência do que esta sendo pesquisados</p>
    <?php 

        $lista_coisas = array(1 => 'banana', 2 => 'maçã',3 => 'Morango', 4 => 'Uva'); 
        echo '<pre>';
        print_r($lista_coisas);
        echo '</pre>';
        
        $existe = in_array('Pera',$lista_coisas);
        //true -> texto = 1
        //false -> texto = vazio
        if($existe) {
            echo 'O valor pesquisado existe no array';
        } else {
            echo 'O valor pesquisado não existe no array';
        }
    ?>
    <p> <strong>Array_search</strong> retorna o indice do valor pesquisado</p>
    <?php 

        $lista_coisas = array(1 => 'banana', 2 => 'maçã',3 => 'morango', 4 => 'uva'); 
        echo '<pre>';
        print_r($lista_coisas);
        echo '</pre>';
        
        $existem = array_search('maçã', $lista_coisas);
        //null -> texto = vazio
        if($existem) {
            echo 'O valor pesquisado existe no array';
        } else {
            echo 'O valor pesquisado não existe no array';
        }
        echo '<hr/>';
        echo '<br/>';

        $lista_de_coisas['frutas'] = array(1 => 'banana', 2 => 'maçã',3 => 'Morango', 4 => 'Uva'); 
        $lista_de_coisas['pessoas'] = [1 => 'João', 2 => 'José',3 => 'Maria'];

        echo '<pre>';
        print_r($lista_de_coisas);
        echo '</pre>';
        echo '<hr/>';
        echo '<br/>';
        echo in_array('maçã',$lista_de_coisas['frutas']);
        echo '<br/>';
        echo array_search('Maria',$lista_de_coisas['pessoas']);
    ?>
</body>
</html>