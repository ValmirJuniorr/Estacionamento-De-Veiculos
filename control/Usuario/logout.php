<?php	
session_start();
unset($_SESSION['empregado']);
header('Location: ../../index.php');
?>