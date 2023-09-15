<?php

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';
try{
    $conexao = new PDO($dsn, $usuario, $senha);
    
    $query = '
        select * from tb_usuarios
    ';
//$stmt é a variavel PDOstatement, utilizei para poder chamar a funcão fetchAll
//fetchAll() função de demonstração do select

$stmt = $conexao->query($query);
$retorno = $stmt->fetchAll();
echo '<pre>';
print_r($retorno);
echo '</pre>';
echo $retorno[1][2];
} catch (PDOException $erro) {

    echo 'Erro '. $erro->getCode(). ' <br/> Mensagem: '. $erro->getMessage(). ' <br/> Numero da linha com erro: '. $erro->getLine();


}
?>