<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Mananger Park Val</title>
	<meta charset="utf-8">
	<meta name="description" content="Gerencie o seu estacionamento com iteligencia de maneira rápida.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">	
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- Style Css -->
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/animate.css">
</head>
<body>	
    
	<?php
                //Inclui a classe de conexão com banco
        include_once 'control/connection/connection.class.php';
                //se a variavel página(pg) não existir inclui inicio
        if (empty($_GET['pg'])) {
            include 'view/inicio.php';
        } else {
            $pg = $_GET['pg'];
            //qual pagina sera inclusa no codigo
            switch ($pg) {
                case 'login':
                    include 'view/login/login.php';
                    break;
                case 'inicio':
                    include 'view/inicio.php';
                    break;
                default:
                    echo 'Página não encontrada';
            }
        }
    ?>
	
    <footer <?php if (@$_GET['pg'] == 'login') {
        echo 'class="footer-login"';
    } ?>><p>&copy; Todos os Direitos Reservados | Equipe Avançada de Desenvolvimento 4º Semestre FAP</p></footer>
</body>
</html>