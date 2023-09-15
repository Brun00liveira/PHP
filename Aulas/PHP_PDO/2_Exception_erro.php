<?php
// a dss inicia mostran qual banco de dados estamos usando (MySQL) e em seguida qual a rota do retorno do banco de dados (host:localhost) e por fim o nome da database (dbname = php_com_PDO)
    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';
try{
    $conexão = new PDO($dsn, $usuario, $senha);
} catch (PDOException $erro) {
//para recuperar as as informações da tag pré basta buscar na documentação do PHP no PDO Exception
    echo 'Erro '. $erro->getCode(). ' <br/> Mensagem: '. $erro->getMessage(). ' <br/> Numero da linha com erro: '. $erro->getLine();

    // echo '<pre>';
    // print_r ($erro);
    // echo '</pre>';

}
?>