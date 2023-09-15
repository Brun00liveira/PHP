

<?php 

// private : proíbe qualquer acesso externo à própria classe, inclusive das classes filhas.(Só se usa na classe na qual foi privada)
// public : permite acesso a qualquer código externo a classe.
// protected : permite acesso às classes filhas, mas proíbe a qualquer outro acesso externo.(Pode ser usada em mais de uma classe)

class Pai{

    public $nome = 'Bruno';
    protected $idade = 12;
    private $peso = 102.23;


//metodo mágico
    function __get($attr) {
        return $this->$attr;
    }
    function __set($attr, $value) {
        return $this->$attr = $value;
    }
//métodos get
    function getNome(){
        return $this->nome;
    }
    function getIdade(){
        return $this->idade;
    }
    public function getPeso(){
        return $this->peso;
    }
//Método set
    public function setIdade($idad){
        $this -> idade = $idad;
    }
// Teste com funções
    private function executarMania(){
        echo 'assobiar';
    }
    protected function responder(){
        echo 'oi';
    }
    public function executarAcao() {

        $x = rand(1,10);

        if($x >= 1 && $x <= 8){
            $this->responder();
        }else
            $this->executarMania();
    }
}
// o atributo peso não foi herdado pois é private, mas ele pode ser usado através de um método

class Filho extends Pai{



}
$pai = new Pai();
// O nome ira aparecer na pagina do script por ser publico e a idade e o peso não irão aparecer por não serem publicos
// Porem se na função eu incluir o public, pela regra de negocio, vai aparecer no script
echo 'Exemplos da Class Pai';
echo '<br/>';
echo '<br/>';
echo $pai->getNome();
echo '<br/>';
echo $pai->getIdade();
echo '<br/>';
echo $pai->getPeso();
echo '<br/>';
echo '<hr/>';
// Funções private e protected tambem erro, para utiliza-los iremos criar uma condição no executarAção();
// echo $pai->executarMania();
// echo '<br/>';
// echo $pai->responder();
// echo '<br/>';
echo $pai->executarAcao();
echo '<br/>';
echo '<hr/>';
echo '<hr/>';
echo 'Exemplos da Class Filho';
echo '<br/>';
echo '<br/>';
$filho = new Filho();
echo '<pre>';
print_r($filho);
echo '</pre>';
//Verificar quais methods estão sendo utilizado no filho
echo '<pre>';
print_r(get_class_methods($filho));
echo '</pre>';
//Teste nos metodos magicos
echo $filho->__get('nome'); // Só retorna o nome Bruno, pois utilizamos o método mágico para resgatar esse valor

?>