<?php

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';
try{
    $conexao = new PDO($dsn, $usuario, $senha);
    
    $query = '
        select * from tb_usuarios where id = 1
    ';

$stmt = $conexao->query($query);
$retorno = $stmt->fetch(PDO::FETCH_OBJ);

echo '<pre>';
print_r($retorno);
echo '</pre>';

echo $retorno->nome;


} catch (PDOException $erro) {

    echo 'Erro '. $erro->getCode(). ' <br/> Mensagem: '. $erro->getMessage(). ' <br/> Numero da linha com erro: '. $erro->getLine();


}
?>