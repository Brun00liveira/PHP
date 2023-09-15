<?php 

    require '../config.php';

    echo $_SESSION['nome'];

    session_destroy();
?>