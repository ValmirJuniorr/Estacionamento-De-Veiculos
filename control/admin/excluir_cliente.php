<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../connection/connection.class.php';
include '../../model/Empregado.php';

$bd = new Banco();
$bd->abrir();

$idCliente = htmlspecialchars(mysql_real_escape_string(@$_GET['idCliente']));

$atualizar_sql = mysql_query("DELETE FROM cliente WHERE idCliente = '$idCliente'") or die(mysql_error());
if ($atualizar_sql) {
    header('Location: ../../?area=msg&tipo=5');
} else {
    header('Location: ../../?area=msg&tipo=6');
}
$bd->fechar();
