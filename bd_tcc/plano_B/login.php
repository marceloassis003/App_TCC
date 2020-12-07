<?php 

	include_once 'Db.class.php';

	$usuario=$_POST['usuario'];
	$senha=$_POST['senha'];

	$sql = $con ->query("SELECT * FROM proprietario WHERE usuario='$usuario' AND senha='$senha'");

	if(mysql_num_rows($sql) > 0) {
		echo "login_ok";
	} else {
		echo "login_erro";
	}


?>