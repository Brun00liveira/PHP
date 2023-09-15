<?php

class PessoaDAO{
//para que todos os comando sejam arquivados em algum lugar utilizaremos a variavel $conexao

    public $conexao;
    // Sempre que instânciar a PessoaDAO, a função será exexultado através do construct
    public function __construct(){
        $dsn = "mysql:host=localhost:3306;dbname=db_mvc";
        //Php data object espera uma string DSN, usuario de acesso ao banco e senha.
        $this->conexao = new PDO($dsn, 'root', '');
    }
    // o insert e o update vão receber o $model do $dao->insert
    public function insert(PessoaModel $model){
        
        $sql = "INSERT INTO pessoa (nome, cpf, data_nascimento) VALUES (?, ?, ?)";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->data_nascimento);

        $stmt->execute();

    }

    public function update(PessoaModel $model){
        $sql = "UPDATE  pessoa SET nome=?, cpf=?, data_nascimento=? WHERE id=?";
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->data_nascimento);
        $stmt->bindValue(4, $model->id);

        $stmt->execute();

    }

    public function select(){
        
        $sql = "SELECT * FROM pessoa ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);

    }
    
// para quando retornar o ID do usuario mostrar todos os dados
    public function selectById(int $id){

        include_once 'Model/PessoaModel.php';

        $sql = "SELECT * FROM pessoa WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue (1, $id);
        $stmt -> execute();

        return $stmt->fetchObject("PessoaModel");
    
    }
    public function delete(int $id){
        $sql = "DELETE FROM pessoa WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

    }
    
}

?>