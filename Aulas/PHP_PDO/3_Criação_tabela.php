<?php
    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';
try{
    $conexao = new PDO($dsn, $usuario, $senha);
//para facilitar a  criação de  uma tabela, iremos iniciar com uma variavel e em seguida os comando do banco de dados
    $query = '
    create table tb_usuarios(
        id int not null primary key auto_increment,
        nome char(50) not null,
        email varchar(100) not null,
        senha varchar(32) not null
    )
    ';
    
//para que o sistema reconheça a tabela criada irei utilizar o exec($variavel)
$retornoTable = $conexao->exec($query);
echo $retornoTable;
//O PDO só retorna apenas o numeros de linhas modificadas (retorno do numero de linhas afetadas) ou removidas. Select e criação de tabela (retornam 0)
//para verificamos o que foi criado utilizaremos um echo $variavel
    $query = '
        insert into tb_usuarios(nome, email, senha) 
        value ("Bruno Oliveira", "brunobromo321@gmail.com", "euamida2010"),("Igor Mendeiros", "Lmanus_1@gmail.com", "euamida2011"),("Lincoln Jefferson", "LiFejr@gmail.com", "12355") 
    ';
    $retornoInsert = $conexao->exec($query);
    echo $retornoInsert;
} catch (PDOException $erro) {

    echo 'Erro '. $erro->getCode(). ' <br/> Mensagem: '. $erro->getMessage(). ' <br/> Numero da linha com erro: '. $erro->getLine();


}
?>