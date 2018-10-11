<?php

include_once 'model/Empregado.php';
if (isset($_SESSION['empregado'])) {
    $empregado = $_SESSION['empregado'];
    if ($empregado->getTipo() != 1) {
        header('Location: index.php?pg=login');
    }
} else {
    header('Location: index.php?pg=login');
}
