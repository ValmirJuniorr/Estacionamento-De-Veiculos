<h2 class="titulo">Atendentes</h2>
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
    $sql = "SELECT idEmpregado, login, tipo FROM empregado WHERE tipo <> 1 AND login LIKE '%$busca%' ORDER BY login ASC";
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
            <th>Login</th>
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
            echo '<td>'.$row['idEmpregado']."</td>";
            echo '<td>'.$row['login']."</td>";				
            echo '<td class="fright"><a href="?area=editar_atendente&idEmpregado='.$row['idEmpregado'].'" class="editar">Editar</a>  <a href="control/admin/excluir_atendente.php?idEmpregado='.$row['idEmpregado'].'" class="excluir">Excluir</a></td>';
            echo "</tr>";
            $cont = $cont + 1;
      }
    ?>
    </table>	
</section>