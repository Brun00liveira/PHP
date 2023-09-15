<?php

    namespace MF\Init;

    abstract class Bootstrap {

    abstract protected function initRoutes();    

    private $routes;
    
    // interliga o route.php com o objeto instanciado em index.php
    
    public function __construct() {
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    // recupera o array do init routes

    public function getRoutes() {
        return $this->routes;
    }

    // modifica o array do init routes

    public function setRoutes(array $routes) {
        $this->routes = $routes;

    }
     // retorna o URL 

     public function run($url) {
        //    echo 'retorno da função run '. $url;
        // isolei separadamente os arrays
            foreach ($this ->getRoutes() as $key => $route) {
                if($url == $route['route']) {
                    // $class = App\Controllers\IndexController;
                    $class = "App\\Controllers\\" .ucfirst($route['controller']);
                    $controller = new $class;
    
                    $action = $route['action'];
    
                    $controller -> $action();
                }
            }
        }
    
        // busca a URL do $_Server
        public function getUrl() {
    //        echo '<hr/>';
    //        echo 'retorno da url ';
            return parse_url ($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        }
}
?>