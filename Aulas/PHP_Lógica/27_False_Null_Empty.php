<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Null</h2>
    <?php 

        $funcionario1 = null;
        $funcionario2 = '';
        $funcionario3 = false;

        if(is_null($funcionario1)) {
            echo 'Sim, a variavel é null';
        } else {
            echo 'Não, a variavel não é nula';
        }
        echo '<br/>'; 

        if(is_null($funcionario2)) {
            echo 'Sim, a variavel é null';
        } else {
            echo 'Não, a variavel não é nula';
        }
    ?>
    <p> Ou seja, uma variavel vazia, não é nula</p>
    <hr/>
    <h2>Vazio</h2>
    <?php 

$funcionario1 = null;
$funcionario2 = '';
$funcionario3 = false;

if(empty($funcionario1)) {
    echo 'Sim, a variavel é vazia';
} else {
    echo 'Não, a variavel não é vazia';
}
echo '<br/>'; 

if(empty($funcionario2)) {
    echo 'Sim, a variavel é vazia';
} else {
    echo 'Não, a variavel não é vazia';
}
echo '<br/>';
?>
<p> Ou seja, uma variavel nula, pode ser vazia</p>
<hr/>
<h2>False</h2>
    <?php 

$funcionario1 = null;
$funcionario2 = '';
$funcionario3 = false;

if(empty($funcionario3)) {
    echo 'Sim, a variavel é vazia';
} else {
    echo 'Não, a variavel não é vazia';
}
echo '<br/>'; 

if(is_null($funcionario3)) {
    echo 'Sim, a variavel é null';
} else {
    echo 'Não, a variavel não é null';
}
echo '<br/>';
?>
<p> Ou seja, uma variavel falsa, pode ser vazia e não é considerado null</p>

</body>
</html>