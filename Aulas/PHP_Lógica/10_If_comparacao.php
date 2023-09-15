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
    //==
        if(3 == 3) {
            echo 'verdadeiro';
        } else {
            echo 'Falso';
        };
        echo '<br/>';

    //===

    if(3 === '3') {
        echo 'verdadeiro';
    } else {
        echo 'Falso';
    }
    echo '<br/>';

     //!= <>

     if(3 <> 3) {
        echo 'verdadeiro';
    } else {
        echo 'Falso';
    };
    echo '<br/>';

    //!==
     
    if(3 !== '3') {
        echo 'verdadeiro';
    } else {
        echo 'Falso';
    };
    echo '<br/>';

    //>
     
    if(3 > 3) {
        echo 'verdadeiro';
    } else {
        echo 'Falso';
    };
    echo '<br/>';

    //<
     
    if(2 < 3) {
        echo 'verdadeiro';
    } else {
        echo 'Falso';
    };
    echo '<br/>';
    
    //<=
     
    if(10 <= 3) {
        echo 'verdadeiro';
    } else {
        echo 'Falso';
    };
    echo '<br/>';

    //>=
     
    if(16 >= 3) {
        echo 'verdadeiro';
    } else {
        echo 'Falso';
    };
    echo '<br/>';
    
    ?> 
</body>
</html>