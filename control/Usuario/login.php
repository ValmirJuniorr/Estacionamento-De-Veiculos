<?php 
//Login muito simples e trivial, não há nenhuma implementação de criptografia de dados nem proteção de acesso aos cookies

//Inclui arquivo de conexão 
include('../connection/connection.class.php');
include("../../model/Empregado.php");

//Se existir login e senha por post
if(isset($_POST['login']) && isset($_POST['senha'])){	
	$empregado = new Empregado();
	if($empregado->autentica($_POST['login'], $_POST['senha'])){
		session_start();
		$_SESSION['empregado'] = $empregado;
                
		header('Location: ../../index.php');				
	}else{
		header('Location: ../../index.php?pg=login');	
	}
}
else{
	header("Location: ../../index.php?pg=login");	
}

?>