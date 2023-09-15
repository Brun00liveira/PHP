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
    echo '<h3>Break: Quando o programa ler o break, o código é parado automaticamento</h3>';
        $num = 0;
        while($num < 100) {
            
            echo $num. '<br/>'; 
            $num += 5;

        if($num == 55) {
            break;
        }
    }
    echo '<hr/>';
//====================================================================================================================
echo '<h3>continue: Quando o continue é lido pelo código, ele retorna automaticamente para o inicio do programa</h3>';
        $num = 0;
        while($num < 100) {
            $num += 5; 
        if($num ==10 || $num == 25 || $num == 90){
            continue;
        }
            echo $num. '<br/>'; 
    }
    echo '<hr/>'
//====================================================================================================================
    ?>
    
</body>
</html>