<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include('../connection/connection.class.php');

$bd = new Banco();
$bd->abrir();

$idReserva = htmlspecialchars(mysql_real_escape_string(@$_GET['idReserva']));
$idVaga = htmlspecialchars(mysql_real_escape_string(@$_GET['idVaga']));

$atualizar_sql =  mysql_query("UPDATE vaga SET status = '0' WHERE idVaga = '$idVaga'") or die (mysql_error());
$atualizar_sql =  mysql_query("DELETE FROM Reserva WHERE id = '$idReserva'") or die (mysql_error());
if($atualizar_sql){
    header('Location: ../../view/atendente/');        
}else{
    header('Location: ../../view/atendente/');        
}
$bd->fechar();
?>
