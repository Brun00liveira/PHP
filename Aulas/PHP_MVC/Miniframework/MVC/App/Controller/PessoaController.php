<?php

class PessoaController{
// cada um dos métodos da PessoaController processa uma rota        
    //index responsavel pela listagem
    Public static function index(){
        //Incluindo Views ao controller   
        
        include 'Model/PessoaModel.php';
        
        $model = new PessoaModel();
        $model->getAllRows();

        include 'View/modules/Pessoa/ListaPessoa.php';
    }   
    //index responsavel pela formulario
    Public static function form(){

        include 'Model/PessoaModel.php';
        
        $model = new PessoaModel();
        if(isset($_GET['id'])){
        $model = $model->getById((int) $_GET['id']);
        }
        //var_dump($model);
        
        include 'View/modules/Pessoa/FormPessoa.php';
      
        

    }
    public static function save(){
    // este metodo retorna salvar o $_POST do Form,        
    // para que o $_POST vá para o mysql
        include 'Model/PessoaModel.php';
        
        $model = new PessoaModel();

        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->cpf = $_POST['cpf'];
        $model->data_nascimento = $_POST['data_nascimento'];
        
        $model->save();

        header('Location: /pessoa');

        
    }  
    public static function delete(){

        include 'Model/PessoaModel.php';

        $model = new PessoaModel();
        $model->delete((int) $_GET['id']);

        header('Location: /pessoa');
        
    }
    
}


?>