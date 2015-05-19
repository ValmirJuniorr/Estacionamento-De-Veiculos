<h2 class="titulo">Vagas</h2>

<section class="tabela">
<?php	    
    
    //Executa a cláusula SQL		
    //Executa a consulta
    if(isset($_POST['busca'])){
        $busca = $_POST['busca'];
    }else{$busca='';}
    $sql = "SELECT * FROM vaga WHERE valor LIKE '%$busca%' OR idVaga LIKE '%$busca%' ORDER BY idVaga ASC";
    $conect = new Banco();
    $conect->abrir();
    $res = mysql_query($sql);
?>
    <form method="post" id="busca">
        <input name="busca" id="busca" class="btn-cadastrar" placeholder="Buscar Nº Vaga">
    </form>
    <table width=100% cellpading=0 cellspacing=0>
        <tr>
            <th>ID</th>
            <th>Valor</th>                        
            <th>Status</th>            
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
            echo '<td>'.$row['idVaga']."</td>";                         
            echo '<td>R$ '.$row['valor']."</td>";
            if($row['status']==0){
                echo '<td>Livre</td>';				
            }
            else if($row['status']==1){
                echo '<td>Oculpada</td>';				
            }
            else if($row['status']==2){
                echo '<td>Reservada</td>';				
            }
            echo '<td class="fright"><a href="?area=editar_vaga&idVaga='.$row['idVaga'].'" class="editar">Reservar</a>  <a href="control/admin/exclir_vaga.php?idVaga='.$row['idVaga'].'" class="excluir">Excluir</a></td>';
            echo "</tr>";
            $cont = $cont + 1;
      }
    ?>
    </table>	
</section>