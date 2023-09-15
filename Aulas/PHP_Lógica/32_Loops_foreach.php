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
//especialista em trabalhar com os arrays
    $itens = ['sofa', 'mesa', 'cadeira','iglu', 'cortina', 'lixo'];
    echo '<pre>';
    print_r($itens);
    echo '</pre>';

    foreach ($itens as $x)
 {
    echo $x;

    if($x == 'mesa') {
        echo '(* BOAAAAAAAAAAA)';
    }
    echo '<br/>';
    
 }    ?>
</body>
</html>