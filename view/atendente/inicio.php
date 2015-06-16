<h2 class="titulo">Vagas</h2>

<section class="tabela">
<?php	    
    
    //Executa a cláusula SQL		
    //Executa a consulta
    if(isset($_POST['busca'])){
        $busca = $_POST['busca'];
    }else{$busca='';}
    $sql = "SELECT * FROM vaga WHERE status LIKE '%$busca%' AND status <> '2' ORDER BY idVaga ASC";
    $conect = new Banco();
    $conect->abrir();
    $res = mysql_query($sql);
?>
    <form method="post" id="busca" class="item-list-cliente">
        <label for="busca">Listar por Status</label>        
        <select name="busca" id="busca" class="">
            <option value="">Todos</option>
            <option value="0">Livre</option>            
            <option value="1">Ocupado</option>            
        </select>        
        <input type="submit" name="ok" id="ok" class="" value="Buscar">
    </form>
    <table width=100% cellpading=0 cellspacing=0>
        <tr>
            <th>Nº Vaga</th>
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
            echo '<td class="h1-id">'.$row['idVaga']."</td>";                         
            echo '<td>R$ '.$row['valor']."</td>";
            if($row['status']==0){
                echo '<td>Livre</td>';	
                echo '<td class="fright"><a href="?area=entrada&idVaga='.$row['idVaga'].'" class="entrada" >Entrada</a></td>';
            }
            else if($row['status']==1){
                echo '<td>Ocupada</td>';
                echo '<td class="fright"><a href="?area=saida&idVaga='.$row['idVaga'].'" class="saida">Saída</a></td>';
            }
            echo "</tr>";
            $cont = $cont + 1;
      }
    ?>
    </table>	
</section>