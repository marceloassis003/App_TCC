<?php

    include_once 'conexao.php';

    $sql3 = $dbcon->query("SELECT * FROM relatorios");

    if($sql3 > 0) {
        echo "consulta_ok";
    
    } else {
        echo "consulta_erro";

    }





?>