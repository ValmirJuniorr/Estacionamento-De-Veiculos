<h2 class="titulo">Clientes</h2>
<a href="?area=cadastro_atendente" class="btn-cadastrar">CADASTRAR NOVO</a>
<section class="tabela">
<?php	
    include_once("control/Usuario/conferirLogin.php");	
    include_once("control/admin/verificarPermissao.php");	    	
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
            echo '<td class="fright"><a href="?area=editar_cliente&idCliente='.$row['idCliente'].'" class="editar">Editar</a>  <a href="control/admin/exclir_cliente.php?idCliente='.$row['idCliente'].'" class="excluir">Excluir</a></td>';
            echo "</tr>";
            $cont = $cont + 1;
      }
    ?>
    </table>	
</section>