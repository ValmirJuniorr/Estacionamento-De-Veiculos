<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../Usuario/conferirLogin.php';
include '../connection/connection.class.php';
include '../../model/Empregado.php';

$bd = new Banco();
$bd->abrir();
$login = htmlspecialchars(mysql_real_escape_string(@$_POST['login']));
$senha = htmlspecialchars(mysql_real_escape_string(@$_POST['senha']));
//Busca se há algum login igual no Banco
$conferir_sql = mysql_query("SELECT login FROM empregado WHERE login = '$login'") or die(mysql_error());
//Conta número de registros da busca anterior
$conferir_login = mysql_num_rows($conferir_sql);
if ($conferir_login < 1 || $login == '') {
    $cadastro = mysql_query("INSERT INTO empregado (login, senha, tipo) VALUES('$login', '$senha', '2')") or die(mysql_error());
    if ($cadastro == true) {
        header('Location: ?area=msg&tipo=2');
    } else {
        header('Location: ?area=msg&tipo=1');
    }
} else {
    header('Location: ?area=msg&tipo=1');
}
$bd->fechar();
