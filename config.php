<?php
//Serve para fazer a conexão entre o servidor do código e do banco de dados
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASS', '');
	define('BASE', 'clinica');

    $conn= new MySQLi(HOST, USER, PASS, BASE);
//Apenas para garantir que conectou
/*
	if($conn==true){
		print "Conectou ao banco";
	}
	else{
		print "Não foi possível conectar";
	}
*/
?>
