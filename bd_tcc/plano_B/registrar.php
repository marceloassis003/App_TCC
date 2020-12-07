<?php

    include_once 'Db.class.php';

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    

    $sql1 = $con->query("SELECT * FROM proprietario WHERE usuario='$usuario'");

    if(mysql_num_rows($sql1) > 0) {
        echo "email_erro";
    
    } else {
        
        $sql2 = $con->query("INSERT INTO proprietario(usuario, senha, nome, cnpj, telefone, email) VALUES('$usuario', '$senha', '$nome', '$cnpj', '$telefone', '$email')");

        if($sql2) {
            echo "registro_ok";
                   
         } else {
             echo "registro_erro";
         }


    }





?>