<?php
//Modo de proteção dos dados
if(!empty($_POST['usuario']) && !empty($_POST['senha'])) {

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';
try{
    $conexao = new PDO($dsn, $usuario, $senha);

$query = "select * from tb_usuarios where ";
$query .= " email = :usuario ";
$query .= " AND senha = :senha ";

$stmt = $conexao->prepare($query);
//Antes de enviar os parâmetros ao banco, iremos fazer um preparo para que alterações só sejam executadas pelo programador
$stmt -> bindValue(':usuario',$_POST['usuario']);
$stmt -> bindValue(':senha',$_POST['senha']);

$stmt -> execute();

$usuario = $stmt->fetch(PDO::FETCH_NUM);



// echo $query;
// $stmt = $conexao->query($query);
// $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($usuario);
echo '</pre>';

} catch (PDOException $erro) {

    echo 'Erro '. $erro->getCode(). ' <br/> Mensagem: '. $erro->getMessage(). ' <br/> Numero da linha com erro: '. $erro->getLine();

}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="8_Prepare_Statement.php">
        <input type="text" placeholder="usuário" name="usuario"/>
        <br/>
        <input type="password" placeholder="senha"name="senha"/>
        <br/>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>