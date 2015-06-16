<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once("control/Usuario/conferirLogin.php");	
include_once('control/connection/connection.class.php');
//include("/model/Empregado.php");

$bd = new Banco();
$bd->abrir();

$nomeUsuario = htmlspecialchars(mysql_real_escape_string(@$_POST['nomeUsuario']));
$cpf = htmlspecialchars(mysql_real_escape_string(@$_POST['cpf']));
$indentidade = htmlspecialchars(mysql_real_escape_string(@$_POST['indentidade']));
$rua = htmlspecialchars(mysql_real_escape_string(@$_POST['rua']));
$numero = htmlspecialchars(mysql_real_escape_string(@$_POST['numero']));
$cidade = htmlspecialchars(mysql_real_escape_string(@$_POST['cidade']));
$bairro = htmlspecialchars(mysql_real_escape_string(@$_POST['bairro']));
$uf = htmlspecialchars(mysql_real_escape_string(@$_POST['uf']));

//Busca se há algum login igual no Banco

//Conta número de registros da busca anterior


    $cadastro1 = mysql_query("INSERT INTO usuario (nomeUsuario, cpf, indentidade, rua, numero, cidade, bairro, uf) VALUES('$nomeUsuario', '$cpf', '$indentidade', '$rua', '$numero', '$cidade', '$bairro', '$uf')") or die(mysql_error());
    $id = mysql_insert_id();
    echo  $cadastro1;
    $cadastro2 = mysql_query("INSERT INTO cliente (status, totalGasto, numeroLocacoes, idUsuario) VALUES('1', '0', '0', $id )") or die(mysql_error());
    if($cadastro1 == true || $cadastro2 == true){
        header('Location: ?area=msg&tipo=2');        
    }
    else header('Location: ?area=msg&tipo=1');

$bd->fechar();
 
?>