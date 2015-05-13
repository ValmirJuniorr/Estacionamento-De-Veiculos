<?php

include('../connection/connection.class.php');

$bd = new Banco();
$bd->abrir();

$idVaga = htmlspecialchars(mysql_real_escape_string(@$_POST['idVaga']));
$valor = htmlspecialchars(mysql_real_escape_string(@$_POST['valor']));

$atualizar_sql =  mysql_query("UPDATE vaga SET valor = '$valor' WHERE idVaga = '$idVaga'") or die (mysql_error());
if($atualizar_sql){
    header('Location: ../../?area=msg&tipo=3');
}else{
    header('Location: ../../?area=msg&tipo=4');
}

?>
