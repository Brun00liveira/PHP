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
    $registro = [
        ['Titulo' => 'Titulo noticia 1', 'conteudo' => 'conteudo noticia 1'],
        ['Titulo' => 'Titulo noticia 2', 'conteudo' => 'conteudo noticia 2'],
        ['Titulo' => 'Titulo noticia 3', 'conteudo' => 'conteudo noticia 3'],
        ['Titulo' => 'Titulo noticia 4', 'conteudo' => 'conteudo noticia 4']
    ];
    echo '<pre>';
        print_r($registro);
    echo '</pre>';
    echo '<br/><br/><br/>';
    echo 'Existem '. count($registro). '  registros';
    $idx = 0;
    // count -> conta a quantidade de elementos de array
    while($idx < count($registro)) {
        echo '<h3>'. $registro[$idx]['Titulo'] .'</h3>';
        echo '<p>'. $registro[$idx]['conteudo'] .'</p>';
        $idx++;
        echo '<hr />';
    
    }

    echo '<hr/>';
    echo '<hr/>';
    echo '<hr/>';

    $registros = [
        ['titulo' => 'TITULO 1', 'conteudo' => 'CONTEUDO 1'],
        ['titulo' => 'TITULO 2', 'conteudo' => 'CONTEUDO 2'],
        ['titulo' => 'TITULO 3', 'conteudo' => 'CONTEUDO 3'],
    ];
    echo '<pre>';
    print_r($registros);
    echo '<pre>';
    $x = 0;
        do{
            echo '<h3>' .$registros[$x]['titulo']. '</h3>' ;
            echo '<p>' .$registros[$x]['conteudo']. '</p>' ;
            echo '<hr/>';
            $x++;
        } while ($x < count($registros));
    
    echo '<hr/>';
    echo '<hr/>';
    echo '<hr/>';

    for($x = 0; $x < count($registros); $x++) {
        echo '<h3>' .$registros[$x]['titulo']. '</h3>' ;
        echo '<p>' .$registros[$x]['conteudo']. '</p>' ;
        echo '<hr/>';
    }
    ?>  
    


</body>
</html>