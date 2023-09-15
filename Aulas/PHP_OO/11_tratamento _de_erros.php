<!-- A ideia do tratamento de erro é deixa ele mais bonito para o cliente
 -->

<?php 
 // uma logica
try{
    // Uma logica que onde possa ocorrer um potencial erro (fazer uma exceção)
    echo '<h3> *** Try *** </h3>';

    $sql = 'select * from cliente';
   // mysql_query($sql); //erro
//vamos supor que o arquivo para complementar o script não foi feito pelo outro funcinario, então deixaremos uma mensagem
    if(!file_exists('require_arquivo_a.php')) {
    //utilizarems o if com ! para forçar o erro e abrir uma exceção
        throw new Exception('O arquivo deveria estar pronto as '. date('d/m/y H:i:s') .'mas ele nao estava la');
    }

} catch (Error $e) {
    echo 'Tem um erro ae';
    echo '<p style= "color: red">'.$e. '</p>';
    //armazenado no banco de dados    

} catch (Exception $e) {
    echo 'Catch Exeption';
    echo '<p style= "color: red">'.$e. '</p>';
}

finally {
    echo '<h3> *** Finally *** </h3>';
}

?>