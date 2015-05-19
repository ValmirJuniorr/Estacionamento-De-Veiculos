<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Mananger Park Val</title>
	<meta charset="utf-8">
	<meta name="description" content="Gerencie o seu estacionamento com iteligencia de maneira rápida.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">	
	<link rel="shortcut icon" href="../../img/favicon.ico">
	<!-- Style Css -->
	<link rel="stylesheet" href="../../style/style.css">
	<link rel="stylesheet" href="../../style/print/style.css" media="print">
	<link rel="stylesheet" href="../../style/animate.css">
</head>
<body>	
    <?php
    date_default_timezone_set('America/Sao_Paulo');
    include_once('../../control/connection/connection.class.php'); ?>
    
<header class="menu-top">
	<h1><a href="?pg=inicio">Mananger Park</a></h1>
	<nav>
		<ul>
			<li><a href="?pg=inicio">Início</a></li>		
			<li><a href="?area=reservar">Reserva</a></li>		
			<li><a href="control/Usuario/logout.php">Sair</a></li>
		</ul>
	</nav>
</header>

<div class="content">
	<?php
	if(empty($_GET['area'])){				   
		include("inicio.php");
	}		
		else{
			$area = $_GET['area'];
			switch($area){												
				case "msg":
					include("../admin/msg.php");
					break;
				case "reservar":
					include("reservar.php");
					break;
				case "entrada":
					include("entrada.php");
					break;
				case "saida":
					include("saida.php");
					break;
				default: 
				case "perfilCliente":
					include("perfilCliente.php");
					break;
				default: 
				case "novaReserva":
					include("novaReserva.php");
					break;
				default: 
					echo "Página não encontrada";				
			}
	}
	?>
</div>


<section>

</section>
	
    <footer <?php if(@$_GET['pg']=='login') echo 'class="footer-login"';?>><p>&copy; Todos os Direitos Reservados | Equipe Avançada de Desenvolvimento 4º Semestre FAP</p></footer>
</body>
</html>