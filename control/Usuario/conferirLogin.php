<?php

include_once 'model/Empregado.php';

session_start();
if (isset($_SESSION['empregado'])) {
    $empregado = $_SESSION['empregado'];
    if ($empregado->verificarLogin() == false) {
        header('Location: index.php?pg=login');
    }
} else {
    header('Location: index.php?pg=login');
}
