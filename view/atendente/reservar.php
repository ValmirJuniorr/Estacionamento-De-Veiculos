<h2 class="titulo">Reserva</h2>

<section class="tabela">
<?php	    
    
    //Executa a cláusula SQL		
    //Executa a consulta
    if(isset($_POST['busca'])){
        $busca = $_POST['busca'];
    }else{$busca='';}
    $sql = "SELECT * FROM reserva ORDER BY idVaga ASC";
    $conect = new Banco();
    $conect->abrir();
    $res = mysql_query($sql);
?>
    <form method="post" id="busca" class="item-list-cliente">                            
        <input type="submit" name="ok" id="ok" class="" value="Nova Reserva">
    </form>
    <table width=100% cellpading=0 cellspacing=0>
        <tr>
            <th>Nº Vaga</th>
            <th>ID do Cliente</th>                                    
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
            echo '<td><a href="?area=perfilCliente&idCliente='.$row['idCliente'].'">'.$row['idCliente']." <small>[mais detalhes]</small></a></td>";            
            echo '<td class="fright"><a href="../../control/atendente/excluirReserva.php?idReserva='.$row['id'].'&idVaga='.$row['idVaga'].'" class="exreserva" >Excluir Reserva</a></td>';
            
            echo "</tr>";
            $cont = $cont + 1;
      }
      
      if(isset($_POST['ok'])){
          header('Location: ?area=novaReserva');
      }
    ?>
    </table>	
</section>