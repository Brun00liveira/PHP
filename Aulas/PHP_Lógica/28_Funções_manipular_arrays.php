<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Funções de arrays</h2>
    <?php 
    //----------------------------------------
    //IS_ARRAY: VERIFICAR SE É UM ARRAY
    /*
    $array = 'pão';
    $retornar = is_array($array);

    if($retornar){
        echo 'Sim, é um array';
    } else{
        echo 'Não, não é um array';
    }
    */
    //-------------------------------------------------
    //ARRA_KEYS: VERFICFICAR QUAIS SÃO AS CHAVES DO ARRAY

    // $array = [1 => 'peixe', 11 => 'Pudim', 12 => 'Pizza'];

    // echo '<pre>';
    //     print_r($array);
    // echo '</pre>';

    // $chaves_array = array_keys($array);

    // echo '<pre>';
    //     print_r($chaves_array);
    // echo '</pre>';
//-------------------------------------------------------
//SORT: PARA AGRUPAS OS NOMES DO ARRAY
// $array = ['Zebra', 'Coelho','Aves'];

//     echo '<pre>';
//         print_r($array);
//     echo '</pre>';

//     sort($array);
//     echo '<pre>';
//     print_r($array);
// echo '</pre>';
//-------------------------------------------------------
//ASORT: PARA AGRUPAS OS NOMES COM OS INDICES DE ARRAY DO ARRAY
// $array = ['Zebra', 'Coelho','Aves'];

//     echo '<pre>';
//         print_r($array);
//     echo '</pre>';

//     asort($array);
//     echo '<pre>';
//     print_r($array);
// echo '</pre>';
//-------------------------------------------------------------
//COUNT: CONTA QUANTOS INDICES POSSUEM NO ARRAY
// $array = ['Zebra', 'Coelho','Aves'];

//     echo '<pre>';
//         print_r($array);
//     echo '</pre>';
//     echo count($array);
//-------------------------------------------------------------
//ARRAY_MERGE: FUNDE UM OU MAIS ARRAYS
    // $array1 = ['osx', 'windows'];
    // $array2 = ['linux', 'phoenix'];
    // $array3 = ['marble','solaris'];
    // $novo_array = array_merge($array1,$array2,$array3);
    // echo '<pre>';
    //     print_r($novo_array);
    // echo '</pre>';
//-------------------------------------------------------------
//EXPLODE: DIVIDE UMA STRING BASEADO EM UM DELIMITADOR    
//-------------------------------------------------------------

    // $string = '26/02/1002';
    // $array_retorno = explode('/',$string);
    //     echo '<pre>';
    //         print_r($string);
    //         print_r($array_retorno);
    //         echo $array_retorno[2] . '-' . $array_retorno[1]. '-' . $array_retorno[0];
    //     echo '</pre>';

//-------------------------------------------------------------
//IMPLODE: JUNTA ELEMNETOS DE UM ARRAY EM UMA STRING    
//-------------------------------------------------------------
    $array = ['a','b','x','y'];
    $Juntar_em_uma_string = implode('-',$array);
    echo '<pre>';
        print_r($Juntar_em_uma_string);
    echo '</pre>';

    ?>
</body>
</html>