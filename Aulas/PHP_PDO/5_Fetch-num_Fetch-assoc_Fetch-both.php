<?php

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';
try{
    $conexao = new PDO($dsn, $usuario, $senha);
    
    $query = '
        select * from tb_usuarios
    ';

$stmt = $conexao->query($query);
// Existem inumeros comandos na documentação
//PDO:: NUM -> retorna o arrays de numero
//PDO:: ASSOC -> retorna os arrays associativos
//PDO:: BOTH -> retorna ambos
//PDO:: OBJ -> retorna em objeto
$retorno = $stmt->fetchAll(PDO::FETCH_OBJ);

echo '<pre>';
print_r($retorno);
echo '</pre>';

echo $retorno[0]->nome;

} catch (PDOException $erro) {

    echo 'Erro '. $erro->getCode(). ' <br/> Mensagem: '. $erro->getMessage(). ' <br/> Numero da linha com erro: '. $erro->getLine();


}
?>