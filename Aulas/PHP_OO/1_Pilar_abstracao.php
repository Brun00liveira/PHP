
<!-- Um modulo de RH de um ERP, criando um relatório sobre os funcionario da empresa-->
<!-- Este é o modelo da ABSTRAÇÃO do problema -->
<?php
// modelo -> o nome do modelo
    class Funcionario{
//atributos -> caracteristicas do funcionario
        public $nome = 'José';
        public $telefone = '9 9999-9999';
        public $numFilhos = 2;
//metodos -> são um grupo de codigo que poder usados para obter informações ou alterar valores
        function resumirCadastFunc() {
            return "$this->nome possui $this->numFilhos e seu telefone é $this->telefone";
        }
        function modificarNome($nome){
            $this->nome = $nome;
        }
        function modificarNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }
        function modificarNumTelefone($numTelefone) {
            $this->telefone = $numTelefone;
        }

    }

// Como já dito, fizemos a abstração do problema, agora irei utilizar os valores utilizando a função NEW os atributos de toda a abstração. 
//antes da alteração

$y = new Funcionario();
echo $y->resumirCadastFunc();
echo '<br/>';
//depois da alteração

$y->modificarNumFilhos(0);
$y->modificarNome('Bruno');
$y->modificarNumTelefone('9 9114-3357');
echo $y->resumirCadastFunc();


?>