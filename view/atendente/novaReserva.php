<script language="javascript" type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
<script src="js/validate/dist/jquery.validate.min.js"></script>
<script language="javascript" type="text/javascript" src="js/validacao.js"></script>

<?php
session_start();

    ?>

<section class="tabela">
<?php	
if(!isset($_GET['idCliente'])){
    
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
    <h2 class="titulo">Reserva | <smal>Escolha de Cliente</smal></h2>
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
            echo '<td class="fright"><a href="?area=novaReserva&idCliente='.$row['idCliente'].'" class="reservar">Escolher Vaga Exclusiva</a></td>';
            echo "</tr>";
            $cont = $cont + 1;
      }
    ?>
    </table>	
</section>
<?php    
}//
else{
    
?>
<h2 class="titulo">Reserva | <small>Escolha de Vaga</small></h2>

<section class="tabela">
<?php	    
    
    //Executa a cláusula SQL		
    //Executa a consulta
    if(isset($_POST['busca'])){
        $busca = $_POST['busca'];
    }else{$busca='';}
    $sql = "SELECT * FROM vaga WHERE status LIKE '%$busca%' AND status <> '2' AND status <> '1' ORDER BY idVaga ASC";
    $conect = new Banco();
    $conect->abrir();
    $res = mysql_query($sql);
?>
    
    <table width=100% cellpading=0 cellspacing=0>
        <tr>
            <th>Nº Vaga</th>
            <th>Valor por Hora</th>                                    
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
            echo '<td class="h1-id">'.$row['idVaga']."</td>";                         
            echo '<td>R$ '.$row['valor']."/h</td>";
            if($row['status']==0){                
                echo '<td class="fright"><a href="../../control/atendente/cadastrarReserva.php?idVaga='.$row['idVaga'].'&idCliente='.$_GET['idCliente'].'" class="reservar" >Confirmar</a></td>';
            }
            echo "</tr>";
            $cont = $cont + 1;
      }
    ?>
    </table>	
</section>
<?php
    }


?>
