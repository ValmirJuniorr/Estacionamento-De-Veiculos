<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
include('../connection/connection.class.php');

$bd = new Banco();
$bd->abrir();
if(isset($_GET['idVaga']) && isset($_GET['idCliente'])) {
$idVaga = $_GET['idVaga'];
$idCliente = $_GET['idCliente'];
    
$atualizar_sql =  mysql_query("UPDATE vaga SET status = '2' WHERE idVaga = '$idVaga'") or die (mysql_error());
    $cadastro = mysql_query("INSERT INTO reserva (idVaga, idCliente) VALUES('$idVaga', '$idCliente')") or die(mysql_error());    
    if($cadastro == true){
        header('Location: ../../view/atendente/');        
    }
    header('Location: ../../view/atendente/'); 
}else {
    header('Location: ../../view/atendente/'); 
}
$bd->fechar();
 
?>