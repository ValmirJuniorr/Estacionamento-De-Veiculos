<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include('../connection/connection.class.php');

$bd = new Banco();
$bd->abrir();
$valor = htmlspecialchars(mysql_real_escape_string(@$_POST['valor']));


    $cadastro = mysql_query("INSERT INTO vaga (valor, status) VALUES('$valor', '0')") or die(mysql_error());
    if($cadastro == true){
        header('Location: ?area=msg&tipo=2');        
    }
    else header('Location: ?area=msg&tipo=1');

$bd->fechar();
 
?>