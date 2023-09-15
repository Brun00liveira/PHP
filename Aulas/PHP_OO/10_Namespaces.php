<?php
//para usar as bibliotecas podemos importar com require
    require "../PHP_OO/bibliotecas/lib1/lib1.php";
    require "../PHP_OO/bibliotecas/lib2/lib2.php";

    use A\Cliente as C1;
//normalmente o uso de duas bibliotecas com o msm class da conflito por isso foi criado o as, para apelidar a class

    $c = new C1();
    print_r($c);
    echo $c->__get('nome');

    use B\Cliente;

    $a = new Cliente();
    print_r($a);
    echo $a->__get('nome');
?>