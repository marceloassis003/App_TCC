<?php 

    $host = 'mysql669.umbler.com';
    $usuario = 'adminraingate';
    $senha = '1234abcde';
    $banco = 'apptcc';

    $dbcon = new MySQLi("$host", "$usuario", "$senha", "$banco");

    if($dbcon->connect_error){
            echo "conexao_erro";
    } else {
            echo "conexao_ok";
    }


?>
