<?php

//Já que estamos usando a Class Pessoa, vamos incluir

include 'Controller/PessoaController.php';

// Buscar a Url que o usuário esta acessando
// O PHP_URL_PATH nos mostra somente a partir do nome do site

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url){
    case '/':
        echo "página inicial";
    break;

    case '/pessoa': // como o controller index é statico podemos chamar usando '::'
        PessoaController::index();
    break;

    case '/pessoa/form': // como o controller index é statico podemos chamar usando '::'
        PessoaController::form();
    break;

    case '/pessoa/form/save':
        PessoaController::save();
    break;

    case '/pessoa/delete':
        PessoaController::delete();
    break;
    
    default:
        echo "Erro 404";
    break;
}