<?php 

namespace App;
// usar o namespace do bootstrap
use MF\Init\Bootstrap;
// 
class Route extends Bootstrap {

    
    
    // é a rota, o controller usado e ação
    public function initRoutes() {
        
        $routes['home'] = array(
            'route' => '/',
            'controller' => 'IndexController',
            'action' => 'Index'
        );
        

        $routes['sobre_nos'] = array(
            'route' => '/sobre_nos',
            'controller' => 'IndexController',
            'action' => 'sobreNos'
        );
    //esta chamando o $routes para o get
    $this->setRoutes($routes);

    }
}

?>