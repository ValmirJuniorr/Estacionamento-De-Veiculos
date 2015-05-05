<?php
	include_once("control/Usuario/conferirLogin.php");	
?>

<header class="menu-top">
	<h1><a href="#">Mananger Park</a></h1>
	<nav>
		<ul>
			<li><a href="?pg=inicio">Início</a></li>
			<li><a href="?area=lista_atendentes">Atendentes</a></li>
			<li><a href="?area=lista_clientes">Clientes</a></li>
			<li><a href="?area=lista_vagas">Vagas</a></li>
			<li><a href="#">Relatórios</a></li>
			<li><a href="control/Usuario/logout.php">Sair</a></li>
		</ul>
	</nav>
</header>

<div class="content">
	<?php
	if(empty($_GET['area'])){				   
		include("view/admin/lista_atendentes.php");
	}		
		else{
			$area = $_GET['area'];
			switch($area){
				case "lista_atendentes":
					include("view/admin/lista_atendentes.php");
					break;
				case "cadastro_atendente":
					include("view/admin/cadastro_atendente.php");
					break;		
				case "editar_atendente":
					include("view/admin/editar_atendente.php");
					break;		
				case "msg":
					include("view/admin/msg.php");
					break;	
                                case "lista_clientes":
					include("view/admin/lista_clientes.php");
					break;
                                case "editar_cliente":
					include("view/admin/editar_cliente.php");
					break;
                                case "cadastro_cliente":
					include("view/admin/cadastro_cliente.php");
					break;
                                case "lista_vagas":
					include("view/admin/lista_vagas.php");
					break;
				default: 
					echo "Página não encontrada";				
			}
	}
	?>
</div>


<section>

</section>