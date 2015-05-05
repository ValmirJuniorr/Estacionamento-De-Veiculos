<?php

include_once('../Usuario/verificarPermissao.php');	
include('../connection/connection.class.php');

$bd = new Banco();
$bd->abrir();

$idUsuario = htmlspecialchars(mysql_real_escape_string(@$_POST['idUsuario']));
$nomeUsuario = htmlspecialchars(mysql_real_escape_string(@$_POST['nomeUsuario']));
$cpf = htmlspecialchars(mysql_real_escape_string(@$_POST['cpf']));
$indentidade = htmlspecialchars(mysql_real_escape_string(@$_POST['indentidade']));
$rua = htmlspecialchars(mysql_real_escape_string(@$_POST['rua']));
$numero = htmlspecialchars(mysql_real_escape_string(@$_POST['numero']));
$cidade = htmlspecialchars(mysql_real_escape_string(@$_POST['cidade']));
$bairro = htmlspecialchars(mysql_real_escape_string(@$_POST['bairro']));
$uf = htmlspecialchars(mysql_real_escape_string(@$_POST['uf']));

$atualizar_sql =  mysql_query("UPDATE usuario SET nomeUsuario = '$nomeUsuario', cpf = '$cpf', rua = '$rua', numero = '$numero', cidade = '$cidade', bairro = '$bairro', uf = '$uf' WHERE idUsuario = '$idUsuario'") or die (mysql_error());
if($atualizar_sql){
    header('Location: ../../?area=msg&tipo=3');
}else{
    header('Location: ../../?area=msg&tipo=4');
}

?>
