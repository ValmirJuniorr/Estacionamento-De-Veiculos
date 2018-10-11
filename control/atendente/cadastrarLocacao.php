<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
date_default_timezone_set('America/Sao_Paulo');
session_start();
include '../connection/connection.class.php';

$bd = new Banco();
$bd->abrir();

$idVaga = $_SESSION['locacao'][0];
$tipo = $_SESSION['locacao'][1];
$placa = $_SESSION['locacao'][2];
$entrada = date('Y-m-d H:i:s');

if ($tipo == 1) {
    $idCliente = htmlspecialchars(mysql_real_escape_string(@$_GET['idCliente']));
} else {
    $idCliente = '';
}
    $cadastro = mysql_query("INSERT INTO locacao (idVaga, idCliente, entrada, placa) VALUES('$idVaga', '$idCliente', '$entrada', '$placa')") or die(mysql_error());
    $atualizar_sql = mysql_query("UPDATE vaga SET status = '1' WHERE idVaga = '$idVaga'") or die(mysql_error());
    if ($cadastro == true) {
        header('Location: ../../view/atendente/');
    }
    header('Location: ../../view/atendente/');

$bd->fechar();
