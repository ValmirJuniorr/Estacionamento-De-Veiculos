<?php

//Login muito simples e trivial, não há nenhuma implementação de criptografia de dados nem proteção de acesso aos cookies

//Inclui arquivo de conexão
include '../connection/connection.class.php';
include '../../model/Empregado.php';

if (isset($_POST['manterConectado'])) {
    if ($_POST['manterConectado'] == 1) {
        $cookiesalva = base64_encode($_POST['login']).'&'.base64_encode($_POST['senha']); //1 se for clienteDirect
        setcookie('login', $cookiesalva, time() + 60 * 60 * 24 * 30, '/');
    } else {
        setcookie('login', '', time() + 3600, '/');
    }
}

//Se existir login e senha por post
if (isset($_POST['login']) && isset($_POST['senha'])) {
    $empregado = new Empregado();
    if ($empregado->autentica($_POST['login'], $_POST['senha'])) {
        session_start();
        $_SESSION['empregado'] = $empregado;
        if ($empregado->getTipo() == 1) {
            header('Location: ../../index.php');
        } else {
            header('Location: ../../view/atendente/index.php');
        }
    } else {
        header('Location: ../../index.php?pg=login');
    }
} else {
    header('Location: ../../index.php?pg=login');
}
