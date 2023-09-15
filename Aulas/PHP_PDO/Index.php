<?php

Print_r($_POST);

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';
try{
    $conexão = new PDO($dsn, $usuario, $senha);
} catch (PDOException $erro) {

    echo 'Erro '. $erro->getCode(). ' <br/> Mensagem: '. $erro->getMessage(). ' <br/> Numero da linha com erro: '. $erro->getLine();

}