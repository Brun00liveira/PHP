<?php
// a dss inicia mostran qual banco de dados estamos usando (MySQL) e em seguida qual a rota do retorno do banco de dados (host:localhost) e por fim o nome da database (dbname = php_com_PDO)
    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';
    $conexão = new PDO($dsn, $usuario, $senha);

?>