<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> p{color:brown}</style>
</head>
<body>
    <h2>Funções nativas para manipular datas</h2>
    <!-- Recuperar a data atual -->
        <p>date(formatp)</p>
        <?php 
            echo date('d');
            echo  '<br/>';
            echo date('D');
            echo  '<br/>';
            echo date('d/m/Y H:i:s');
            echo  '<br/>';
            echo date('d-m-Y H:i:s')

        ?>
    <!-- Recuperar o lugar do fuso horario da aplicação -->
        <p>date_default_timezone_get(timezone)</p>
        <?php 
    
            echo date_default_timezone_get();
        ?>
    <!-- Atualizar o lugar do fuso horario da aplicação-->
        <p>date_default_timezone_set(timezone)</p>
        <?php 
            date_default_timezone_set('America/Sao_Paulo');
            echo date('d-m-Y H:i:s')
        ?>
    <!-- transforma datas textuais em segundos -->
        <p>strtotime($texto)</p>
        <?php 
            $data_inicial = '2018-04-24';
            $data_final = '2018-05-15';

            //timestamp
            $time_inicial = strtotime($data_inicial);
            $time_final = strtotime($data_final);
            echo $data_inicial . '-' . $time_inicial;
            echo  '<br/>';
            echo $data_final . '-' . $time_final;

            $diferenca_times = $time_final - $time_inicial;
            $diferenca_dias = $diferenca_times / 86400;
            echo  '<br/>';
            echo 'A diferença, segundos das datas é igual a : ' .$diferenca_times;
            echo  '<br/>';
            echo  'A diferença é ' .$diferenca_dias. ' dias'
            ?>
</body>
</html>