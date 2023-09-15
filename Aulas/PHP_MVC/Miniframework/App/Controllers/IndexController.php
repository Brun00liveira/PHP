<?php 

    namespace App\Controllers;

    class IndexController {

        private $view;

    public function __construct() {
        $this->view = new \stdClass();
    }
   
// action
    public function index() { // O require_once vai partir da pagina instanciada que no caso é o /public.index.php
        $this->view->dados = ['sofa', 'cama', 'casado'];
        $this->render('Index',);
    }
    public function sobreNos() {
        $this->view->dados = ['sofa', 'casado'];
        $this->render('sobreNos');
    }
    public function render($view) {
        
        $classAtual = get_class($this);

        $classAtual = str_replace('App\\Controllers\\', '', $classAtual);
        
        $classAtual = strtolower(str_replace('Controller', '', $classAtual));

        require_once "../App/Views/".$classAtual."/".$view.".phtml";
        
    }
     
}
?>