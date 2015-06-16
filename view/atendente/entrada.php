<script language="javascript" type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
<script src="js/validate/dist/jquery.validate.min.js"></script>
<script language="javascript" type="text/javascript" src="js/validacao.js"></script>

<?php
session_start();
if(!isset($_GET['tipo'])){
    $descontoDia= 20;
    $descontoDia= $descontoDia/100;
    $idVaga = $_GET['idVaga'];
    $sql = "SELECT * FROM vaga
        WHERE idVaga = $idVaga LIMIT 1";
    $conect = new Banco();
    $conect->abrir();
    $res = mysql_query($sql);
   // Exibe o resultado da nossa consulta
    while ($row = mysql_fetch_array($res)){
     
    // Zebramos nossa linha da tabela onde pegamos o cont dividimos por 2
    // se o resto for zero mostramos uma cor, se não for mostramos outra
?>
<h2 class="titulo">Locação da Vaga Nº <?php echo $row['idVaga'];?></h1><br>
<h2 class="titulo-list titulo">Valor por hora R$ <span>R$ <?php echo $row['valor'];?></span>
</h2>
<form class="form-login animated fadeInRight" id="formLocacao" name="formLocacao" method="get">
    <fieldset>		          
        <label for="valor" class="tipo-reserva">Cliente</label>        
        <input type="radio" name="tipo" id="tipo" checked class="tipo-reserva" value="1">
        <label for="valor" class="tipo-reserva">Aleatório</label>
        <input type="radio" name="tipo" id="tipo" class="tipo-reserva" value="2">
        <br>
        <br>
        <label for="placa" class="tipo-reserva">Placa</label>       
        <input type="text" name="placa" id="placa" class="data-form" placeholder="HYY0000" onchange="valida()">                                        
                
        <input type="hidden" name="idVaga" id="idVaga" value="<?php echo $row['idVaga'];?>">        
        <input type="hidden" name="area" id="idVaga" value="entrada">        
        <input type="submit" name="proximo" id="proximo" value="Proximo" class="entrar">						
    </fieldset>
</form>
<?php } 
}
else{
    ?>

<h2 class="titulo">Clientes - Locação Vaga <?php echo $_SESSION['locacao'][0]; ?></h2>
<section class="tabela">
<?php	
    
    $_SESSION['locacao'][0]= $_GET['idVaga'];
    $_SESSION['locacao'][1]= $_GET['tipo'];
    $_SESSION['locacao'][2]= $_GET['placa'];
    
    if($_SESSION['locacao'][1] == 1){
    // Executa a cláusula SQL		
    //Executa a consulta
    if(isset($_POST['busca'])){
        $busca = $_POST['busca'];
    }else{$busca='';}
    $sql = "SELECT cliente.idCliente, usuario.nomeUsuario FROM cliente
  INNER JOIN usuario ON usuario.idUsuario = cliente.idUsuario WHERE usuario.nomeUsuario LIKE '%$busca%'
  ORDER BY usuario.nomeUsuario ASC";
    $conect = new Banco();
    $conect->abrir();
    $res = mysql_query($sql);
?>
    <form method="post" id="busca">
        <input name="busca" id="busca" class="btn-cadastrar" placeholder="Buscar">
    </form>
    <table width=100% cellpading=0 cellspacing=0>
        <tr>
            <th>ID</th>
            <th>Nome</th>            
            <th class="fright">Ações</th>					
        </tr>
    <?php
        $cont = 0;
       // Exibe o resultado da nossa consulta
       while ($row = mysql_fetch_array($res)){
            // Zebramos nossa linha da tabela onde pegamos o cont dividimos por 2
            // se o resto for zero mostramos uma cor, se não for mostramos outra
            if ($cont % 2 == 0){
                    $cor = "#f2f2f2";
            }
            else{
                    $cor = "#ffffff";
            }    
            
            echo "<tr bgcolor='".$cor."'>";
            echo '<td>'.$row['idCliente']."</td>";                         
            echo '<td>'.$row['nomeUsuario']."</td>";				
            echo '<td class="fright"><a href="../../control/atendente/cadastrarLocacao.php?idCliente='.$row['idCliente'].'" class="entrada">Confirmar Entrada</a></td>';
            echo "</tr>";
            $cont = $cont + 1;
      }
    ?>
    </table>	
</section>
<?php    
}else{
    header('Location: ../../control/atendente/cadastrarLocacao.php');
}
}//fim do else 

?>
<script type="text/javascript">
function valida(){
	with(document.formLocacao){
		var erro = 0; //Erros
		var msg = ""; //MSGs
		var er = /[a-z]{3}?\d{4}/gim; //Expressão regular para 3 letras e 4 números
		if (placa.value == ""){
			msg = msg + "Digite a placa de seu veículo.\n";
			erro = erro + 1;
		} else if (placa.value != ""){
			er.lastIndex = 0;
			pl = placa.value;
			if (!er.test(pl)){
				msg = msg + "Placa inválida. Uma placa válida deve contem 3 letras e 4 números.\n";
				erro = erro + 1;	
			}	
		}
		if (erro==0){
			submit();
		} else {
			alert(msg);
		}
	}
}
</script>
